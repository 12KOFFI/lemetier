<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StatutController extends AbstractController
{
    /**
     * L'ancienne consultation publique par numéro (devinable) est supprimée : le candidat suit son dossier
     * en se connectant. L'adresse est conservée pour ne pas casser les anciens liens.
     * La route est protégée par le pare-feu : un visiteur anonyme est envoyé vers la connexion.
     */
    #[Route('/verifier-statut', name: 'app_verifier_statut', methods: ['GET'])]
    public function verifier(): Response
    {
        return $this->redirectToRoute('app_candidature_index');
    }
}
