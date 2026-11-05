<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Security\AppAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;

class SecurityController extends AbstractController
{
    #[Route('/connexion', name: 'app_login', methods: ['GET', 'POST'])]
    public function login(AuthenticationUtils $authenticationUtils, Request $request): Response
    {
        if ($this->getUser()) {
            // Gérer la redirection après connexion si un utilisateur est déjà connecté
            $redirect = $request->query->get('redirect');
            if ($redirect && $this->isUrlSafe($redirect)) {
                return $this->redirect($redirect);
            }
            
            if ($this->isGranted('ROLE_ADMIN')) {
                return $this->redirectToRoute('app_dashboard');
            }
            return $this->redirectToRoute('app_dashboard');
        }

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        
        // Récupérer l'URL de redirection
        $redirect = $request->query->get('redirect');

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
            'redirect' => $redirect
        ]);
    }

    /**
     * Pas de réinitialisation en libre-service : sans e-mail ni SMS de vérification, elle permettrait
     * de prendre le compte d'un autre. Le lycée (candidats) ou l'admin (agents) redonne l'accès.
     */
    #[Route('/mot-de-passe-oublie', name: 'app_forgot_password', methods: ['GET'])]
    public function forgotPassword(): Response
    {
        return $this->render('security/forgot_password.html.twig');
    }

    #[Route('/inscription', name: 'app_register', methods: ['GET', 'POST'])]
    public function register(
        Request $request,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $entityManager,
        UserAuthenticatorInterface $authenticator,
        AppAuthenticator $formAuthenticator
    ): Response {
        if ($this->getUser()) {
            // Gérer la redirection après inscription si un utilisateur est déjà connecté
            $redirect = $request->query->get('redirect');
            if ($redirect && $this->isUrlSafe($redirect)) {
                return $this->redirect($redirect);
            }
            return $this->redirectToRoute('app_candidature_index');
        }

        // Inscription publique fermée : le compte candidat est créé par le lycée lors de la saisie de la candidature.
        if (!$this->getParameter('candidature_publique')) {
            return $this->render('candidature/inscription_fermee.html.twig');
        }

        $user = new User();
        $form = $this->createForm(UserType::class, $user, [
            'is_register' => true,
            'is_edit' => false
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Vérifier si l'email existe déjà
            $existingUser = $entityManager->getRepository(User::class)->findOneBy(['email' => $user->getEmail()]);
            if ($existingUser) {
                $this->addFlash('error', 'Cet email est déjà utilisé.');
                return $this->renderForm('security/register.html.twig', [
                    'form' => $form,
                    'redirect' => $request->query->get('redirect')
                ]);
            }

            // Hachage du mot de passe
            $user->setPassword(
                $passwordHasher->hashPassword($user, $form->get('password')->getData())
            );
            
            // Attribution du rôle candidat
            $user->setRoles(['ROLE_CANDIDAT']);

            $entityManager->persist($user);
            $entityManager->flush();

            // Authentification automatique
            $authenticator->authenticateUser($user, $formAuthenticator, $request);

            $this->addFlash('success', 'Votre compte a été créé avec succès.');
            
            // Redirection après inscription
            $redirect = $request->query->get('redirect');
            if ($redirect && $this->isUrlSafe($redirect)) {
                return $this->redirect($redirect);
            }
            
            return $this->redirectToRoute('app_candidature_new');
        }

        return $this->renderForm('security/register.html.twig', [
            'form' => $form,
            'redirect' => $request->query->get('redirect')
        ]);
    }

    #[Route('/deconnexion', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    /**
     * Vérifie qu'une URL de redirection reste sur le site
     */
    private function isUrlSafe(string $url): bool
    {
        return AppAuthenticator::isCheminInterne($url);
    }
}
