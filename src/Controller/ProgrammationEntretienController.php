<?php

namespace App\Controller;

use App\Entity\Candidature;
use App\Entity\Etablissement;
use App\Entity\Metier;
use Doctrine\ORM\EntityManagerInterface;
use App\Service\SpreadsheetGenerator;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/programmation-entretien')]
#[IsGranted('ROLE_USER')]
class ProgrammationEntretienController extends AbstractController
{
    /**
     * Pourcentage de la capacité quotidienne d'un jury affecté à la Vague 1 (matin, 08h-12h).
     * Le reste va en Vague 2 (après-midi, 13h-15h).
     * Valeur fixée en dur selon la directive du chef de projet (ex: 25/40 = 62,5%).
     * À modifier ici directement si la répartition doit changer.
     */
    private const VAGUE1_PERCENT = 62.5;

    #[Route('/programmer', name: 'app_programmation_entretien_post', methods: ['POST'])]
    public function programmerPost(Request $request, EntityManagerInterface $entityManager): Response
    {
        if (!$this->isGranted('ROLE_ADMIN') && !$this->isGranted('ROLE_ENT') && !$this->isGranted('ROLE_JURY')) {
            throw $this->createAccessDeniedException('Accès refusé.');
        }

        $session = $request->getSession();
        $previewId = (string) $request->request->get('preview_id', '');

        if ($request->request->get('action') === 'confirm') {
            $sessionKey = 'programmation_entretien_preview_' . $previewId;
            $preview = $previewId !== '' ? $session->get($sessionKey) : null;

            if (!$preview || !$this->isCsrfTokenValid(
                'programmation_entretiens_' . $previewId,
                (string) $request->request->get('_token')
            )) {
                $this->addFlash('error', 'Cet aperçu est expiré ou invalide. Veuillez importer à nouveau le fichier.');
                return $this->redirectToRoute('app_programmation_entretien');
            }

            $ids = array_column($preview['planifies'], 'id');
            $candidatures = $entityManager->getRepository(Candidature::class)->findBy(['id' => $ids]);
            $byId = [];
            foreach ($candidatures as $candidature) {
                $byId[$candidature->getId()] = $candidature;
            }

            foreach ($preview['planifies'] as $item) {
                $candidature = $byId[$item['id']] ?? null;
                if (!$candidature || $candidature->getEtustatut() !== 2 || $candidature->getEntdate() || $candidature->getJury()) {
                    $this->addFlash('error', 'Au moins une candidature a changé depuis l’aperçu. Aucune modification n’a été enregistrée; veuillez relancer l’import.');
                    $session->remove($sessionKey);
                    return $this->redirectToRoute('app_programmation_entretien');
                }
            }

            $connection = $entityManager->getConnection();
            $connection->beginTransaction();
            try {
                foreach ($preview['planifies'] as $item) {
                    $candidature = $byId[$item['id']];
                    $candidature
                        ->setEntdate(new \DateTime($item['date'] . ' ' . str_pad((string) $item['heure'], 2, '0', STR_PAD_LEFT) . ':00:00'))
                        ->setJury($item['jury'])
                        ->setVague($item['vague'])
                        ->setEntlieu($item['lieu']);
                }
                $entityManager->flush();
                $connection->commit();
            } catch (\Throwable $exception) {
                $connection->rollBack();
                throw $exception;
            }

            $session->remove($sessionKey);
            $planifies = [];
            foreach ($preview['planifies'] as $item) {
                $planifies[] = [
                    'candidature' => $byId[$item['id']],
                    'date' => $item['date'],
                    'vague' => $item['vague'],
                    'jury' => $item['jury'],
                    'reprogramme' => false,
                ];
            }

            $resultats = [
                'total_excel' => $preview['total_excel'],
                'nb_nouveaux' => count($planifies),
                'nb_reprogrammes' => count($preview['deja_programmes']),
                'lieu' => $this->isGranted('ROLE_ENT')
                    ? ($entityManager->getRepository(Etablissement::class)->findOneBy(['user' => $this->getUser()])?->getNom() ?? 'Votre établissement')
                    : 'Tous les établissements',
                'introuvables' => $preview['erreurs'],
                'non_admissibles' => [],
                'sans_creneau' => $preview['sans_creneau'],
                'deja_programmes' => $preview['deja_programmes'],
                'creneaux_disponibles' => $preview['creneaux_disponibles'],
                'capacite_jury_jour' => $preview['capacite_jury_jour'],
                'capacite_vague1' => $preview['capacite_vague1'],
                'capacite_vague2' => $preview['capacite_vague2'],
                'nb_jours' => $preview['nb_jours'],
                'date_debut' => $preview['date_debut'],
                'date_fin' => $preview['date_fin'],
                'metier_id' => null,
                'etablissement_id' => null,
                'planifies' => $planifies,
                'pagination' => ['current' => 1, 'perPage' => count($planifies), 'totalItems' => count($planifies), 'totalPages' => 1],
            ];

            $this->addFlash('success', sprintf(
                'Programmation enregistrée : %d candidat(s) programmé(s), %d ligne(s) à vérifier, %d déjà programmé(s), %d sans créneau.',
                count($planifies),
                count($preview['erreurs']),
                count($preview['deja_programmes']),
                count($preview['sans_creneau'])
            ));

            return $this->render('programmation_entretien/index.html.twig', $this->programmerPageData($entityManager, [
                'resultats' => $resultats,
            ]));
        }

        $file = $request->files->get('fichier_excel');
        $nbJurys = (int) $request->request->get('nb_jury', 0);
        $capaciteParJuryParJour = (int) $request->request->get('capacite_jury_jour', 0);
        $dateDebutInput = (string) $request->request->get('date_debut', '');
        $dateFinInput = (string) $request->request->get('date_fin', '');

        if (!$this->isCsrfTokenValid('programmation_entretiens', (string) $request->request->get('_token'))
            || !$file || !$dateDebutInput || !$dateFinInput || $nbJurys <= 0 || $capaciteParJuryParJour <= 0) {
            $this->addFlash('error', 'Veuillez fournir un fichier valide et remplir les paramètres de programmation.');
            return $this->redirectToRoute('app_programmation_entretien');
        }

        $etablissementConnecte = null;
        if ($this->isGranted('ROLE_ENT')) {
            $etablissementConnecte = $entityManager->getRepository(Etablissement::class)->findOneBy(['user' => $this->getUser()]);
            if (!$etablissementConnecte) {
                $this->addFlash('error', 'Aucun établissement n’est rattaché à votre compte.');
                return $this->redirectToRoute('app_programmation_entretien');
            }
        }

        try {
            $start = new \DateTimeImmutable($dateDebutInput);
            $end = new \DateTimeImmutable($dateFinInput);
            if ($start > $end) {
                throw new \InvalidArgumentException('La date de début doit précéder la date de fin.');
            }
            $datesList = [];
            for ($date = $start; $date <= $end; $date = $date->modify('+1 day')) {
                $datesList[] = $date->format('Y-m-d');
            }

            $rows = IOFactory::load($file->getPathname(), 0, [IOFactory::READER_XLSX, IOFactory::READER_XLS, IOFactory::READER_CSV])->getActiveSheet()->toArray();
            if (count($rows) < 2) {
                throw new \InvalidArgumentException('Le fichier doit contenir une ligne d’en-têtes et au moins un candidat.');
            }

            $normalizeHeader = static function (string $value): string {
                $value = mb_strtolower(trim($value));
                $value = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $value) ?: $value;
                return preg_replace('/[^a-z0-9]+/', '', $value);
            };
            $headers = array_map(static fn ($value) => $normalizeHeader((string) $value), $rows[0]);
            $numeroColumn = null;
            $etablissementColumn = null;
            $metierColumn = null;
            $nomColumn = null;
            $prenomsColumn = null;
            foreach ($headers as $column => $header) {
                if ($numeroColumn === null && (str_contains($header, 'numero') || str_contains($header, 'reference'))) {
                    $numeroColumn = $column;
                }
                if ($etablissementColumn === null && str_contains($header, 'etablissement')) {
                    $etablissementColumn = $column;
                }
                if ($metierColumn === null && str_contains($header, 'metier')) {
                    $metierColumn = $column;
                }
                if ($nomColumn === null && (str_contains($header, 'nom') && !str_contains($header, 'numero'))) {
                    $nomColumn = $column;
                }
                if ($prenomsColumn === null && str_contains($header, 'prenom')) {
                    $prenomsColumn = $column;
                }
            }

            $importRows = [];
            $erreurs = [];
            $seen = [];
            $duplicates = [];
            $totalRows = 0;
            foreach (array_slice($rows, 1, null, true) as $index => $row) {
                $lineNumber = $index + 1;
                if (!array_filter($row, static fn ($value) => trim((string) $value) !== '')) {
                    continue;
                }
                ++$totalRows;

                $numero = '';
                if ($numeroColumn !== null) {
                    $numero = strtoupper(trim((string) ($row[$numeroColumn] ?? '')));
                } else {
                    foreach ($row as $cell) {
                        $value = strtoupper(trim((string) $cell));
                        if (preg_match('/^DK\d+$/', $value)) {
                            if ($numero !== '') {
                                $numero = '';
                                break;
                            }
                            $numero = $value;
                        }
                    }
                }

                if (!preg_match('/^DK\d+$/', $numero)) {
                    $erreurs[] = sprintf('Ligne %d : numéro de candidature absent ou invalide.', $lineNumber);
                    continue;
                }
                if (isset($seen[$numero])) {
                    $duplicates[$numero] = true;
                    $erreurs[] = sprintf('Ligne %d : le numéro %s est présent plusieurs fois (première occurrence ligne %d).', $lineNumber, $numero, $seen[$numero]);
                    continue;
                }
                $seen[$numero] = $lineNumber;
                $importRows[] = [
                    'numero' => $numero,
                    'line' => $lineNumber,
                    'etablissement' => $etablissementColumn !== null ? trim((string) ($row[$etablissementColumn] ?? '')) : '',
                    'metier' => $metierColumn !== null ? trim((string) ($row[$metierColumn] ?? '')) : '',
                    'nom' => $nomColumn !== null ? trim((string) ($row[$nomColumn] ?? '')) : '',
                    'prenoms' => $prenomsColumn !== null ? trim((string) ($row[$prenomsColumn] ?? '')) : '',
                ];
            }
            if ($totalRows === 0) {
                $erreurs[] = 'Le fichier ne contient aucune ligne de candidat.';
            }
            $importRows = array_values(array_filter(
                $importRows,
                static fn (array $row): bool => !isset($duplicates[$row['numero']])
            ));
        } catch (\Throwable $exception) {
            $this->addFlash('error', 'Impossible de lire le fichier ou les paramètres : ' . $exception->getMessage());
            return $this->redirectToRoute('app_programmation_entretien');
        }

