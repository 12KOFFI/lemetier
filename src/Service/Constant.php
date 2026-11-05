<?php

namespace App\Service;

class Constant
{
    /** Mapping OUI / NON → booléen */
    public array $ouiNon = ['OUI' => true, 'NON' => false];

    /** Liste des diplômes / niveaux académiques (du plus bas au plus haut) */
    public array $diplomes = [
        'AUCUN'    => 'AUCUN',
        'CEPE'     => 'CEPE',
        'CQP'      => 'CQP',
        'CAP'      => 'CAP',
        'BEP'      => 'BEP',
        'BEPC'     => 'BEPC',
        'BP'       => 'BP',
        'BAC'      => 'BAC',
        'BT'       => 'BT',
        'DUT'      => 'DUT',
        'BTS'      => 'BTS',
        'DEUG'     => 'DEUG',
        'LICENCE'  => 'LICENCE',
        'MASTER'   => 'MASTER',
        'DOCTORAT' => 'DOCTORAT',
    ];

    /** Liste des classes / niveaux scolaires */
    public array $classes = [
        'CM2'         => 'CM2',
        '6eme'        => '6eme',
        '5eme'        => '5eme',
        '4eme'        => '4eme',
        '3eme'        => '3eme',
        'SECONDE'     => 'SECONDE',
        'PREMIERE'    => 'PREMIERE',
        'TERMINALE'   => 'TERMINALE',
        '1ere ANNEE'  => '1ere ANNEE',
        '2eme ANNEE'  => '2eme ANNEE',
        'LICENCE'     => 'LICENCE',
        'MASTER'      => 'MASTER',
        'DOCTORAT'    => 'DOCTORAT',
    ];

    /** Types de pièces d'identité acceptées */
    public array $pieces = [
        'CNI'                   => 'CNI',
        'ATTESTATION D\'IDENTITE' => 'ATTESTATION D\'IDENTITE',
    ];

    /** Genres */
    public array $sexe = [
        'MASCULIN' => 'MASCULIN',
        'FEMININ'  => 'FEMININ',
    ];

    /** Situations familiales */
    public array $situationmat = [
        'CELIBATAIRE'  => 'CELIBATAIRE',
        'UNION LIBRE'  => 'UNION LIBRE',
        'MARIE(E)'     => 'MARIE(E)',
        'VEUF(VE)'     => 'VEUF(VE)',
    ];

    /** Configuration des documents à télécharger dans le formulaire de candidature */
    public array $document_labels = [
        'fextrait' => [
            'icon'      => 'file-alt',
            'text'      => 'L\'extrait d\'acte de naissance ou le jugement supplétif (original ou photocopie)',
            'accept'    => '.jpg,.jpeg,.png,.pdf',
            'formats'   => 'JPG, PNG, PDF',
            'mimeTypes' => [
                'application/pdf',
                'image/jpeg',
                'image/pjpeg',
                'image/png',
            ],
            'required'  => true,
        ],
        'fpiece' => [
            'icon'      => 'id-card',
            'text'      => 'La photocopie de la Carte Nationale d\'Identité (CNI) ou de l\'attestation d\'identité en cours de validité',
            'accept'    => '.jpg,.jpeg,.png,.pdf',
            'formats'   => 'JPG, PNG, PDF',
            'mimeTypes' => [
                'application/pdf',
                'image/jpeg',
                'image/pjpeg',
                'image/png',
            ],
            'required'  => true,
        ],
        'fphoto' => [
            'icon'      => 'user',
            'text'      => 'Une (01) photo d\'identité couleur',
            'accept'    => '.jpg,.jpeg,.png,.pdf',
            'formats'   => 'JPG, PNG, PDF',
            'mimeTypes' => [
                'application/pdf',
                'image/jpeg',
                'image/pjpeg',
                'image/png',
            ],
            'required'  => true,
        ],
        'fautre' => [
            'icon'      => 'file-alt',
            'text'      => 'La carte de la Couverture Maladie Universelle (CMU)',
            'accept'    => '.jpg,.jpeg,.png,.pdf',
            'formats'   => 'JPG, PNG, PDF',
            'mimeTypes' => [
                'application/pdf',
                'image/jpeg',
                'image/pjpeg',
                'image/png',
            ],
            'required'  => true,
        ],
    ];
}
