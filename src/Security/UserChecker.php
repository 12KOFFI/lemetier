<?php

namespace App\Security;

use App\Entity\User;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAccountStatusException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/** Refuse la connexion d'un compte désactivé. */
class UserChecker implements UserCheckerInterface
{
    public function checkPreAuth(UserInterface $user): void
    {
        if ($user instanceof User && !$user->isIsActive()) {
            throw new CustomUserMessageAccountStatusException('Ce compte est désactivé. Contactez votre lycée ou l\'administrateur.');
        }
    }

    public function checkPostAuth(UserInterface $user): void
    {
    }
}
