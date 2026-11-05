<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Saisie des candidatures par les lycées : traçabilité de l'agent, anti-doublon par pièce d'identité,
 * connexion par e-mail (désormais facultatif) ou par téléphone (désormais unique).
 */
final class Version20261104112050 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Candidature saisie par le lycée : saisie_par, unicité (session, numpiece), email facultatif, contact unique';
    }

    public function up(Schema $schema): void
    {
        // Le téléphone devient un identifiant : on le ramène à ses chiffres avant de poser l'index unique.
        $this->addSql("UPDATE user SET contact = NULLIF(REGEXP_REPLACE(contact, '[^0-9]', ''), '')");
        $this->addSql("UPDATE user SET contact = SUBSTRING(contact, 4) WHERE CHAR_LENGTH(contact) = 13 AND contact LIKE '225%'");
        // Numéros partagés entre plusieurs comptes :
        // un seul compte garde le numéro (un candidat d'abord, sinon le plus ancien), les autres passent à NULL.
        $this->addSql("UPDATE user u JOIN (
                SELECT id, ROW_NUMBER() OVER (PARTITION BY contact ORDER BY JSON_CONTAINS(roles, '\"ROLE_CANDIDAT\"') DESC, id) AS rang
                FROM user WHERE contact IS NOT NULL
            ) d ON d.id = u.id
            SET u.contact = NULL WHERE d.rang > 1");
        $this->addSql("UPDATE candidature SET numpiece = NULLIF(UPPER(REGEXP_REPLACE(numpiece, '[^A-Za-z0-9]', '')), '')");

        $this->addSql('ALTER TABLE candidature ADD saisie_par_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE candidature ADD CONSTRAINT FK_E33BD3B8C74AC7FE FOREIGN KEY (saisie_par_id) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('CREATE INDEX IDX_E33BD3B8C74AC7FE ON candidature (saisie_par_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_candidature_session_numpiece ON candidature (session_id, numpiece)');
        $this->addSql('ALTER TABLE user CHANGE email email VARCHAR(180) DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D6494C62E638 ON user (contact)');
    }

    public function down(Schema $schema): void
    {
        // Échoue si des comptes candidats sans e-mail existent : leur donner un e-mail avant de revenir en arrière.
        $this->addSql('ALTER TABLE candidature DROP FOREIGN KEY FK_E33BD3B8C74AC7FE');
        $this->addSql('DROP INDEX IDX_E33BD3B8C74AC7FE ON candidature');
        $this->addSql('DROP INDEX uniq_candidature_session_numpiece ON candidature');
        $this->addSql('ALTER TABLE candidature DROP saisie_par_id');
        $this->addSql('DROP INDEX UNIQ_8D93D6494C62E638 ON user');
        $this->addSql('ALTER TABLE user CHANGE email email VARCHAR(180) NOT NULL');
    }
}
