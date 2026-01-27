<?php

namespace App\Entity;

use App\Repository\VideojuegoRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: VideojuegoRepository::class)]
class Videojuego
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank]
    private ?string $titulo = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank]
    private ?string $genero = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank]
    private ?string $plataforma = null;

    #[ORM\Column]
    #[Assert\Positive]
    private ?int $anio = null;

    #[ORM\Column(type: 'text')]
    #[Assert\NotBlank]
    private ?string $descripcion = null;

    // getters y setters...
}
