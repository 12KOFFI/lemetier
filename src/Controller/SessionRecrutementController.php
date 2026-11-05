<?php

namespace App\Controller;

use App\Entity\SessionRecrutement;
use App\Form\SessionRecrutementType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/session-recrutement')]
class SessionRecrutementController extends AbstractController
{
    public function __construct(private EntityManagerInterface $entityManager) {}

    #[Route('/', name: 'app_session_recrutement_index', methods: ['GET'])]
    public function index(): Response
    {
        if ($accessDenied = $this->accessDeniedResponse()) {
            return $accessDenied;
        }

        $sessions = $this->entityManager->getRepository(SessionRecrutement::class)
            ->findBy([], ['annee' => 'DESC', 'id' => 'DESC']);

        return $this->render('session_recrutement/index.html.twig', [
            'sessions' => $sessions,
        ]);
    }

    #[Route('/new', name: 'app_session_recrutement_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        if ($accessDenied = $this->accessDeniedResponse()) {
            return $accessDenied;
        }

        $session = new SessionRecrutement();
        $session->setCreatedBy($this->getUser());
        // Suggestion automatique du prochain numéro de vague pour l'année courante (modifiable par l'agent)
        $session->setNumeroVague($this->suggestNextNumeroVague($session->getAnnee()));

        $form = $this->createForm(SessionRecrutementType::class, $session);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($session->isActive()) {
                $this->deactivateOtherSessions($session);
            }

            $this->entityManager->persist($session);
            $this->entityManager->flush();
            $this->addFlash('success', 'Session de recrutement créée avec succès.');
            return $this->redirectToRoute('app_session_recrutement_index');
        }

        return $this->render('session_recrutement/form.html.twig', [
            'session' => $session,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_session_recrutement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, SessionRecrutement $session): Response
    {
        if ($accessDenied = $this->accessDeniedResponse()) {
            return $accessDenied;
        }

        $form = $this->createForm(SessionRecrutementType::class, $session);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($session->isActive()) {
                $this->deactivateOtherSessions($session);
            }

            $session->setUpdatedAt(new \DateTimeImmutable());
            $this->entityManager->flush();
            $this->addFlash('success', 'Session de recrutement modifiée avec succès.');
            return $this->redirectToRoute('app_session_recrutement_index');
        }

        return $this->render('session_recrutement/form.html.twig', [
            'session' => $session,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/delete', name: 'app_session_recrutement_delete', methods: ['POST'])]
    public function delete(Request $request, SessionRecrutement $session): Response
    {
        if ($accessDenied = $this->accessDeniedResponse()) {
            return $accessDenied;
        }

        if (!$this->isCsrfTokenValid('delete_session_' . $session->getId(), $request->request->get('_token'))) {
            throw $this->createAccessDeniedException();
        }

        if ($session->getCandidatures()->count() > 0) {
            $this->addFlash('error', 'Cette session contient des candidatures et ne peut pas être supprimée.');
        } else {
            $this->entityManager->remove($session);
            $this->entityManager->flush();
            $this->addFlash('success', 'Session supprimée avec succès.');
        }

        return $this->redirectToRoute('app_session_recrutement_index');
    }

    private function accessDeniedResponse(): ?Response
    {
        if (!$this->getUser() || !$this->isGranted('ROLE_AGENT')) {
            return $this->render('security/access_denied.html.twig', [], new Response('', Response::HTTP_FORBIDDEN));
        }

        return null;
    }

    /**
     * Garantit qu'une seule session de recrutement est active à la fois : quand on active
     * une session, toutes les autres sont automatiquement désactivées. Indispensable puisque
     * la création de candidature s'appuie sur "la" session active (findOneBy(['active' => true])).
     */
    private function deactivateOtherSessions(SessionRecrutement $session): void
    {
        $autresSessions = $this->entityManager->getRepository(SessionRecrutement::class)
            ->findBy(['active' => true]);

        foreach ($autresSessions as $autreSession) {
            if ($autreSession->getId() !== $session->getId()) {
                $autreSession->setActive(false);
            }
        }
    }

    /**
     * Suggère le prochain numéro de vague disponible pour une année donnée
     * (max(numeroVague) + 1 parmi les sessions de cette année, ou 1 si aucune).
     */
    private function suggestNextNumeroVague(int $annee): int
    {
        $sessionsAnnee = $this->entityManager->getRepository(SessionRecrutement::class)
            ->findBy(['annee' => $annee]);

        $max = 0;
        foreach ($sessionsAnnee as $s) {
            $max = max($max, $s->getNumeroVague() ?? 0);
        }

        return $max + 1;
    }
}