        $numeros = array_column($importRows, 'numero');
        $candidatures = [];
        if ($numeros) {
            $qb = $entityManager->getRepository(Candidature::class)->createQueryBuilder('c')
                ->where('UPPER(TRIM(c.numero)) IN (:numeros)')
                ->setParameter('numeros', $numeros);
            if ($etablissementConnecte) {
                $qb->andWhere('c.etablissement = :etablissement')
                    ->setParameter('etablissement', $etablissementConnecte);
            }
            $candidatures = $qb->getQuery()->getResult();
        }
        $byNumero = [];
        foreach ($candidatures as $candidature) {
            $byNumero[strtoupper(trim((string) $candidature->getNumero()))] = $candidature;
        }

        $groupes = [];
        $dejaProgrammes = [];
        foreach ($importRows as $row) {
            $candidature = $byNumero[$row['numero']] ?? null;
            if (!$candidature) {
                $erreurs[] = sprintf('Ligne %d (%s) : candidature introuvable ou hors de votre établissement.', $row['line'], $row['numero']);
                continue;
            }
            if ($candidature->getEtustatut() !== 2) {
                $erreurs[] = sprintf('Ligne %d (%s) : le dossier n’est pas admissible à l’entretien.', $row['line'], $row['numero']);
                continue;
            }
            if (!$candidature->getEtablissement() || !$candidature->getMetier()) {
                $erreurs[] = sprintf('Ligne %d (%s) : établissement ou métier manquant dans le dossier.', $row['line'], $row['numero']);
                continue;
            }
            $user = $candidature->getUser();
            $expectedValues = [
                'etablissement' => $candidature->getEtablissement()->getNom(),
                'metier' => $candidature->getMetier()->getNom(),
                'nom' => $user ? $user->getNom() : '',
                'prenoms' => $user ? $user->getPrenoms() : '',
            ];
            foreach ($expectedValues as $field => $actual) {
                if ($row[$field] !== '' && $normalizeHeader($row[$field]) !== $normalizeHeader((string) $actual)) {
                    $erreurs[] = sprintf('Ligne %d (%s) : le %s indiqué dans le fichier ne correspond pas au dossier.', $row['line'], $row['numero'], $field);
                    continue 2;
                }
            }
            if ($candidature->getEntdate() || $candidature->getJury()) {
                $dejaProgrammes[] = $row['numero'];
                continue;
            }

            $key = $candidature->getEtablissement()->getId() . ':' . $candidature->getMetier()->getId();
            if (!isset($groupes[$key])) {
                $groupes[$key] = [
                    'etablissement' => $candidature->getEtablissement()->getNom(),
                    'metier' => $candidature->getMetier()->getNom(),
                    'candidatures' => [],
                ];
            }
            $groupes[$key]['candidatures'][] = $candidature;
        }

