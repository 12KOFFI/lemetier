<?php

namespace App\Controller;

use App\Config\AdmisAbandonsConfig;
use App\Entity\Candidature;
use App\Entity\Metier;
use App\Entity\Etablissement;
use App\Entity\EtablissementMetier;
use App\Entity\User;
use App\Entity\Admis;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

#[Route('/dashboard')]
class DashboardController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'app_dashboard')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function index(): Response
    {
        $user = $this->getUser();

        $roles = $user->getRoles();
        $isAdmin = in_array('ROLE_ADMIN', $roles);
        // L'agent DAIP a la même vue d'ensemble que l'admin, sans la liste des comptes.
        $isAgent = !$isAdmin && in_array('ROLE_AGENT', $roles);
        $isCandidat = in_array('ROLE_CANDIDAT', $roles);
        $isEnt = in_array('ROLE_ENT', $roles);
        $isJury = in_array('ROLE_JURY', $roles);

        $data = [
            'is_admin' => $isAdmin || $isAgent,
            'is_agent' => $isAgent,
            'is_candidat' => $isCandidat,
            'is_ent' => $isEnt,
            'is_jury' => $isJury,
            'etablissement' => null,
        ];

        if ($isAdmin || $isAgent) {
            $data['stats'] = $this->getAdminStats();
            $data['dernieres_candidatures'] = $this->entityManager
                ->getRepository(Candidature::class)
                ->findBy([], ['id' => 'DESC'], 10);
            if ($isAdmin) {
                $data['derniers_inscrits'] = $this->entityManager
                    ->getRepository(User::class)
                    ->findBy([], ['id' => 'DESC'], 10);
            }
            $qbDerniersAdmis = $this->entityManager
                ->getRepository(Admis::class)
                ->createQueryBuilder('a')
                ->orderBy('a.dateInscription', 'DESC')
                ->setMaxResults(5);
            AdmisAbandonsConfig::applyFilter($qbDerniersAdmis);
            $data['derniers_admis'] = $qbDerniersAdmis->getQuery()->getResult();
            $data['stats']['admis'] = $this->getStatsAdmis();
        }
        elseif ($isCandidat) {
            $data['mes_candidatures'] = $this->entityManager
                ->getRepository(Candidature::class)
                ->findBy(['user' => $user], ['id' => 'DESC']);
        }
        elseif ($isEnt || $isJury) {
            $etablissement = $this->entityManager
                ->getRepository(Etablissement::class)
                ->findOneBy(['user' => $user]);

            $data['etablissement'] = $etablissement;

            if ($etablissement) {
                $data['stats'] = [
                    'candidatures' => (int) $this->entityManager
                        ->getRepository(Candidature::class)
                        ->count(['etablissement' => $etablissement]),
                    'candidatures_aujourdhui' => $this->getCandidaturesDuJourByEtablissement($etablissement),
                    'etablissements' => 1,
                    'metiers' => $this->entityManager
                        ->getRepository(EtablissementMetier::class)
                        ->count(['etablissement' => $etablissement]),
                    'utilisateurs' => $this->getNombreCandidatsByEtablissement($etablissement),
                    'utilisateurs_candidats' => $this->getNombreCandidatsByEtablissement($etablissement),
                ];

                $data['dernieres_candidatures'] = $this->entityManager
                    ->getRepository(Candidature::class)
                    ->findBy(['etablissement' => $etablissement], ['id' => 'DESC'], 10);
                $data['derniers_inscrits'] = $this->getDerniersCandidatsByEtablissement($etablissement, 10);
                $qbDerniersAdmisEnt = $this->entityManager
                    ->getRepository(Admis::class)
                    ->createQueryBuilder('a')
                    ->where('a.etablissement = :etab_admis')
                    ->setParameter('etab_admis', $etablissement)
                    ->orderBy('a.dateInscription', 'DESC')
                    ->setMaxResults(5);
                AdmisAbandonsConfig::applyFilter($qbDerniersAdmisEnt);
                $data['derniers_admis'] = $qbDerniersAdmisEnt->getQuery()->getResult();
                $data['stats']['admis'] = $this->getStatsAdmisByEtablissement($etablissement);
                $data['candidatures_a_evaluer'] = $data['dernieres_candidatures'];
            } else {
                $data['stats'] = [
                    'candidatures' => 0,
                    'candidatures_aujourdhui' => 0,
                    'etablissements' => 0,
                    'metiers' => 0,
                    'utilisateurs' => 0,
                    'utilisateurs_candidats' => 0
                ];
                $data['dernieres_candidatures'] = [];
                $data['derniers_inscrits'] = [];
                $data['derniers_admis'] = [];
                $data['candidatures_a_evaluer'] = [];

                $this->addFlash('warning', 'Votre compte n\'est pas associé à un établissement. Veuillez contacter l\'administrateur.');
            }
        }

        return $this->render('dashboard.html.twig', $data);
    }

    private function getCandidaturesDuJourByEtablissement(Etablissement $etablissement): int
    {
        $today = new \DateTime('today');
        $tomorrow = new \DateTime('tomorrow');

        return $this->entityManager
            ->getRepository(Candidature::class)
            ->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->where('c.etablissement = :etablissement')
            ->andWhere('c.creation >= :today')
            ->andWhere('c.creation < :tomorrow')
            ->setParameter('etablissement', $etablissement)
            ->setParameter('today', $today)
            ->setParameter('tomorrow', $tomorrow)
            ->getQuery()
            ->getSingleScalarResult();
    }

    private function getNombreCandidatsByEtablissement(Etablissement $etablissement): int
    {
        return $this->entityManager
            ->getRepository(Candidature::class)
            ->createQueryBuilder('c')
            ->select('COUNT(DISTINCT c.user)')
            ->where('c.etablissement = :etablissement')
            ->setParameter('etablissement', $etablissement)
            ->getQuery()
            ->getSingleScalarResult();
    }

    private function getDerniersCandidatsByEtablissement(Etablissement $etablissement, int $limit = 10): array
    {
        $candidatures = $this->entityManager
            ->getRepository(Candidature::class)
            ->createQueryBuilder('c')
            ->leftJoin('c.user', 'u')
            ->addSelect('u')
            ->where('c.etablissement = :etablissement')
            ->setParameter('etablissement', $etablissement)
            ->orderBy('c.id', 'DESC')
            ->setMaxResults($limit * 2)
            ->getQuery()
            ->getResult();

        $users = [];
        $seenUserIds = [];

        foreach ($candidatures as $candidature) {
            $user = $candidature->getUser();
            if ($user && !in_array($user->getId(), $seenUserIds)) {
                $users[] = $user;
                $seenUserIds[] = $user->getId();
            }

            if (count($users) >= $limit) {
                break;
            }
        }

        return $users;
    }

    private function getAdminStats(): array
    {
        $candidatureRepo = $this->entityManager->getRepository(Candidature::class);

        $today = new \DateTime('today');
        $tomorrow = new \DateTime('tomorrow');

        $candidaturesAujourdhui = $candidatureRepo->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->where('c.creation >= :today')
            ->andWhere('c.creation < :tomorrow')
            ->setParameter('today', $today)
            ->setParameter('tomorrow', $tomorrow)
            ->getQuery()
            ->getSingleScalarResult();

        return [
            'candidatures' => $candidatureRepo->count([]),
            'candidatures_aujourdhui' => $candidaturesAujourdhui,
            'etablissements' => $this->entityManager->getRepository(Etablissement::class)->count([]),
            'metiers' => $this->entityManager->getRepository(Metier::class)->count([]),
            'utilisateurs' => $this->entityManager->getRepository(User::class)->count([]),
            'utilisateurs_candidats' => $this->entityManager->getRepository(User::class)
                ->createQueryBuilder('u')
                ->select('count(u.id)')
                ->where('u.roles LIKE :role')
                ->setParameter('role', '%"ROLE_CANDIDAT"%')
                ->getQuery()
                ->getSingleScalarResult(),
        ];
    }

    private function getStatsAdmis(): array
    {
        $candidaturesAdmises = $this->entityManager
            ->getRepository(Candidature::class)
            ->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->where('c.resultat = 2')
            ->getQuery()
            ->getSingleScalarResult();

        $qbAdmissions = $this->entityManager
            ->getRepository(Admis::class)
            ->createQueryBuilder('a')
            ->select('COUNT(a.id)');
        AdmisAbandonsConfig::applyFilter($qbAdmissions);
        $admissionsDefinitives = $qbAdmissions->getQuery()->getSingleScalarResult();

        return [
            'admis' => $candidaturesAdmises,
            'admis_definitifs' => $admissionsDefinitives
        ];
    }

    private function getStatsAdmisByEtablissement(Etablissement $etablissement): array
    {
        $candidaturesAdmises = $this->entityManager
            ->getRepository(Candidature::class)
            ->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->where('c.resultat = 2')
            ->andWhere('c.etablissement = :etablissement')
            ->setParameter('etablissement', $etablissement)
            ->getQuery()
            ->getSingleScalarResult();

        $qbAdmissionsEtab = $this->entityManager
            ->getRepository(Admis::class)
            ->createQueryBuilder('a')
            ->select('COUNT(a.id)')
            ->where('a.etablissement = :etablissement')
            ->setParameter('etablissement', $etablissement);
        AdmisAbandonsConfig::applyFilter($qbAdmissionsEtab);
        $admissionsDefinitives = $qbAdmissionsEtab->getQuery()->getSingleScalarResult();

        return [
            'admis' => $candidaturesAdmises,
            'admis_definitifs' => $admissionsDefinitives
        ];
    }
}
