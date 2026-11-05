<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Données de la campagne du communiqué n°1494 du 03/11/2026 :
 * - la session de recrutement (inscriptions du 02 au 08 novembre 2026), sans laquelle aucune candidature ne peut être saisie ;
 * - les illustrations allégées des métiers (WebP ~20 Ko, sans le nom incrusté), à la place des PNG de 0,4 à 1,8 Mo.
 *
 * Idempotente : la session n'est créée que si aucune session n'est active ; une image n'est remplacée
 * que si le métier n'en a pas ou s'il porte encore le PNG d'origine.
 */
final class Version20261104113000 extends AbstractMigration
{
    /** nom du métier => [nouvelle image, PNG d'origine] */
    private const IMAGES = [
        'VALET DE CHAMBRE' => ['valet-de-chambre.webp', 'Valet-de-chambre-6ada29be31480.png'],
        'FEMME DE CHAMBRE' => ['femme-de-chambre.webp', 'Femme-de-chambre-en-action-6ada28d1aedc7.png'],
        'SERVEUR(SE)' => ['serveur.webp', 'Serveur-6ada29ad7866a.png'],
        'PÂTISSIER' => ['patissier.webp', 'Patissier-6ada299446b36.png'],
        'CUISINIER(ERE)' => ['cuisinier.webp', 'Cuisinier-6ada28e933607.png'],
        'AIDE POLYVALENTE À DOMICILE' => ['aide-polyvalente-a-domicile.webp', 'Aide-polyvalente-a-domicile-6ada2a6e98b58.png'],
        'ASSISTANTE MATERNELLE' => ['assistante-maternelle.webp', 'Assistante-maternelle-6ada2aab7116d.png'],
        'AIDE-SOIGNANTE À DOMICILE' => ['aide-soignante-a-domicile.webp', 'Aide-soignante-6ada2b6a0d589.png'],
    ];

    public function getDescription(): string
    {
        return 'Session de recrutement novembre 2026 (communiqué n°1494) et illustrations WebP des métiers';
    }

    public function up(Schema $schema): void
    {
        $this->addSql(
            "INSERT INTO session_recrutement (nom, annee, numero_vague, date_ouverture, date_cloture, statut, description, active, created_at)
             SELECT ?, 2026, 1, '2026-11-02 00:00:00', '2026-11-08 23:59:59', 'OUVERTE', ?, 1, NOW() FROM DUAL
             WHERE NOT EXISTS (SELECT 1 FROM session_recrutement WHERE active = 1)",
            [
                'Recrutement E2C – Groupe LEMETIER, novembre 2026',
                'Communiqué n°1494/MENAET/CAB-MDET/DAIP du 03/11/2026 : 200 places CQP au LPH (Yamoussoukro) et au LPMMS (Bouaké).',
            ]
        );

        foreach (self::IMAGES as $nom => [$webp, $png]) {
            $this->addSql(
                'UPDATE metier SET image = ? WHERE nom = ? AND (image IS NULL OR image = \'\' OR image = ?)',
                [$webp, $nom, $png]
            );
        }
    }

    public function down(Schema $schema): void
    {
        $this->throwIrreversibleMigrationException('Migration de données : la session peut déjà porter des candidatures.');
    }
}