        uasort($groupes, static fn (array $a, array $b): int => [$a['etablissement'], $a['metier']] <=> [$b['etablissement'], $b['metier']]);

        $capaciteVague1 = (int) round($capaciteParJuryParJour * self::VAGUE1_PERCENT / 100);
        $capaciteVague2 = $capaciteParJuryParJour - $capaciteVague1;
        $dateDebut = new \DateTime($datesList[0] . ' 00:00:00');
        $dateFin = new \DateTime(end($datesList) . ' 23:59:59');
        $dejaOccupes = $entityManager->getRepository(Candidature::class)->createQueryBuilder('c')
            ->andWhere('c.entdate BETWEEN :debut AND :fin')
            ->andWhere('c.jury IS NOT NULL')
            ->andWhere('c.vague IN (1, 2)')
            ->setParameter('debut', $dateDebut)
            ->setParameter('fin', $dateFin)
            ->getQuery()
            ->getResult();
        $occupation = [];
        foreach ($dejaOccupes as $candidatureOccupee) {
            $entretienOccupe = $candidatureOccupee->getEntdate();
            $juryOccupe = $candidatureOccupee->getJury();
            $vagueOccupee = $candidatureOccupee->getVague();
            if (!$entretienOccupe || !$juryOccupe || !in_array($vagueOccupee, [1, 2], true)) {
                continue;
            }
            $dateOccupee = $entretienOccupe->format('Y-m-d');
            $key = $dateOccupee . ':' . $juryOccupe . ':' . $vagueOccupee;
            $occupation[$key] = ($occupation[$key] ?? 0) + 1;
        }

        $slots = [];
        foreach ($datesList as $date) {
            for ($jury = 1; $jury <= $nbJurys; ++$jury) {
                foreach ([1 => [8, $capaciteVague1], 2 => [13, $capaciteVague2]] as $vague => [$heure, $capacite]) {
                    $key = $date . ':' . $jury . ':' . $vague;
                    for ($slot = $occupation[$key] ?? 0; $slot < $capacite; ++$slot) {
                        $slots[] = ['date' => $date, 'jury' => $jury, 'vague' => $vague, 'heure' => $heure];
                    }
                }
            }
        }

