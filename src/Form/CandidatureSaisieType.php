<?php

namespace App\Form;

use App\Config\EtablissementsActifsConfig;
use App\Entity\Candidature;
use App\Entity\Etablissement;
use App\Entity\Metier;
use App\Entity\User;
use App\Service\Constant;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Valid;

/**
 * Candidature saisie par l'agent du lycée (ENT) ou par l'admin : identité du candidat, compte de connexion et dossier.
 */
class CandidatureSaisieType extends AbstractType
{
    public function __construct(private Constant $constant)
    {
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        /** @var Etablissement|null $etablissementImpose */
        $etablissementImpose = $options['etablissement_impose'];

        // L'ENT ne choisit pas : son établissement est imposé côté serveur. L'admin choisit pour dépanner.
        if (!$etablissementImpose) {
            $builder->add('etablissement', EntityType::class, [
                'class' => Etablissement::class,
                'query_builder' => fn (EntityRepository $er) => $er->createQueryBuilder('e')
                    ->where(EtablissementsActifsConfig::getDqlWhereClause('e'))
                    ->orderBy('e.nom', 'ASC'),
                'choice_label' => fn (Etablissement $e) => (string) $e,
                'label' => 'Établissement',
                'placeholder' => '-- Choisissez l\'établissement --',
                'constraints' => [new NotBlank(['message' => 'Choisissez l\'établissement.'])],
            ]);
        }

        $builder
            ->add('metier', EntityType::class, [
                'class' => Metier::class,
                'query_builder' => function (EntityRepository $er) use ($etablissementImpose) {
                    $qb = $er->createQueryBuilder('m')
                        ->innerJoin('m.etablissementMetiers', 'em', 'WITH', 'em.estActif = true')
                        ->innerJoin('em.etablissement', 'e')
                        ->where(EtablissementsActifsConfig::getDqlWhereClause('e'))
                        ->groupBy('m.id')
                        ->orderBy('m.nom', 'ASC');

                    if ($etablissementImpose) {
                        $qb->andWhere('e = :etablissement')->setParameter('etablissement', $etablissementImpose);
                    }

                    return $qb;
                },
                'choice_label' => 'nom',
                'label' => 'Métier choisi',
                'placeholder' => '-- Choisissez le métier --',
                'constraints' => [new NotBlank(['message' => 'Choisissez le métier.'])],
            ])
            ->add('candidat', FormType::class, [
                'data_class' => User::class,
                'property_path' => 'user',
                'label' => false,
                'constraints' => [new Valid()],
            ])
            ->add('piece', ChoiceType::class, [
                'label' => 'Type de pièce d\'identité',
                'choices' => [
                    'Carte nationale d\'identité (CNI)' => 'CNI',
                    'Attestation d\'identité' => 'ATTESTATION D\'IDENTITE',
                ],
                'expanded' => true,
                'constraints' => [new NotBlank(['message' => 'Indiquez le type de pièce d\'identité.'])],
            ])
            ->add('numpiece', TextType::class, [
                'label' => 'Numéro de la pièce',
                'attr' => ['autocomplete' => 'off', 'spellcheck' => 'false'],
                'constraints' => [new NotBlank(['message' => 'Le numéro de la pièce d\'identité est obligatoire.'])],
            ])
            ->add('etucom', TextType::class, [
                'label' => 'Statut professionnel',
                'required' => false,
                'attr' => ['placeholder' => 'Ex. sans emploi, apprenti, commerçant…'],
            ])
            ->add('villeResidence', ChoiceType::class, [
                'label' => 'Ville de résidence',
                'help' => 'À titre indicatif : n\'empêche pas l\'inscription.',
                'choices' => [
                    'Bouaké Ville' => 'Bouaké Ville',
                    'Yamoussoukro' => 'Yamoussoukro',
                    'Autre ville' => 'Autre ville / Hors zone',
                ],
                'placeholder' => '-- Choisissez --',
                'constraints' => [new NotBlank(['message' => 'Indiquez la ville de résidence.'])],
            ])
            ->add('quartierAdresse', TextType::class, [
                'label' => 'Quartier / adresse',
                'required' => false,
                'attr' => ['placeholder' => 'Ex. Quartier Commerce'],
            ])
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'mapped' => false,
                'invalid_message' => 'Les deux mots de passe ne correspondent pas.',
                'first_options' => ['label' => 'Mot de passe du candidat', 'attr' => ['autocomplete' => 'new-password']],
                'second_options' => ['label' => 'Confirmer le mot de passe', 'attr' => ['autocomplete' => 'new-password']],
                'constraints' => [
                    new NotBlank(['message' => 'Choisissez un mot de passe pour le candidat.']),
                    new Length(['min' => UserType::MDP_MIN_CANDIDAT, 'minMessage' => 'Le mot de passe doit contenir au moins {{ limit }} caractères.']),
                ],
            ])
            ->add('declarationHonneur', CheckboxType::class, [
                'label' => 'Le candidat certifie sur l\'honneur l\'exactitude des informations fournies.',
                'constraints' => [new IsTrue(['message' => 'La déclaration sur l\'honneur doit être cochée.'])],
            ]);

        $candidat = $builder->get('candidat');
        $candidat
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'constraints' => [new NotBlank(['message' => 'Le nom est requis.'])],
            ])
            ->add('prenoms', TextType::class, [
                'label' => 'Prénoms',
                'constraints' => [new NotBlank(['message' => 'Les prénoms sont requis.'])],
            ])
            ->add('sexe', ChoiceType::class, [
                'label' => 'Sexe',
                'choices' => $this->constant->sexe,
                'expanded' => true,
                'constraints' => [new NotBlank(['message' => 'Indiquez le sexe.'])],
            ])
            ->add('datenaissance', BirthdayType::class, [
                'label' => 'Date de naissance',
                'widget' => 'single_text',
                'help' => 'Le candidat doit avoir de 18 à 40 ans.',
            ])
            ->add('lieunaissance', TextType::class, [
                'label' => 'Lieu de naissance',
                'constraints' => [new NotBlank(['message' => 'Le lieu de naissance est requis.'])],
            ])
            ->add('nationalite', ChoiceType::class, [
                'label' => 'Nationalité',
                'choices' => ['Ivoirienne' => 'Ivoirienne'],
            ])
            ->add('situationmat', ChoiceType::class, [
                'label' => 'Situation matrimoniale',
                'choices' => $this->constant->situationmat,
                'required' => false,
                'placeholder' => '-- Facultatif --',
            ])
            ->add('numextrait', TextType::class, [
                'label' => 'N° de l\'extrait de naissance',
                'required' => false,
            ])
            ->add('nompere', TextType::class, ['label' => 'Nom du père', 'required' => false])
            ->add('nommere', TextType::class, ['label' => 'Nom de la mère', 'required' => false])
            ->add('contact', TelType::class, [
                'label' => 'Téléphone du candidat',
                'help' => '10 chiffres, sans espace. Sert d\'identifiant de connexion.',
                // Saisie bridée à 10 chiffres côté navigateur (voir saisie.html.twig) ; le serveur revérifie (User::$contact).
                'attr' => [
                    'inputmode' => 'numeric',
                    'autocomplete' => 'off',
                    'placeholder' => '0708114259',
                    'pattern' => '[0-9]{10}',
                    'data-telephone' => '',
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => 'E-mail du candidat',
                'help' => 'Sert aussi d\'identifiant de connexion.',
                'constraints' => [
                    new NotBlank(['message' => 'L\'e-mail du candidat est obligatoire.']),
                    new Email(['message' => 'Cette adresse e-mail n\'est pas valide.']),
                ],
            ]);

        foreach ($this->constant->document_labels as $field => $config) {
            $builder->add($field, FileType::class, [
                'label' => $config['text'],
                'mapped' => false,
                'required' => $config['required'] ?? false,
                'attr' => ['accept' => $config['accept']],
                'help' => 'Formats : ' . $config['formats'] . ' — 2 Mo maximum.',
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'maxSizeMessage' => 'Fichier trop lourd : 2 Mo maximum.',
                        'mimeTypes' => $config['mimeTypes'],
                        'mimeTypesMessage' => 'Format ' . $config['formats'] . ' requis.',
                    ]),
                ],
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Candidature::class,
            'etablissement_impose' => null,
            'validation_groups' => ['Default', 'candidat'],
        ]);
        $resolver->setAllowedTypes('etablissement_impose', ['null', Etablissement::class]);
    }
}
