<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Données du communiqué n°1494/MENAET/CAB-MDET/DAIP du 03/11/2026 (E2C – Groupe LEMETIER, 200 places CQP).
 *
 * Idempotente : localités et métiers sont créés seulement s'ils n'existent pas (recherche par nom),
 * les établissements 1 et 2 (cf. EtablissementsActifsConfig) sont créés ou mis à jour,
 * et leurs affectations sont alignées sur la répartition du communiqué.
 */
final class Version20261103160000 extends AbstractMigration
{
    private const LOCALITES = ['Yamoussoukro', 'Bouaké'];

    /** id => [localité, sigle, nom complet] */
    private const ETABLISSEMENTS = [
        1 => ['Yamoussoukro', 'LPH', 'Lycée Professionnel Hôtelier'],
        2 => ['Bouaké', 'LPMMS', 'Lycée Professionnel des Métiers de la Mode et du Social'],
    ];

    private const METIERS = [
        'VALET DE CHAMBRE' => 'Le valet de chambre prépare et remet en état les chambres : nettoyage, rangement, renouvellement du linge et vérification des équipements, dans le respect des règles d’hygiène et de qualité.',
        'FEMME DE CHAMBRE' => 'La femme de chambre assure le nettoyage et la remise en état des chambres et des salles de bain, renouvelle le linge et les produits d’accueil, et veille au confort et à la satisfaction des clients.',
        'SERVEUR(SE)' => 'Le serveur accueille et accompagne les clients, présente les plats, prend les commandes et assure le service en salle en veillant à la qualité de l’expérience client.',
        'PÂTISSIER' => 'Le pâtissier prépare et réalise des pâtisseries et desserts. Il sélectionne les ingrédients, applique les recettes et veille à la présentation, à l’hygiène et à la qualité des produits.',
        'CUISINIER(ERE)' => 'Le cuisinier prépare les ingrédients et réalise des plats selon les recettes et les règles d’hygiène. Il participe à l’organisation de la cuisine et au contrôle de la qualité des préparations.',
        'AIDE POLYVALENTE À DOMICILE' => 'L’aide polyvalente à domicile accompagne les personnes dans les tâches de la vie quotidienne : entretien du logement, préparation des repas, courses et aide aux déplacements, dans le respect de leur intimité.',
        'ASSISTANTE MATERNELLE' => 'L’assistante maternelle accueille et prend soin des jeunes enfants : repas, hygiène, sommeil, jeux et activités d’éveil, en veillant à leur sécurité et à leur bien-être.',
        'AIDE-SOIGNANTE À DOMICILE' => 'L’aide-soignante à domicile apporte aux personnes âgées, malades ou dépendantes des soins d’hygiène et de confort, les aide dans les gestes du quotidien et signale tout changement de leur état de santé.',
    ];

    /** [établissement id, métier, places] */
    private const AFFECTATIONS = [
        [1, 'VALET DE CHAMBRE', 10],
        [1, 'FEMME DE CHAMBRE', 20],
        [1, 'SERVEUR(SE)', 10],
        [1, 'PÂTISSIER', 10],
        [2, 'VALET DE CHAMBRE', 35],
        [2, 'FEMME DE CHAMBRE', 45],
        [2, 'SERVEUR(SE)', 20],
        [2, 'CUISINIER(ERE)', 20],
        [2, 'AIDE POLYVALENTE À DOMICILE', 10],
        [2, 'ASSISTANTE MATERNELLE', 10],
        [2, 'AIDE-SOIGNANTE À DOMICILE', 10],
    ];

    private const NIVEAU_REQUIS = 'Savoir lire et écrire';
    private const DUREE_FORMATION = '3 mois';

    public function getDescription(): string
    {
        return 'Seed métiers, établissements et places du communiqué LEMETIER n°1494 du 03/11/2026';
    }

    public function up(Schema $schema): void
    {
        foreach (self::LOCALITES as $nom) {
            $this->addSql(
                "INSERT INTO localite (nom, type, creation) SELECT ?, 'ville', NOW() FROM DUAL
                 WHERE NOT EXISTS (SELECT 1 FROM localite WHERE nom = ?)",
                [$nom, $nom]
            );
        }

        foreach (self::ETABLISSEMENTS as $id => [$localite, $sigle, $nomComplet]) {
            $this->addSql(
                "INSERT INTO etablissement (id, localite_id, nom, definition, creation)
                 VALUES (?, (SELECT l.id FROM localite l WHERE l.nom = ? ORDER BY l.type = 'ville' DESC, l.id LIMIT 1), ?, ?, CURDATE())
                 ON DUPLICATE KEY UPDATE localite_id = VALUES(localite_id), nom = VALUES(nom), definition = VALUES(definition), modification = NOW()",
                [$id, $localite, $sigle, $nomComplet]
            );
        }

        foreach (self::METIERS as $nom => $description) {
            $this->addSql(
                'INSERT INTO metier (nom, description, creation) SELECT ?, ?, CURDATE() FROM DUAL
                 WHERE NOT EXISTS (SELECT 1 FROM metier WHERE nom = ?)',
                [$nom, $description, $nom]
            );
            $this->addSql(
                'UPDATE metier SET description = ? WHERE nom = ? AND (description IS NULL OR description = \'\')',
                [$description, $nom]
            );
        }

        // Les affectations hors communiqué de ces établissements ne doivent plus être proposées.
        $this->addSql(
            'UPDATE etablissement_metier SET est_actif = 0 WHERE etablissement_id IN (?, ?)',
            array_keys(self::ETABLISSEMENTS)
        );

        foreach (self::AFFECTATIONS as [$etablissementId, $metier, $places]) {
            $this->addSql(
                'UPDATE etablissement_metier em
                 INNER JOIN metier m ON m.id = em.metier_id AND m.nom = ?
                 SET em.nbrplace = ?, em.niveau_requis = ?, em.duree_formation = ?, em.est_actif = 1
                 WHERE em.etablissement_id = ?',
                [$metier, $places, self::NIVEAU_REQUIS, self::DUREE_FORMATION, $etablissementId]
            );
            $this->addSql(
                'INSERT INTO etablissement_metier (etablissement_id, metier_id, nbrplace, niveau_requis, duree_formation, est_actif)
                 SELECT ?, m.id, ?, ?, ?, 1 FROM metier m
                 WHERE m.nom = ? AND NOT EXISTS (
                     SELECT 1 FROM etablissement_metier em WHERE em.etablissement_id = ? AND em.metier_id = m.id
                 )
                 ORDER BY m.id LIMIT 1',
                [$etablissementId, $places, self::NIVEAU_REQUIS, self::DUREE_FORMATION, $metier, $etablissementId]
            );
        }
    }

    public function down(Schema $schema): void
    {
        $this->throwIrreversibleMigrationException('Migration de données : les lignes peuvent déjà être référencées par des candidatures.');
    }
}