        $planifies = [];
        $sansCreneau = [];
        $slotIndex = 0;
        foreach ($groupes as $groupe) {
            foreach ($groupe['candidatures'] as $candidature) {
                $slot = $slots[$slotIndex] ?? null;
                if (!$slot) {
                    $sansCreneau[] = $candidature->getNumero();
                    continue;
                }
                ++$slotIndex;
                $planifies[] = [
                    'id' => $candidature->getId(),
                    'numero' => $candidature->getNumero(),
                    'date' => $slot['date'],
                    'heure' => $slot['heure'],
                    'jury' => $slot['jury'],
                    'vague' => $slot['vague'],
                    'lieu' => $candidature->getEtablissement()->getNom(),
                    'etablissement' => $groupe['etablissement'],
                    'metier' => $groupe['metier'],
                ];
            }
        }

        $previewId = bin2hex(random_bytes(16));
        $preview = [
            'planifies' => $planifies,
            'erreurs' => $erreurs,
            'deja_programmes' => array_values(array_unique($dejaProgrammes)),
            'sans_creneau' => $sansCreneau,
            'total_excel' => $totalRows,
            'creneaux_disponibles' => count($datesList) * $nbJurys * $capaciteParJuryParJour,
            'capacite_jury_jour' => $capaciteParJuryParJour,
            'capacite_vague1' => $capaciteVague1,
            'capacite_vague2' => $capaciteVague2,
            'nb_jours' => count($datesList),
            'date_debut' => $dateDebutInput,
            'date_fin' => $dateFinInput,
            'groupes' => array_map(static fn (array $groupe): array => [
                'etablissement' => $groupe['etablissement'],
                'metier' => $groupe['metier'],
                'effectif' => count($groupe['candidatures']),
            ], array_values($groupes)),
        ];
        $session->set('programmation_entretien_preview_' . $previewId, $preview);

        $candidatureById = [];
        foreach ($candidatures as $candidature) {
            $candidatureById[$candidature->getId()] = $candidature;
        }
        $planifiesAffichage = array_map(static fn (array $item): array => [
            'candidature' => $candidatureById[$item['id']],
            'date' => $item['date'],
            'heure' => $item['heure'],
            'jury' => $item['jury'],
            'vague' => $item['vague'],
            'lieu' => $item['lieu'],
            'etablissement' => $item['etablissement'],
            'metier' => $item['metier'],
        ], $planifies);

