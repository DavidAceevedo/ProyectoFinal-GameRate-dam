<?php

namespace App\Entity;

use App\Repository\VideojuegoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VideojuegoRepository::class)]
class Videojuego
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titulo = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $descripcion = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $genero = null;

    #[ORM\OneToMany(mappedBy: 'videojuego', targetEntity: Opinion::class, orphanRemoval: true)]
    private Collection $opiniones;

    public function __construct() { $this->opiniones = new ArrayCollection(); }

    public function getId(): ?int { return $this->id; }
    public function getTitulo(): ?string { return $this->titulo; }
    public function setTitulo(string $titulo): self { $this->titulo = $titulo; return $this; }
    public function getDescripcion(): ?string { return $this->descripcion; }
    public function setDescripcion(?string $descripcion): self { $this->descripcion = $descripcion; return $this; }
    public function getGenero(): ?string { return $this->genero; }
    public function setGenero(?string $genero): self { $this->genero = $genero; return $this; }

    /** @return Collection<int, Opinion> */
    public function getOpiniones(): Collection { return $this->opiniones; }
}
