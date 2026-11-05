<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Le champ is_active n'était pas contrôlé à la connexion : des comptes en service (admin, ENT) sont à 0.
 * Maintenant qu'il l'est, on les réactive une fois pour ne bloquer personne au déploiement.
 */
final class Version20261105100000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Réactive les comptes avant la mise en service du contrôle is_active';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('UPDATE user SET is_active = 1 WHERE is_active = 0');
    }

    public function down(Schema $schema): void
    {
    }
}