        return $this->render('programmation_entretien/index.html.twig', $this->programmerPageData($entityManager, [
            'previsualisation' => [
                'id' => $previewId,
                'total_excel' => $preview['total_excel'],
                'planifies' => $planifiesAffichage,
                'erreurs' => $erreurs,
                'deja_programmes' => array_values(array_unique($dejaProgrammes)),
                'sans_creneau' => $sansCreneau,
                'groupes' => $preview['groupes'],
            ],
        ]));
    }

    #[Route('/modele-import', name: 'app_programmation_entretien_modele', methods: ['GET'])]
    public function modeleImport(): Response
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Candidats');
        $sheet->fromArray([['Numéro candidature', 'Nom', 'Prénoms', 'Établissement', 'Métier']], null, 'A1');
        $sheet->getStyle('A1:E1')->getFont()->setBold(true);
        foreach (range('A', 'E') as $column) {
            $sheet->getColumnDimension($column)->setAutoSize(true);
        }

        $response = new StreamedResponse(static function () use ($spreadsheet): void {
            (new Xlsx($spreadsheet))->save('php://output');
        });
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $response->headers->set('Content-Disposition', 'attachment; filename="modele_candidats_entretiens.xlsx"');
        $response->headers->set('Cache-Control', 'max-age=0');

        return $response;
    }

    private function programmerPageData(EntityManagerInterface $entityManager, array $extra = []): array
    {
        $etablissementConnecte = null;
        if ($this->isGranted('ROLE_ENT')) {
            $etablissementConnecte = $entityManager->getRepository(Etablissement::class)->findOneBy(['user' => $this->getUser()]);
        }

        return array_merge([
            'title' => 'Programmation des tests d’entretien',
            'resultats' => null,
            'previsualisation' => null,
            'etablissements' => $entityManager->getRepository(Etablissement::class)->findAll(),
            'metiers' => $entityManager->getRepository(Metier::class)->findAll(),
            'etablissementConnecte' => $etablissementConnecte,
        ], $extra);
    }

    #[Route('/programmer', name: 'app_programmation_entretien', methods: ['GET'])]
    public function programmer(Request $request, EntityManagerInterface $entityManager): Response
    {
        if (!$this->isGranted('ROLE_ADMIN') && !$this->isGranted('ROLE_ENT') && !$this->isGranted('ROLE_JURY')) {
            throw $this->createAccessDeniedException('Accès refusé.');
        }

        $resultats = null;

        if ($request->isMethod('POST')) {
            $file = $request->files->get('fichier_excel');
            $nbJurys = (int) $request->request->get('nb_jury', 1);
            $capaciteParJuryParJour = (int) $request->request->get('capacite_jury_jour', 0);
            $dateDebutInput = $request->request->get('date_debut');
            $dateFinInput = $request->request->get('date_fin');
            $metierId = $request->request->get('metier_id');

            // Détermination de l'établissement et du lieu
            $user = $this->getUser();
            if ($this->isGranted('ROLE_ENT')) {
                $etablissement = $entityManager->getRepository(Etablissement::class)->findOneBy(['user' => $user]);
                $lieu = $etablissement ? $etablissement->getNom() : '';
            } else {
                $etablissementId = $request->request->get('etablissement_id');
                $etablissement = $etablissementId ? $entityManager->getRepository(Etablissement::class)->find($etablissementId) : null;
                $lieu = $etablissement ? $etablissement->getNom() : trim($request->request->get('lieu', ''));
            }

            if (!$file || !$dateDebutInput || !$dateFinInput || $nbJurys <= 0 || $capaciteParJuryParJour <= 0 || empty($lieu) || !$metierId) {
                $this->addFlash('error', 'Veuillez remplir tous les champs obligatoires.');
                return $this->redirectToRoute('app_programmation_entretien');
            }

            // Génération des dates
            $datesList = [];
            try {
                $start = new \DateTime($dateDebutInput);
                $end = new \DateTime($dateFinInput);
                $end->modify('+1 day');

                $period = new \DatePeriod($start, new \DateInterval('P1D'), $end);
                foreach ($period as $dt) {
                    $datesList[] = $dt->format('Y-m-d');
                }
            } catch (\Exception $e) {
                $this->addFlash('error', 'Les dates spécifiées ne sont pas valides.');
                return $this->redirectToRoute('app_programmation_entretien');
            }

            if (empty($datesList)) {
                $this->addFlash('error', 'La plage de dates sélectionnée est invalide.');
                return $this->redirectToRoute('app_programmation_entretien');
            }

            try {
                $spreadsheet = IOFactory::load($file->getPathname(), 0, [IOFactory::READER_XLSX, IOFactory::READER_XLS, IOFactory::READER_CSV]);
                $sheet = $spreadsheet->getActiveSheet();
                $rows = $sheet->toArray();

                // ✅ Détection intelligente du numéro DK dans n'importe quelle colonne
                $numeros = [];
                foreach ($rows as $index => $row) {
                    if ($index === 0) continue;

                    $num = '';
                    foreach ($row as $cell) {
                        $cellStr = preg_replace('/[\x00-\x1F\x7F\xA0]/u', '', (string)$cell);
                        $cellStr = trim(strtoupper($cellStr));

                        if (preg_match('/^DK\d+/', $cellStr)) {
                            $num = $cellStr;
                            break;
                        }
                    }

                    if ($num !== '') {
                        $numeros[] = $num;
                    }
                }

                if (empty($numeros)) {
                    $this->addFlash('error', 'Aucun numéro de candidature trouvé dans le fichier.');
                    return $this->redirectToRoute('app_programmation_entretien');
                }

                // ✅ Recherche des candidatures éligibles (etustatut = 2) + métier + établissement
                $qb = $entityManager->getRepository(Candidature::class)
                    ->createQueryBuilder('c')
                    ->where('UPPER(TRIM(c.numero)) IN (:numeros)')
                    ->andWhere('c.etustatut = 2')
                    ->andWhere('c.metier = :metierId')
                    ->setParameter('numeros', $numeros)
                    ->setParameter('metierId', $metierId);

                if ($etablissement) {
                    $qb->andWhere('c.etablissement = :etablissement')
                       ->setParameter('etablissement', $etablissement);
                }

                $candidatures = $qb->getQuery()->getResult();

                $trouvesNumeros = array_map(fn($c) => strtoupper(trim($c->getNumero())), $candidatures);
                $introuvables = array_values(array_diff($numeros, $trouvesNumeros));

                if (empty($candidatures)) {
                    $this->addFlash('error', sprintf(
                        'Aucune candidature éligible trouvée. %d numéro(s) reçu(s), 0 correspondance.',
                        count($numeros)
                    ));
                    return $this->redirectToRoute('app_programmation_entretien');
                }

                // ✅ RÉPARTITION :
                // - La capacité par jury et par jour est saisie manuellement (le nombre de candidats
                //   peut varier d'une session à l'autre).
                // - Elle est répartie entre les deux vagues selon le pourcentage fixé en dur dans le code
                //   (self::VAGUE1_PERCENT, ex: 62,5% → 25 le matin / 15 l'après-midi sur 40).
                $nbJours = count($datesList);

                $capaciteVague1 = (int) round($capaciteParJuryParJour * self::VAGUE1_PERCENT / 100);
                $capaciteVague2 = $capaciteParJuryParJour - $capaciteVague1;

                $vagues = [
                    1 => ['heure_debut' => 8,  'horaire' => '08h00 - 12h00', 'capacite' => $capaciteVague1],
                    2 => ['heure_debut' => 13, 'horaire' => '13h00 - 15h00', 'capacite' => $capaciteVague2],
                ];

                $planifies = [];
                $sansCreneau = [];
                $dejaProgrammes = [];

                // Détection des candidats déjà programmés AVANT d'écraser leurs données
                foreach ($candidatures as $candidature) {
                    if ($candidature->getEntdate() && $candidature->getJury()) {
                        $dejaProgrammes[] = $candidature->getNumero();
                    }
                }

                // On consomme la liste des candidats dans l'ordre : pour chaque date, pour chaque jury,
                // on remplit d'abord la Vague 1 (capaciteVague1 candidats) puis la Vague 2 (capaciteVague2).
                $candidatIndex = 0;
                $totalCandidats = count($candidatures);

                foreach ($datesList as $dateCourante) {
                    for ($jury = 1; $jury <= $nbJurys; $jury++) {
                        foreach ($vagues as $numVague => $config) {
                            for ($i = 0; $i < $config['capacite'] && $candidatIndex < $totalCandidats; $i++) {
                                $candidature = $candidatures[$candidatIndex];
                                $candidatIndex++;

                                $dateTime = new \DateTime($dateCourante . ' ' . str_pad((string)$config['heure_debut'], 2, '0', STR_PAD_LEFT) . ':00:00');

                                $candidature->setEntdate($dateTime);
                                $candidature->setJury($jury);
                                $candidature->setVague($numVague);
                                $candidature->setEntlieu($lieu);

                                $entityManager->persist($candidature);

                                $planifies[] = [
                                    'candidature' => $candidature,
                                    'date' => $dateCourante,
                                    'vague' => $numVague,
                                    'jury' => $jury,
                                    'reprogramme' => in_array($candidature->getNumero(), $dejaProgrammes, true)
                                ];
                            }
                        }
                    }
                }

                // Candidats restants au-delà de la capacité totale
                while ($candidatIndex < $totalCandidats) {
                    $sansCreneau[] = $candidatures[$candidatIndex]->getNumero();
                    $candidatIndex++;
                }

                // ✅ Flush unique après la boucle
                $entityManager->flush();

                // ✅ Logs
                error_log(sprintf(
                    '[PROGRAMMATION] Fichier: %d | Trouvés: %d | Planifiés: %d | Introuvables: %d | Sans créneau: %d',
                    count($numeros),
                    count($candidatures),
                    count($planifies),
                    count($introuvables),
                    count($sansCreneau)
                ));

                $page = $request->query->getInt('page', 1);
                $perPage = 10;
                $totalItems = count($planifies);
                $totalPages = (int)ceil($totalItems / $perPage);
                $offset = ($page - 1) * $perPage;
                $paginatedPlanifies = array_slice($planifies, $offset, $perPage, true);

                if ($request->isXmlHttpRequest()) {
                    $html = $this->renderView('programmation_entretien/_planifiques_table_body.html.twig', [
                        'planifies' => $paginatedPlanifies,
                    ]);
                    return new JsonResponse([
                        'html' => $html,
                        'pagination' => [
                            'current' => $page,
                            'perPage' => $perPage,
                            'totalItems' => $totalItems,
                            'totalPages' => $totalPages,
                        ]
                    ]);
                }

                $resultats = [
                    'total_excel' => count($numeros),
                    'nb_nouveaux' => count($planifies),
                    'nb_reprogrammes' => count($dejaProgrammes),
                    'lieu' => $lieu,
                    'introuvables' => $introuvables,
                    'non_admissibles' => [],
                    'sans_creneau' => $sansCreneau,
                    'deja_programmes' => $dejaProgrammes,
                    'creneaux_disponibles' => count($datesList) * $nbJurys * $capaciteParJuryParJour,
                    'capacite_jury_jour' => $capaciteParJuryParJour,
                    'capacite_vague1' => $capaciteVague1,
                    'capacite_vague2' => $capaciteVague2,
                    'nb_jours' => $nbJours,
                    'date_debut' => $dateDebutInput,
                    'date_fin' => $dateFinInput,
                    'metier_id' => $metierId,
                    'etablissement_id' => $etablissement ? $etablissement->getId() : null,
                    'planifies' => $paginatedPlanifies,
                    'pagination' => [
                        'current' => $page,
                        'perPage' => $perPage,
                        'totalItems' => $totalItems,
                        'totalPages' => $totalPages,
                    ]
                ];

                $this->addFlash('success', sprintf(
                    'Répartition effectuée : %d programmé(s), %d introuvable(s), %d sans créneau.',
                    count($planifies),
                    count($introuvables),
                    count($sansCreneau)
                ));

            } catch (FileException $e) {
                $this->addFlash('error', 'Erreur lors du traitement du fichier Excel.');
                error_log('[PROGRAMMATION] Erreur fichier : ' . $e->getMessage());
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de la programmation : ' . $e->getMessage());
                error_log('[PROGRAMMATION] Erreur : ' . $e->getMessage());
            }
        }

        $etablissements = $entityManager->getRepository(Etablissement::class)->findAll();
        $metiers = $entityManager->getRepository(Metier::class)->findAll();

        $etablissementConnecte = null;
        if ($this->isGranted('ROLE_ENT')) {
            $etablissementConnecte = $entityManager->getRepository(Etablissement::class)->findOneBy(['user' => $this->getUser()]);
        }

        return $this->render('programmation_entretien/index.html.twig', [
            'title' => 'Programmation des tests d\'entretien',
            'resultats' => $resultats,
            'etablissements' => $etablissements,
            'metiers' => $metiers,
            'etablissementConnecte' => $etablissementConnecte,
        ]);
    }

    /**
     * Exporte le planning des entretiens en Excel, avec une feuille par jury.
     * Se base sur les candidatures déjà programmées (entlieu + entdate) correspondant
     * aux critères de la dernière programmation (lieu, période, métier, établissement).
     *
     * Chaque feuille contient des bandeaux de séparation affichant le JOUR et la VAGUE
     * (ex: "MARDI 15/09/2026 | VAGUE 1 — MATIN (08h00 - 12h00)").
     */
    #[Route('/export-planning', name: 'app_programmation_entretien_export', methods: ['GET'])]
    public function exportPlanning(Request $request, EntityManagerInterface $entityManager): Response
    {
        if (!$this->isGranted('ROLE_ADMIN') && !$this->isGranted('ROLE_ENT') && !$this->isGranted('ROLE_JURY')) {
            throw $this->createAccessDeniedException('Accès refusé.');
        }

        $lieu = trim($request->query->get('lieu', ''));
        $dateDebutInput = $request->query->get('date_debut');
        $dateFinInput = $request->query->get('date_fin');
        $metierId = $request->query->get('metier_id');
        $etablissementId = $request->query->get('etablissement_id');

        if (!$dateDebutInput || !$dateFinInput) {
            $this->addFlash('error', 'Impossible de générer l\'export : critères de programmation manquants.');
            return $this->redirectToRoute('app_programmation_entretien');
        }

        try {
            $debut = new \DateTime($dateDebutInput . ' 00:00:00');
            $fin = new \DateTime($dateFinInput . ' 23:59:59');
        } catch (\Exception $e) {
            $this->addFlash('error', 'Dates invalides pour l\'export.');
            return $this->redirectToRoute('app_programmation_entretien');
        }

        $qb = $entityManager->getRepository(Candidature::class)->createQueryBuilder('c')
            ->andWhere('c.entdate BETWEEN :debut AND :fin')
            ->andWhere('c.jury IS NOT NULL')
            ->setParameter('debut', $debut)
            ->setParameter('fin', $fin)
            ->orderBy('c.jury', 'ASC')
            ->addOrderBy('c.entdate', 'ASC');

        if ($lieu !== '') {
            $qb->andWhere('c.entlieu = :lieu')->setParameter('lieu', $lieu);
        }
        if ($metierId) {
            $qb->andWhere('c.metier = :metierId')->setParameter('metierId', $metierId);
        }
        if ($etablissementId) {
            $qb->andWhere('c.etablissement = :etablissement')->setParameter('etablissement', $etablissementId);
        }
        if ($this->isGranted('ROLE_ENT')) {
            $etablissementConnecte = $entityManager->getRepository(Etablissement::class)->findOneBy(['user' => $this->getUser()]);
            if (!$etablissementConnecte) {
                throw $this->createAccessDeniedException('Aucun établissement n’est rattaché à ce compte.');
            }
            $qb->andWhere('c.etablissement = :etablissementConnecte')
                ->setParameter('etablissementConnecte', $etablissementConnecte);
        }

        $candidatures = $qb->getQuery()->getResult();

        if (empty($candidatures)) {
            $this->addFlash('error', 'Aucun candidat programmé ne correspond à ces critères.');
            return $this->redirectToRoute('app_programmation_entretien');
        }

        // Regroupement par numéro de jury
        $parJury = [];
        foreach ($candidatures as $candidature) {
            $parJury[$candidature->getJury()][] = $candidature;
        }
        ksort($parJury);

        // ✅ Tri de chaque liste de jury par (JOUR, VAGUE, NOM, PRÉNOM)
        foreach ($parJury as $numJury => $candidatsJury) {
            usort($candidatsJury, static function (Candidature $a, Candidature $b): int {
                // 1) Comparaison sur le JOUR (date)
                $dateA = $a->getEntdate() ? $a->getEntdate()->format('Y-m-d') : '9999-12-31';
                $dateB = $b->getEntdate() ? $b->getEntdate()->format('Y-m-d') : '9999-12-31';
                if ($dateA !== $dateB) {
                    return strcmp($dateA, $dateB);
                }

                // 2) Comparaison sur la VAGUE (Vague 1 avant Vague 2)
                $vagueA = $a->getVague() ?? 999;
                $vagueB = $b->getVague() ?? 999;
                if ($vagueA !== $vagueB) {
                    return $vagueA <=> $vagueB;
                }

                // 3) Comparaison sur le NOM
                $nomA = $a->getUser() ? $a->getUser()->getNom() : '';
                $nomB = $b->getUser() ? $b->getUser()->getNom() : '';
                $cmpNom = strcasecmp((string) $nomA, (string) $nomB);
                if ($cmpNom !== 0) {
                    return $cmpNom;
                }

                // 4) Comparaison sur le PRÉNOM
                $prenomA = $a->getUser() ? $a->getUser()->getPrenoms() : '';
                $prenomB = $b->getUser() ? $b->getUser()->getPrenoms() : '';
                return strcasecmp((string) $prenomA, (string) $prenomB);
            });
            $parJury[$numJury] = $candidatsJury;
        }

        $headers = [
            'No', 'No Candidature', 'Nom', 'Prénom', 'Email', 'Sexe', 'Contact', 'Établissement', 'Métier',
            'Date de naissance', 'Résidence', 'Date entretien', 'Vague entretien', 'Heure entretien',
        ];

        // Tableau associatif pour convertir le nom du jour anglais en français
        $joursFR = [
            'Monday'    => 'Lundi',
            'Tuesday'   => 'Mardi',
            'Wednesday' => 'Mercredi',
            'Thursday'  => 'Jeudi',
            'Friday'    => 'Vendredi',
            'Saturday'  => 'Samedi',
            'Sunday'    => 'Dimanche',
        ];

        $spreadsheet = new Spreadsheet();
        $spreadsheet->removeSheetByIndex(0);

        $sheetIndex = 0;
        foreach ($parJury as $numJury => $candidatsJury) {
            $sheet = $spreadsheet->createSheet($sheetIndex);
            $sheet->setTitle('Jury ' . $numJury);

            // En-tête
            $sheet->fromArray($headers, null, 'A1');
            $sheet->getStyle('A1:M1')->getFont()->setBold(true);
            $sheet->getStyle('A1:M1')->getFont()->getColor()->setRGB('FFFFFF');
            $sheet->getStyle('A1:M1')->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB('4F46E5');

            $row = 2;
            $no = 1;
            $jourCourant = null;
            $vagueCourante = null;

            foreach ($candidatsJury as $candidature) {
                $vague = $candidature->getVague();
                $entdate = $candidature->getEntdate();
                $jour = $entdate ? $entdate->format('Y-m-d') : null;

                // ✅ Nouveau bandeau : dès qu'on change de JOUR ou de VAGUE
                if ($jour !== $jourCourant || $vague !== $vagueCourante) {
                    $jourCourant = $jour;
                    $vagueCourante = $vague;

                    // Ligne vide pour aérer
                    $row++;

                    // Construction du libellé : "MARDI 15/09/2026 | VAGUE 1 — MATIN (08h00 - 12h00)"
                    if ($entdate) {
                        $jourSemaine = $joursFR[$entdate->format('l')] ?? $entdate->format('l');
                        $libelleJour = strtoupper($jourSemaine) . ' ' . $entdate->format('d/m/Y');
                    } else {
                        $libelleJour = 'DATE NON DÉFINIE';
                    }

                    $libelleVague = $vague === 1
                        ? 'VAGUE 1 — MATIN (08h00 - 12h00)'
                        : 'VAGUE 2 — APRÈS-MIDI (13h00 - 15h00)';

                    $titreBandeau = $libelleJour . '   |   ' . $libelleVague;

                    // Fusion de A à M pour le bandeau
                    $sheet->mergeCells('A' . $row . ':M' . $row);
                    $sheet->setCellValue('A' . $row, $titreBandeau);

                    // Style du bandeau
                    $sheet->getStyle('A' . $row . ':M' . $row)->getFont()->setBold(true);
                    $sheet->getStyle('A' . $row . ':M' . $row)->getFont()->getColor()->setRGB('FFFFFF');
                    $sheet->getStyle('A' . $row . ':M' . $row)->getFont()->setSize(12);
                    $sheet->getStyle('A' . $row . ':M' . $row)->getFill()
                        ->setFillType(Fill::FILL_SOLID)
                        ->getStartColor()->setRGB($vague === 1 ? '0EA5E9' : 'F59E0B');

                    // Centrer le texte
                    $sheet->getStyle('A' . $row . ':M' . $row)->getAlignment()
                        ->setHorizontal(Alignment::HORIZONTAL_CENTER);
                    $sheet->getStyle('A' . $row . ':M' . $row)->getAlignment()
                        ->setVertical(Alignment::VERTICAL_CENTER);

                    $row++;
                }

                $user = $candidature->getUser();

                SpreadsheetGenerator::ecrireLigne($sheet, [
                    $no,
                    $candidature->getNumero(),
                    $user ? $user->getNom() : '',
                    $user ? $user->getPrenoms() : '',
                    $user ? $user->getEmail() : '',
                    $user ? $user->getContact() : '',
                    $user ? $user->getSexe() : '',
                    $candidature->getEtablissement() ? $candidature->getEtablissement()->getNom() : '',
                    $candidature->getMetier() ? $candidature->getMetier()->getNom() : '',
                    ($user && $user->getDatenaissance()) ? $user->getDatenaissance()->format('d/m/Y') : '',
                    $user ? $user->getResidence() : '',
                    $entdate ? $entdate->format('d/m/Y') : '',
                    $vague ? 'Vague ' . $vague : '',
                    $entdate ? $entdate->format('H:i') : '',
                ], $row);

                $row++;
                $no++;
            }

            foreach (range('A', 'M') as $col) {
                $sheet->getColumnDimension($col)->setAutoSize(true);
            }

            $sheetIndex++;
        }

        $spreadsheet->setActiveSheetIndex(0);

        $filename = 'planning_entretiens_' . (new \DateTime())->format('Ymd_His') . '.xlsx';

        $response = new StreamedResponse(function () use ($spreadsheet) {
            $writer = new Xlsx($spreadsheet);
            $writer->save('php://output');
        });

        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $response->headers->set('Content-Disposition', 'attachment; filename="' . $filename . '"');
        $response->headers->set('Cache-Control', 'max-age=0');

        return $response;
    }
}
