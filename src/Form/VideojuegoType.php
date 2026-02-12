<?php

namespace App\Form;

use App\Entity\Videojuego;
use App\Entity\Categoria;
use App\Entity\Plataforma;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
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
            // Campo de texto para el título
            ->add('titulo', TextType::class, [
                'label' => 'Título del Videojuego',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Ej: The Legend of Zelda']
            ])
            // Campo de texto largo para la descripción
            ->add('descripcion', TextareaType::class, [
                'label' => 'Descripción',
                'attr' => ['class' => 'form-control', 'rows' => 5]
            ])
            // Selección de Categoria (Relación ManyToOne)
            ->add('categoria', EntityType::class, [
                'class' => Categoria::class,
                'choice_label' => 'nombre',
                'label' => 'Categoría/Género',
                'placeholder' => 'Selecciona una categoría',
                'attr' => ['class' => 'form-select']
            ])
            // Selección de múltiples Plataformas (Relación ManyToMany)
            ->add('plataformas', EntityType::class, [
                'class' => Plataforma::class,
                'choice_label' => 'nombre',
                'label' => 'Disponible en:',
                'multiple' => true,
                'expanded' => true, // Se visualiza como Checkboxes para mejorar UX
                'label_attr' => ['class' => 'fw-bold mt-2'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Videojuego::class, // Vinculación con la entidad del dominio
        ]);
    }
}
