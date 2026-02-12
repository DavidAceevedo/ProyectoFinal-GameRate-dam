<?php

namespace App\Form;

use App\Entity\Opinion;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class OpinionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Valoración mediante sistema de estrellas con ChoiceType
            ->add('nota', ChoiceType::class, [
                'label' => 'Tu valoración',
                'choices' => [
                    '⭐' => 1,
                    '⭐⭐' => 2,
                    '⭐⭐⭐' => 3,
                    '⭐⭐⭐⭐' => 4,
                    '⭐⭐⭐⭐⭐' => 5,
                ],
                'attr' => ['class' => 'form-select mb-3'],
                'constraints' => [
                    new NotBlank(['message' => 'Por favor, selecciona una nota.']),
                ],
            ])
            // Área de texto para el comentario
            ->add('comentario', TextareaType::class, [
                'label' => '¿Qué te ha parecido el juego?',
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 3,
                    'placeholder' => 'Escribe tu reseña aquí...'
                ],
                'constraints' => [
                    new NotBlank(['message' => 'El comentario no puede estar vacío.']),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Opinion::class,
        ]);
    }
}
