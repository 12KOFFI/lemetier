<?php

namespace App\Config;

final class AdmisAbandonsConfig
{
    
    //liste des ids des admis definitifs uniquement
    public const ABANDONS_IDS = [
        // IDs des admis ayant abandonné :
        72 , // kouadio kouadio jacques (PFA SOUBRE) (24/06/2026)
        71 , //kouakou Affoue Gisèle (PFA SOUBRE) (24/06/2026)
        68 , //Koffi KOUASSI TOUSSAINT  (PFA SOUBRE) (24/06/2026)
        87,   // (PFA SOUBRE) (08/07/2026)
        
        
       2083 ,    // CFPT ALEPE (03/07/2026)
       1680 ,   // CFPT ALEPE (03/07/2026)
       1674 ,  //CFPT ALEPE (03/07/2026)
       
       
       721 ,  //(LPI BOUAKE) (03/07/2026)
       944,  //(LPI BOUAKE) (03/07/2026)
       941, //(LPI BOUAKE) (03/07/2026)
       360, //(LPI BOUAKE) (03/07/2026)
       
       
       1281 ,  //UMF GHITAFLA (03/07/2026)
       1268,  //UMF GHITAFLA (03/07/2026)
       1282,   //UMF GHITAFLA (03/07/2026)
       1279,   //UMF GHITAFLA (03/07/2026)
       1284,   //UMF GHITAFLA (03/07/2026)
       1280,   //UMF GHITAFLA (03/07/2026)
       1269,    //UMF GHITAFLA (03/07/2026)

       
       
       1038, //LP Grand Lahou (05/07/2026)
       
       
       
       1182,  //LTA COCODY (07/07/2026)
       1186,  //LTA COCODY (07/07/2026)
       1187, //LTA COCODY (07/07/2026)
       1192, //LTA COCODY (07/07/2026)
        
       544, //Lpmme Koumassi (08/07/2026)
       
       
       
       3115,  //LP ABENGOUROU  (15/07/2026)
       3116,  //LTA ABENGOUROU (15/07/2026)
       1013,  //LP ABENGOUROU  (15/07/2026)
       1022,  //LP ABENGOUROU  (15/07/2026)
       
       
       1205, //LTA COCODY  (21/07/2026)



    ];

    public static function getIds(): array
    {
        return self::ABANDONS_IDS;
    }

    public static function hasAbandons(): bool
    {
        return !empty(self::ABANDONS_IDS);
    }

    public static function applyFilter(\Doctrine\ORM\QueryBuilder $qb, string $alias = 'a'): void
    {
        if (self::hasAbandons()) {
            $qb->andWhere("{$alias}.id NOT IN (:admis_abandons_ids)")
               ->setParameter('admis_abandons_ids', self::ABANDONS_IDS);
        }
    }
}
