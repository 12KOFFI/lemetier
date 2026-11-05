<?php

namespace App\Security;

use App\Entity\Candidature;
use App\Entity\Etablissement;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\AccessDecisionManagerInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

/**
 * Droits sur les candidatures, en un seul endroit.
 *
 * - Création : l'agent ENT de l'établissement (le jury hérite de ROLE_ENT mais n'inscrit jamais) ou l'admin.
 * - Consultation : l'admin, l'ENT ou le jury de l'établissement, le candidat lui-même.
 * - Modification : l'admin, l'ENT ou le jury de l'établissement.
 * - Page de confirmation après saisie : l'admin ou l'ENT de l'établissement (ni le jury, ni le candidat).
 * - Suppression : l'admin uniquement.
 * - Réinitialisation du mot de passe du candidat : l'admin ou l'ENT de l'établissement.
 */
class CandidatureVoter extends Voter
{
    public const CREATE = 'CANDIDATURE_CREATE';
    public const CONFIRM = 'CANDIDATURE_CONFIRM';
    public const VIEW = 'CANDIDATURE_VIEW';
    public const EDIT = 'CANDIDATURE_EDIT';
    public const DELETE = 'CANDIDATURE_DELETE';
    public const RESET_PASSWORD = 'CANDIDAT_RESET_PASSWORD';

    public function __construct(
        private AccessDecisionManagerInterface $decisionManager,
        private EntityManagerInterface $entityManager,
        #[Autowire('%candidature_publique%')] private bool $candidaturePublique,
    ) {
    }

    protected function supports(string $attribute, mixed $subject): bool
    {
        if ($attribute === self::CREATE) {
            return true;
        }

        return in_array($attribute, [self::VIEW, self::EDIT, self::DELETE, self::RESET_PASSWORD, self::CONFIRM], true)
            && $subject instanceof Candidature;
    }

    protected function voteOnAttribute(string $attribute, mixed $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();
        if (!$user instanceof User) {
            return false;
        }

        if ($this->decisionManager->decide($token, ['ROLE_ADMIN'])) {
            return true;
        }

        return match ($attribute) {
            self::CREATE => $this->isAgentEtablissement($token) && $this->getEtablissementGere($user) !== null,
            self::VIEW => $this->isStaffOfEtablissement($token, $user, $subject) || $this->estSonDossier($token, $user, $subject),
            // Le dossier saisi par le lycée n'est plus modifiable par le candidat (sauf inscription publique rouverte).
            self::EDIT => $this->isStaffOfEtablissement($token, $user, $subject)
                || ($this->candidaturePublique && $this->estSonDossier($token, $user, $subject)),
            self::RESET_PASSWORD, self::CONFIRM => $this->isAgentEtablissement($token) && $this->gere($user, $subject),
            default => false,
        };
    }

    /** L'établissement dont l'utilisateur est le compte responsable (un seul par établissement). */
    public function getEtablissementGere(User $user): ?Etablissement
    {
        return $this->entityManager->getRepository(Etablissement::class)->findOneBy(['user' => $user]);
    }

    private function isAgentEtablissement(TokenInterface $token): bool
    {
        return $this->decisionManager->decide($token, ['ROLE_ENT'])
            && !$this->decisionManager->decide($token, ['ROLE_JURY']);
    }

    private function isStaffOfEtablissement(TokenInterface $token, User $user, Candidature $candidature): bool
    {
        return $this->decisionManager->decide($token, ['ROLE_ENT']) && $this->gere($user, $candidature);
    }

    private function estSonDossier(TokenInterface $token, User $user, Candidature $candidature): bool
    {
        return $this->decisionManager->decide($token, ['ROLE_CANDIDAT']) && $candidature->getUser() === $user;
    }

    private function gere(User $user, Candidature $candidature): bool
    {
        return $candidature->getEtablissement() !== null && $candidature->getEtablissement()->getUser() === $user;
    }
}
