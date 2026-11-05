<?php

namespace App\Form;

use App\Entity\SessionRecrutement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SessionRecrutementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom de la session',
                'attr' => ['placeholder' => 'Ex. Session 2026 - Vague 1']
            ])
            ->add('annee', IntegerType::class, [
                'label' => 'Année',
                'attr' => ['min' => 2020, 'max' => 2100],
                'help' => 'Cette année apparaît dans le numéro de candidature (ex. LM26YM-VC0001).'
            ])
            ->add('numeroVague', IntegerType::class, [
                'label' => 'Numéro de vague',
                'attr' => ['min' => 1],
                'help' => 'Utilisé pour la gestion de la session ; ce numéro ne figure pas dans le numéro de candidature.'
            ])
            ->add('dateOuverture', DateTimeType::class, [
                'label' => 'Ouverture des inscriptions',
                'widget' => 'single_text',
                'required' => false
            ])
            ->add('dateCloture', DateTimeType::class, [
                'label' => 'Clôture des inscriptions',
                'widget' => 'single_text',
                'required' => false
            ])
            ->add('statut', ChoiceType::class, [
                'label' => 'Statut',
                'choices' => [
                    'Brouillon' => SessionRecrutement::STATUT_BROUILLON,
                    'Ouverte' => SessionRecrutement::STATUT_OUVERTE,
                    'Fermée' => SessionRecrutement::STATUT_FERMEE,
                    'Clôturée' => SessionRecrutement::STATUT_CLOTUREE,
                ]
            ])
            ->add('active', ChoiceType::class, [
                'label' => 'Session active',
                'choices' => ['Oui' => true, 'Non' => false],
                'expanded' => true
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => ['rows' => 5]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(['data_class' => SessionRecrutement::class]);
    }
}
