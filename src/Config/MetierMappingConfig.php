<?php

namespace App\Config;

final class MetierMappingConfig
{
    /**
     * Nom exact du métier tel qu'il apparaît dans "--- METIER : NOM (...) ---" => liste d'IDs metier.id cibles.
     */
    public const MAPPING = [
        // ESTHETIQUE & COMMERCE
        'GUIDE TOURISTIQUE' => [63],
        'INTERPRETE' => [65],
        'RECEPTIONNISTE DE GARAGE' => [52],
        'ACCESSOIRISTE DE MODE' => [64],
        'CLOWN ARTISTIQUE' => [67],
        'INFOGRAPHISTE – SÉRIGRAPHE – RE' => [81],
        'COUPE-COUTURE' => [76],
        'COIFFEUR' => [77],
        'ESTHETIQUE AUTO' => [53],
        'MODELEUR CERAMISTE' => [60],
        'GESTIONNAIRE DE FLOTTE' => [50],
        'GESTIONNAIRE STOCK' => [51],
        'CALLIGRAPHE' => [58],
        'AGENT COMMERCIAL EN RIZ' => null, // -> NOUVEAUX_METIERS
        'TECHNICO-COMMERCIAL DES EQUIPEM' => [18],

        // MENUISERIE, BATIMENT & TECHNIQUE
        'ELECTRICIEN BATIMENT' => [3],
        'MAçON' => [1],
        'CONSTRUCTION METALLIQUE' => [11],
        'SOUDEUR' => [23],
        "TECHNICIEN D'IRRIGATION" => [68],
        'FARAILLEUR' => [8],
        'INSTALLATEUR SANITAIRE' => [4],
        'MECANICIEN MOTO' => [48],
        'MENUISIER EBENISTE' => [5],
        'AIDE TOPOGRAPHE' => [7],
        'INSTALLATEUR PANNEAU SOLAIRE' => [14], // 2 feuilles en doublon dans le fichier source, fusionnées à l'import
        'MECANIQUE AUTOMOBILE' => [45],
        'CARRELEUR' => [6],
        'ELECTRICIEN AUTOMOBILE' => [46],
        'CARROSSIER-PEINTRE' => [47],
        'TECHNICIEN FROID CLIM' => [97],
        'REPARATEUR APPAREIL ELECTRO' => [24],
        'VULCANISATEUR' => [49],
        'PEINTRE BATIMENT' => [2],
        'MAINTENANCIER CLIM' => null, // -> NOUVEAUX_METIERS
        'MAINTENANCE VEHICULE ENGINS' => [20],
        'ELECTRONIQUE AUTO' => [54],
        'MENUISIER ALLUMINIUM' => [9],
        'MAINTENANCE SYSTEME SOLAIRE' => [13],
        "MAINTENECE SYSTE D'IRRIGATION" => [44],
        "CONDUCTEUR D'ENGIN" => [22],
        'CONDUCTEUR DE TRAVAUX PUBLICS' => null, // -> NOUVEAUX_METIERS
        "ELECTRICITE D'EQUIPEMENT" => [19],
        'OPERATEUR  BIOMASSE' => [17],
        'AIDE EFFICACITE ENERGETIQUE' => [16],
        'CONDUCTEUR ENGIN AGRICOLE' => [41],
        'PEINTRE CALLIGRAPHE' => [10],
        "AGENT D'ETAGE" => [32],
        'ANIMATEUR EV CULTUREL' => [61],
        'ECLAIRAGISTE' => [62],
        'TECHNICIEN AUDIO' => [66],

        // HOTELLERIE & RESTAURATION
        'BOULANGER-PATISSIER' => [29, 30],
        'RESTAURANT' => [27],
        'RESTAURANT BAR' => [31],
        'BOULANGER' => [30],
        'PATISSIER' => [29],
        'CUISINE PROFESSIONNELLE' => [25],
    ];

    /**
     * Métiers absents de la table `metier` à créer automatiquement lors de l'import.
     */
    public const NOUVEAUX_METIERS = [
        'AGENT COMMERCIAL EN RIZ' => ['nom' => 'Agent commercial en riz'],
        'CONDUCTEUR DE TRAVAUX PUBLICS' => ['nom' => 'Conducteur de travaux publics'],
        'MAINTENANCIER CLIM' => ['nom' => 'Maintenancier Clim'],
    ];

    /**
     * @return int[]|null Liste d'IDs metier.id, ou null si le métier doit être créé (voir NOUVEAUX_METIERS)
     */
    public static function getMetierIds(string $nomFichier): ?array
    {
        if (!array_key_exists($nomFichier, self::MAPPING)) {
            return null;
        }

        return self::MAPPING[$nomFichier];
    }
}
