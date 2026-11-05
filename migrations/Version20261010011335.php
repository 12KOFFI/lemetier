<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20261010011335 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add métier descriptions and initialize descriptions for the LEMETIER recruitment offers.';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE metier ADD description LONGTEXT DEFAULT NULL');
        $this->addSql(
            "UPDATE metier SET description = 'Le valet de chambre prépare et remet en état les chambres : nettoyage, rangement, renouvellement du linge et vérification des équipements, dans le respect des règles d’hygiène et de qualité.' WHERE nom = 'VALET DE CHAMBRE'"
        );
        $this->addSql(
            "UPDATE metier SET description = 'L’agent de housekeeping assure la propreté et l’entretien des espaces de l’établissement, prépare les chambres et contribue au confort et à l’accueil des clients.' WHERE nom = 'HOUSEKEEPING'"
        );
        $this->addSql(
            "UPDATE metier SET description = 'Le serveur accueille et accompagne les clients, présente les plats, prend les commandes et assure le service en salle en veillant à la qualité de l’expérience client.' WHERE nom = 'SERVEUR(SE)'"
        );
        $this->addSql(
            "UPDATE metier SET description = 'Le pâtissier prépare et réalise des pâtisseries et desserts. Il sélectionne les ingrédients, applique les recettes et veille à la présentation, à l’hygiène et à la qualité des produits.' WHERE nom = 'PÂTISSIER'"
        );
        $this->addSql(
            "UPDATE metier SET description = 'Le cuisinier prépare les ingrédients et réalise des plats selon les recettes et les règles d’hygiène. Il participe à l’organisation de la cuisine et au contrôle de la qualité des préparations.' WHERE nom = 'CUISINIER(ERE)'"
        );
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE metier DROP description');
    }
}
