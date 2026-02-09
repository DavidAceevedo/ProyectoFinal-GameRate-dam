<?php

namespace App\Form;

use App\Entity\Opinion;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OpinionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nota', ChoiceType::class, [
                'choices' => ['1 Estrellas' => 1, '2 Estrellas' => 2, '3 Estrellas' => 3, '4 Estrellas' => 4, '5 Estrellas' => 5],
                'attr' => ['class' => 'form-select']
            ])
            ->add('comentario', TextareaType::class, [
                'attr' => ['class' => 'form-control', 'rows' => 3]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void { $resolver->setDefaults(['data_class' => Opinion::class]); }
}
