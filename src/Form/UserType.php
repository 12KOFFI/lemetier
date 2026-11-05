<?php

namespace App\Form;

use App\Entity\User;
use App\Service\Constant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class UserType extends AbstractType
{
    public const MDP_MIN_CANDIDAT = 8;
    public const MDP_MIN_SERVICE = 12;

    private $constant;

    public function __construct(Constant $constant)
    {
        $this->constant = $constant;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $isEdit = $options['is_edit'] ?? false;
        $isRegister = $options['is_register'] ?? false;
        $isAdmin = $options['is_admin'] ?? false;

        $required = !$isEdit;

        if ($isRegister || $isAdmin) {
            $builder->add('email', EmailType::class, [
                'label' => 'Email',
                'required' => true,
                'attr' => [
                    'placeholder' => 'exemple@email.com',
                    'autocomplete' => 'email'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'L\'email est requis'])
                ]
            ]);
        } elseif ($isEdit) {
            $builder->add('email', EmailType::class, [
                'label' => 'Email',
                'required' => false,
                'disabled' => true,
                'attr' => ['class' => 'bg-slate-100 cursor-not-allowed'],
            ]);
        }

        if ($isAdmin) {
            $builder->add('role', ChoiceType::class, [
                'label' => 'Rôle',
                'mapped' => false,
                'choices' => [
                    'Agent DAIP' => 'ROLE_AGENT',
                    'Agent établissement CeFA-FC' => 'ROLE_ETABLISSEMENT',
                    'Établissement de formation (ENT)' => 'ROLE_ENT',
                    'Jury' => 'ROLE_JURY',
                    'Administrateur' => 'ROLE_ADMIN',
                    'Candidat' => 'ROLE_CANDIDAT',
                ],
                'data' => $options['user_role'] ?? 'ROLE_CANDIDAT',
            ]);
        }

        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'required' => $required,
                'attr' => ['placeholder' => 'Votre nom'],
                'constraints' => $required ? [new NotBlank(['message' => 'Le nom est requis'])] : []
            ])
            ->add('prenoms', TextType::class, [
                'label' => 'Prénoms',
                'required' => $required,
                'attr' => ['placeholder' => 'Vos prénoms'],
                'constraints' => $required ? [new NotBlank(['message' => 'Les prénoms sont requis'])] : []
            ])
            ->add('nomjeunefille', TextType::class, [
                'label' => 'Nom de jeune fille',
                'required' => false,
                'attr' => ['placeholder' => 'Si applicable']
            ])
            ->add('sexe', ChoiceType::class, [
                'choices' => $this->constant->sexe,
                'label' => 'Sexe',
                'required' => $required,
                'placeholder' => '-- Sélectionnez --'
            ])
            ->add('datenaissance', BirthdayType::class, [
                'widget' => 'single_text',
                'label' => 'Date de naissance',
                'required' => $required,
                'attr' => ['max' => date('Y-m-d')]
            ])
            ->add('lieunaissance', TextType::class, [
                'label' => 'Lieu de naissance',
                'required' => $required,
                'attr' => ['placeholder' => 'Ville de naissance']
            ])
            ->add('residence', TextType::class, [
                'label' => 'Lieu de résidence',
                'required' => $required,
                'attr' => ['placeholder' => 'Votre ville de résidence']
            ])
            ->add('situationmat', ChoiceType::class, [
                'choices' => $this->constant->situationmat,
                'label' => 'Situation matrimoniale',
                'required' => false,
                'placeholder' => '-- Sélectionnez --'
            ])
            ->add('contact', TextType::class, [
                'label' => 'Contact',
                'required' => $required,
                'attr' => [
                    'placeholder' => 'Ex: 0708091011',
                    'pattern' => '[0-9]{10}',
                    'maxlength' => '10'
                ]
            ])
            ->add('numextrait', TextType::class, [
                'label' => 'Numéro d\'extrait',
                'required' => false,
                'attr' => ['placeholder' => 'Numéro de l\'extrait']
            ])
            // Seule la nationalité ivoirienne est éligible (valeur attendue par User::$nationalite).
            ->add('nationalite', ChoiceType::class, [
                'label' => 'Nationalité',
                'choices' => ['Ivoirienne' => 'Ivoirienne'],
                'required' => $required,
                'placeholder' => $required ? false : '-- Sélectionnez --',
            ])
            ->add('nompere', TextType::class, [
                'label' => 'Nom du père',
                'required' => false,
                'attr' => ['placeholder' => 'Nom et prénoms du père']
            ])
            ->add('nommere', TextType::class, [
                'label' => 'Nom de la mère',
                'required' => false,
                'attr' => ['placeholder' => 'Nom et prénom de la mère']
            ]);

        // L'identité d'un candidat est celle vérifiée par le lycée : seul l'admin ou l'agent peut la corriger.
        if ($isEdit && !$isAdmin && ($options['user_role'] ?? null) === 'ROLE_CANDIDAT') {
            foreach (['nom', 'prenoms', 'nomjeunefille', 'sexe', 'datenaissance', 'lieunaissance', 'nationalite', 'contact', 'numextrait'] as $champ) {
                $config = $builder->get($champ);
                $builder->add($champ, get_class($config->getType()->getInnerType()), array_merge($config->getOptions(), ['disabled' => true, 'constraints' => []]));
            }
        }

        if ($isAdmin && $isEdit) {
            $builder->add('isActive', CheckboxType::class, [
                'label' => 'Compte actif (décocher pour bloquer la connexion)',
                'required' => false,
            ]);
            // L'admin peut redonner un accès à un agent qui a perdu son mot de passe.
            $builder->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'mapped' => false,
                'required' => false,
                'invalid_message' => 'Les mots de passe ne correspondent pas.',
                'first_options' => [
                    'label' => 'Nouveau mot de passe (laisser vide pour ne pas le changer)',
                    'constraints' => [new Length(['min' => self::MDP_MIN_SERVICE, 'minMessage' => 'Le mot de passe doit contenir au moins {{ limit }} caractères'])],
                ],
                'second_options' => ['label' => 'Confirmation du nouveau mot de passe'],
            ]);
        }

        if ($isRegister || ($isAdmin && !$isEdit)) {
            $minimum = $isRegister ? self::MDP_MIN_CANDIDAT : self::MDP_MIN_SERVICE;
            $builder->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'Les mots de passe ne correspondent pas.',
                'required' => true,
                'first_options' => [
                    'label' => 'Mot de passe',
                    'attr' => ['placeholder' => '••••••••'],
                    'constraints' => [
                        new NotBlank(['message' => 'Le mot de passe est requis']),
                        new Length(['min' => $minimum, 'minMessage' => 'Le mot de passe doit contenir au moins {{ limit }} caractères'])
                    ]
                ],
                'second_options' => [
                    'label' => 'Confirmation du mot de passe',
                    'attr' => ['placeholder' => '••••••••']
                ]
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'is_edit' => false,
            'is_admin' => false,
            'is_register' => false,
            'user_role' => null,
            // Les règles d'éligibilité (âge, nationalité) ne s'appliquent qu'aux comptes candidats.
            'validation_groups' => function (FormInterface $form): array {
                $isCandidat = $form->getConfig()->getOption('is_register')
                    || ($form->has('role') && $form->get('role')->getData() === 'ROLE_CANDIDAT')
                    || (!$form->has('role') && in_array('ROLE_CANDIDAT', $form->getData()?->getRoles() ?? [], true));

                return $isCandidat ? ['Default', 'candidat'] : ['Default'];
            },
        ]);
    }
}
