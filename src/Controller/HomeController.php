<?php

namespace App\Controller;

use App\Config\EtablissementsActifsConfig;
use App\Entity\EtablissementMetier;
use App\Entity\SessionRecrutement;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        // Une seule lecture des affectations actives : métiers, lycées et compteurs en découlent,
        // ils ne peuvent donc pas se contredire.
        ['metiers' => $offresMetiers, 'lycees' => $lycees] = $this->getOffre();

        $stats = [
            'metiers' => count($offresMetiers),
            'etablissements' => count($lycees),
            'places' => array_sum(array_column($lycees, 'places')),
        ];

        $session = $this->entityManager->getRepository(SessionRecrutement::class)->findOneBy(['active' => true]);

        return $this->render('index.html.twig', [
            'stats' => $stats,
            'offresMetiers' => $offresMetiers,
            'lycees' => $lycees,
            'session' => $session,
            'parcours' => $this->getParcours($session),
            'partenaires' => $this->getPartenaires(),
        ]);
    }

    /**
     * État du parcours affiché sur l'accueil. Seule la période d'inscription est datée (session) :
     * avant sa clôture l'étape 1 est « en cours » ; après, elle est « terminée » et aucune étape suivante
     * n'est annoncée « en cours », faute de date connue.
     *
     * @return array{en_cours: ?int, terminees: int}
     */
    private function getParcours(?SessionRecrutement $session): array
    {
        $cloture = $session?->getDateCloture();
        $close = $cloture && new \DateTime('now', new \DateTimeZone('Africa/Abidjan')) > $cloture;

        return $close ? ['en_cours' => null, 'terminees' => 1] : ['en_cours' => 1, 'terminees' => 0];
    }

    /**
     * Offre de formation active, dans l'ordre du communiqué :
     * - metiers : un élément par métier, avec sa répartition par lycée ;
     * - lycees : un élément par établissement, avec ses métiers.
     */
    private function getOffre(): array
    {
        $metiers = $this->getOffresMetiers();

        $lycees = [];
        foreach ($metiers as $metier) {
            foreach ($metier['etablissements'] as $lieu) {
                $code = $lieu['code'];
                $lycees[$code] ??= [
                    'code' => $code,
                    'nom' => $lieu['nom'],
                    'ville' => $lieu['localite'],
                    'places' => 0,
                    'metiers' => [],
                ];
                $lycees[$code]['places'] += $lieu['nbrplace'];
                $lycees[$code]['metiers'][] = ['nom' => $metier['nomMetier'], 'places' => $lieu['nbrplace']];
            }
        }

        return ['metiers' => $metiers, 'lycees' => array_values($lycees)];
    }

    private function getOffresMetiers(): array
    {
        $affectations = $this->entityManager->getRepository(EtablissementMetier::class)
            ->createQueryBuilder('em')
            ->innerJoin('em.etablissement', 'e')
            ->innerJoin('e.localite', 'l')
            ->innerJoin('em.metier', 'm')
            ->addSelect('e', 'l', 'm')
            ->where('em.estActif = true')
            ->andWhere(EtablissementsActifsConfig::getDqlWhereClause('e'))
            // Ordre de saisie des affectations = ordre du communiqué
            ->orderBy('e.id', 'ASC')
            ->addOrderBy('em.id', 'ASC')
            ->getQuery()
            ->getResult();

        $nomsAffiches = [
            'HOUSEKEEPING' => 'Housekeeping',
            'PÂTISSIER' => 'Pâtissier',
            'SERVEUR(SE)' => 'Serveur(se)',
            'VALET DE CHAMBRE' => 'Valet de chambre',
            'CUISINIER(ERE)' => 'Cuisinier(ère)',
            'FEMME DE CHAMBRE' => 'Femme de chambre',
            'AIDE POLYVALENTE À DOMICILE' => 'Aide polyvalente à domicile',
            'ASSISTANTE MATERNELLE' => 'Assistante maternelle',
            'AIDE-SOIGNANTE À DOMICILE' => 'Aide-soignante à domicile',
        ];

        $offres = [];
        foreach ($affectations as $affectation) {
            $metier = $affectation->getMetier();
            $etablissement = $affectation->getEtablissement();
            $localite = $etablissement->getLocalite();
            $nomLocalite = strtoupper($localite->getNom());
            $nomMetier = strtoupper($metier->getNom());
            $places = $affectation->getNbrplace() ?? 0;
            $id = $metier->getId();

            if (!isset($offres[$id])) {
                $offres[$id] = [
                    'id' => $id,
                    'nomMetier' => $nomsAffiches[$nomMetier] ?? $metier->getNom(),
                    'image' => $metier->getImage(),
                    'description' => $metier->getDescription(),
                    'nbrplace' => 0,
                    'etablissements' => [],
                ];
            }

            $offres[$id]['nbrplace'] += $places;
            $offres[$id]['etablissements'][] = [
                'localite' => match ($nomLocalite) {
                    'YAMOUSSOUKRO' => 'Yamoussoukro',
                    'BOUAKE' => 'Bouaké',
                    default => $localite->getNom(),
                },
                'nom' => $etablissement->getDefinition() ?: $etablissement->getNom(),
                'code' => $etablissement->getNom(),
                'nbrplace' => $places,
            ];
            $offres[$id]['parLycee'][$etablissement->getNom()] = $places;
        }

        return array_values($offres);
    }

    private function getPartenaires(): array
    {
        return [
            [
                'nom' => 'Groupe LEMETIER',
                'image' => 'image/logo-lemetier-nav.webp',
                'lien' => 'https://www.lemetier.daip.ci'
            ]
        ];
    }

    // Anciennes pages publiques, remplacées par les sections de l'accueil : redirection permanente
    // pour que les liens déjà partagés continuent de fonctionner.
    #[Route('/etablissements', name: 'app_etablissements_list')]
    public function etablissementsList(): RedirectResponse
    {
        return $this->redirect($this->generateUrl('app_home') . '#ou-sinscrire', Response::HTTP_MOVED_PERMANENTLY);
    }

    #[Route('/metiers', name: 'app_metiers_list')]
    public function metiersList(): RedirectResponse
    {
        return $this->redirect($this->generateUrl('app_home') . '#metiers', Response::HTTP_MOVED_PERMANENTLY);
    }
}
