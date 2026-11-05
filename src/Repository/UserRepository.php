<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;

/**
 * @extends ServiceEntityRepository<User>
 */
class UserRepository extends ServiceEntityRepository implements UserLoaderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * Connexion par e-mail ou par numéro de téléphone (les candidats créés par un lycée n'ont pas toujours d'e-mail).
     */
    public function loadUserByIdentifier(string $identifier): ?User
    {
        $identifier = trim($identifier);
        if ($identifier === '') {
            return null;
        }

        if (str_contains($identifier, '@')) {
            return $this->createQueryBuilder('u')
                ->where('LOWER(u.email) = :email')
                ->setParameter('email', mb_strtolower($identifier))
                ->getQuery()
                ->getOneOrNullResult();
        }

        $phone = self::normalizePhone($identifier);

        return $phone ? $this->findOneBy(['contact' => $phone]) : null;
    }

    /**
     * Ramène un numéro ivoirien à ses 10 chiffres : « +225 07 08 11 42 59 » → « 0708114259 ».
     */
    public static function normalizePhone(?string $phone): ?string
    {
        if ($phone === null) {
            return null;
        }

        $digits = preg_replace('/\D+/', '', $phone) ?? '';
        if (strlen($digits) === 13 && str_starts_with($digits, '225')) {
            $digits = substr($digits, 3);
        }

        return $digits !== '' ? $digits : null;
    }
}
