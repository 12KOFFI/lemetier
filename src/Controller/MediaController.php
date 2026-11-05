<?php

namespace App\Controller;

use App\Entity\Admis;
use App\Entity\Candidature;
use App\Security\CandidatureVoter;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Seule porte d'accès aux documents des candidats, stockés hors du dossier public.
 */
class MediaController extends AbstractController
{
    private const AFFICHABLES = ['pdf', 'jpg', 'jpeg', 'png'];

    public function __construct(private EntityManagerInterface $entityManager)
    {
    }

    #[Route('/media/{candidatureNumero}/{filename}', name: 'app_media_file', methods: ['GET'], requirements: ['filename' => '[A-Za-z0-9._-]+'])]
    public function show(string $candidatureNumero, string $filename): BinaryFileResponse
    {
        $candidature = $this->entityManager->getRepository(Candidature::class)->findOneBy(['numero' => $candidatureNumero]);
        if (!$candidature) {
            throw $this->createNotFoundException('Document introuvable.');
        }

        $this->denyAccessUnlessGranted(CandidatureVoter::VIEW, $candidature);

        // Seuls les fichiers rattachés au dossier sont servis.
        $pieces = [
            $candidature->getFphoto(), $candidature->getFpiece(), $candidature->getFextrait(),
            $candidature->getFniveau(), $candidature->getFautre(), $candidature->getFicheEngagement(),
        ];
        if (!in_array($filename, $pieces, true)) {
            throw $this->createNotFoundException('Document introuvable.');
        }

        return $this->servir($this->getParameter('dir_media') . $candidatureNumero . '/' . $filename, $filename);
    }

    /** Contrats et livrets : mêmes adresses qu'avant, désormais contrôlées. */
    #[Route('/uploads/{type}/{dossier}/{filename}', name: 'app_admis_document', methods: ['GET'], requirements: [
        'type' => 'contrats|livrets',
        'dossier' => 'etablissement_\d+',
        'filename' => '[A-Za-z0-9._-]+',
    ])]
    public function admisDocument(string $type, string $dossier, string $filename): BinaryFileResponse
    {
        $champ = $type === 'contrats' ? 'fichierContrat' : 'fichierLivret';
        $admis = $this->entityManager->getRepository(Admis::class)->findOneBy([$champ => $dossier . '/' . $filename]);
        if (!$admis) {
            throw $this->createNotFoundException('Document introuvable.');
        }

        $autorise = $this->isGranted('ROLE_ADMIN')
            || ($this->isGranted('ROLE_ENT') && $admis->getEtablissement()?->getUser() === $this->getUser());
        if (!$autorise) {
            throw $this->createAccessDeniedException();
        }

        return $this->servir($this->getParameter('dir_storage') . $type . '/' . $dossier . '/' . $filename, $filename);
    }

    private function servir(string $chemin, string $filename): BinaryFileResponse
    {
        if (!is_file($chemin)) {
            throw $this->createNotFoundException('Document introuvable.');
        }

        // Un ancien fichier d'un autre type (HTML, SVG...) est téléchargé, jamais affiché sur le site.
        $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        $disposition = in_array($extension, self::AFFICHABLES, true)
            ? ResponseHeaderBag::DISPOSITION_INLINE
            : ResponseHeaderBag::DISPOSITION_ATTACHMENT;

        return $this->file($chemin, $filename, $disposition);
    }
}
