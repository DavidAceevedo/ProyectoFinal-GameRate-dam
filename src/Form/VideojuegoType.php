<?php

namespace App\Form;

use App\Entity\Videojuego;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VideojuegoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titulo', TextType::class, [
                'label' => 'Título del Juego',
                'attr' => ['class' => 'form-control']
            ])
            ->add('genero', TextType::class, [
                'label' => 'Género',
                'attr' => ['class' => 'form-control'],
                'required' => false
            ])
            ->add('descripcion', TextareaType::class, [
                'label' => 'Descripción',
                'attr' => ['class' => 'form-control', 'rows' => 5],
                'required' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Videojuego::class,
        ]);
    }
}
