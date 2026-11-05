<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20261008151913 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE admis (id INT AUTO_INCREMENT NOT NULL, candidature_id INT NOT NULL, etablissement_id INT NOT NULL, metier_id INT NOT NULL, user_id INT NOT NULL, numero_inscription VARCHAR(255) NOT NULL, date_inscription DATETIME NOT NULL, confirme TINYINT(1) NOT NULL, modification DATETIME DEFAULT NULL, fichier_contrat VARCHAR(255) DEFAULT NULL, date_contrat DATE DEFAULT NULL, fichier_livret VARCHAR(255) DEFAULT NULL, date_livret DATE DEFAULT NULL, UNIQUE INDEX UNIQ_EB0861AFB6121583 (candidature_id), INDEX IDX_EB0861AFFF631228 (etablissement_id), INDEX IDX_EB0861AFED16FA20 (metier_id), INDEX IDX_EB0861AFA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE candidature (id INT AUTO_INCREMENT NOT NULL, etablissement_id INT DEFAULT NULL, session_id INT DEFAULT NULL, metier_id INT DEFAULT NULL, user_id INT DEFAULT NULL, numero VARCHAR(255) DEFAULT NULL, piece VARCHAR(255) DEFAULT NULL, numpiece VARCHAR(255) DEFAULT NULL, diplome VARCHAR(255) DEFAULT NULL, niveau VARCHAR(255) DEFAULT NULL, fphoto VARCHAR(255) DEFAULT NULL, fpiece VARCHAR(255) DEFAULT NULL, fextrait VARCHAR(255) DEFAULT NULL, fniveau VARCHAR(255) DEFAULT NULL, fautre VARCHAR(255) DEFAULT NULL, fiche_engagement VARCHAR(255) DEFAULT NULL, ville_residence VARCHAR(50) NOT NULL, quartier_adresse VARCHAR(255) NOT NULL, declaration_honneur TINYINT(1) NOT NULL, etustatut INT DEFAULT NULL, etucom VARCHAR(255) DEFAULT NULL, jury INT DEFAULT NULL, vague INT DEFAULT NULL, entdate DATETIME DEFAULT NULL, entlieu VARCHAR(255) DEFAULT NULL, note1 DOUBLE PRECISION DEFAULT NULL, note2 DOUBLE PRECISION DEFAULT NULL, note3 DOUBLE PRECISION DEFAULT NULL, note4 DOUBLE PRECISION DEFAULT NULL, note5 DOUBLE PRECISION DEFAULT NULL, note6 DOUBLE PRECISION DEFAULT NULL, note7 DOUBLE PRECISION DEFAULT NULL, note8 DOUBLE PRECISION DEFAULT NULL, note9 DOUBLE PRECISION DEFAULT NULL, note10 DOUBLE PRECISION DEFAULT NULL, note11 DOUBLE PRECISION DEFAULT NULL, note12 DOUBLE PRECISION DEFAULT NULL, note13 DOUBLE PRECISION DEFAULT NULL, selectionne_pour_visite TINYINT(1) DEFAULT NULL, entstatut INT DEFAULT NULL, decision_jury INT DEFAULT NULL, entcom VARCHAR(255) DEFAULT NULL, visdate DATETIME DEFAULT NULL, vislieu VARCHAR(255) DEFAULT NULL, visstatut INT DEFAULT NULL, viscom VARCHAR(255) DEFAULT NULL, resultat INT DEFAULT NULL, creation DATETIME DEFAULT NULL, modification DATETIME DEFAULT NULL, INDEX IDX_E33BD3B8FF631228 (etablissement_id), INDEX IDX_E33BD3B8613FECDF (session_id), INDEX IDX_E33BD3B8ED16FA20 (metier_id), INDEX IDX_E33BD3B8A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etablissement (id INT AUTO_INCREMENT NOT NULL, localite_id INT DEFAULT NULL, user_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, definition VARCHAR(255) DEFAULT NULL, creation DATE DEFAULT NULL, modification DATETIME DEFAULT NULL, INDEX IDX_20FD592C924DD2B5 (localite_id), INDEX IDX_20FD592CA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etablissement_metier (id INT AUTO_INCREMENT NOT NULL, etablissement_id INT DEFAULT NULL, metier_id INT DEFAULT NULL, nbrplace INT DEFAULT NULL, niveau_requis VARCHAR(100) DEFAULT NULL, duree_formation VARCHAR(50) DEFAULT NULL, est_actif TINYINT(1) DEFAULT 1 NOT NULL, INDEX IDX_9B99DB0AFF631228 (etablissement_id), INDEX IDX_9B99DB0AED16FA20 (metier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE localite (id INT AUTO_INCREMENT NOT NULL, parent_id INT DEFAULT NULL, user_id INT DEFAULT NULL, nom VARCHAR(100) NOT NULL, type VARCHAR(20) NOT NULL, creation DATETIME DEFAULT NULL, modification DATETIME DEFAULT NULL, INDEX IDX_F5D7E4A9727ACA70 (parent_id), INDEX IDX_F5D7E4A9A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE metier (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, creation DATE DEFAULT NULL, modification DATETIME DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, INDEX IDX_51A00D8CA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE session_recrutement (id INT AUTO_INCREMENT NOT NULL, created_by_id INT DEFAULT NULL, nom VARCHAR(150) NOT NULL, annee INT NOT NULL, numero_vague INT NOT NULL, date_ouverture DATETIME DEFAULT NULL, date_cloture DATETIME DEFAULT NULL, statut VARCHAR(30) NOT NULL, description LONGTEXT DEFAULT NULL, active TINYINT(1) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_D9B23D6EB03A8386 (created_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, nom VARCHAR(255) DEFAULT NULL, is_active TINYINT(1) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', last_login_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', prenoms VARCHAR(255) DEFAULT NULL, nomjeunefille VARCHAR(255) DEFAULT NULL, sexe VARCHAR(10) DEFAULT NULL, datenaissance DATE DEFAULT NULL, lieunaissance VARCHAR(255) DEFAULT NULL, residence VARCHAR(100) DEFAULT NULL, situationmat VARCHAR(15) DEFAULT NULL, contact VARCHAR(15) DEFAULT NULL, numextrait VARCHAR(100) DEFAULT NULL, nationalite VARCHAR(100) DEFAULT NULL, nompere VARCHAR(100) DEFAULT NULL, nommere VARCHAR(100) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE admis ADD CONSTRAINT FK_EB0861AFB6121583 FOREIGN KEY (candidature_id) REFERENCES candidature (id)');
        $this->addSql('ALTER TABLE admis ADD CONSTRAINT FK_EB0861AFFF631228 FOREIGN KEY (etablissement_id) REFERENCES etablissement (id)');
        $this->addSql('ALTER TABLE admis ADD CONSTRAINT FK_EB0861AFED16FA20 FOREIGN KEY (metier_id) REFERENCES metier (id)');
        $this->addSql('ALTER TABLE admis ADD CONSTRAINT FK_EB0861AFA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE candidature ADD CONSTRAINT FK_E33BD3B8FF631228 FOREIGN KEY (etablissement_id) REFERENCES etablissement (id)');
        $this->addSql('ALTER TABLE candidature ADD CONSTRAINT FK_E33BD3B8613FECDF FOREIGN KEY (session_id) REFERENCES session_recrutement (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE candidature ADD CONSTRAINT FK_E33BD3B8ED16FA20 FOREIGN KEY (metier_id) REFERENCES metier (id)');
        $this->addSql('ALTER TABLE candidature ADD CONSTRAINT FK_E33BD3B8A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE etablissement ADD CONSTRAINT FK_20FD592C924DD2B5 FOREIGN KEY (localite_id) REFERENCES localite (id)');
        $this->addSql('ALTER TABLE etablissement ADD CONSTRAINT FK_20FD592CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE etablissement_metier ADD CONSTRAINT FK_9B99DB0AFF631228 FOREIGN KEY (etablissement_id) REFERENCES etablissement (id)');
        $this->addSql('ALTER TABLE etablissement_metier ADD CONSTRAINT FK_9B99DB0AED16FA20 FOREIGN KEY (metier_id) REFERENCES metier (id)');
        $this->addSql('ALTER TABLE localite ADD CONSTRAINT FK_F5D7E4A9727ACA70 FOREIGN KEY (parent_id) REFERENCES localite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE localite ADD CONSTRAINT FK_F5D7E4A9A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE metier ADD CONSTRAINT FK_51A00D8CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE session_recrutement ADD CONSTRAINT FK_D9B23D6EB03A8386 FOREIGN KEY (created_by_id) REFERENCES user (id) ON DELETE SET NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE admis DROP FOREIGN KEY FK_EB0861AFB6121583');
        $this->addSql('ALTER TABLE admis DROP FOREIGN KEY FK_EB0861AFFF631228');
        $this->addSql('ALTER TABLE admis DROP FOREIGN KEY FK_EB0861AFED16FA20');
        $this->addSql('ALTER TABLE admis DROP FOREIGN KEY FK_EB0861AFA76ED395');
        $this->addSql('ALTER TABLE candidature DROP FOREIGN KEY FK_E33BD3B8FF631228');
        $this->addSql('ALTER TABLE candidature DROP FOREIGN KEY FK_E33BD3B8613FECDF');
        $this->addSql('ALTER TABLE candidature DROP FOREIGN KEY FK_E33BD3B8ED16FA20');
        $this->addSql('ALTER TABLE candidature DROP FOREIGN KEY FK_E33BD3B8A76ED395');
        $this->addSql('ALTER TABLE etablissement DROP FOREIGN KEY FK_20FD592C924DD2B5');
        $this->addSql('ALTER TABLE etablissement DROP FOREIGN KEY FK_20FD592CA76ED395');
        $this->addSql('ALTER TABLE etablissement_metier DROP FOREIGN KEY FK_9B99DB0AFF631228');
        $this->addSql('ALTER TABLE etablissement_metier DROP FOREIGN KEY FK_9B99DB0AED16FA20');
        $this->addSql('ALTER TABLE localite DROP FOREIGN KEY FK_F5D7E4A9727ACA70');
        $this->addSql('ALTER TABLE localite DROP FOREIGN KEY FK_F5D7E4A9A76ED395');
        $this->addSql('ALTER TABLE metier DROP FOREIGN KEY FK_51A00D8CA76ED395');
        $this->addSql('ALTER TABLE session_recrutement DROP FOREIGN KEY FK_D9B23D6EB03A8386');
        $this->addSql('DROP TABLE admis');
        $this->addSql('DROP TABLE candidature');
        $this->addSql('DROP TABLE etablissement');
        $this->addSql('DROP TABLE etablissement_metier');
        $this->addSql('DROP TABLE localite');
        $this->addSql('DROP TABLE metier');
        $this->addSql('DROP TABLE session_recrutement');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
