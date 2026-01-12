<?php

namespace App\Entity;

use App\Repository\VideojuegoRepository;
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

    #[ORM\Column(type: Types::TEXT)]
    private ?string $descripcion = null;

    #[ORM\Column(length: 100)]
    private ?string $categoria = null;

    #[ORM\Column(length: 100)]
    private ?string $plataforma = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $fechaLanzamiento = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVideojuego(): ?string
    {
        return $this->Videojuego;
    }

    public function setVideojuego(string $Videojuego): static
    {
        $this->Videojuego = $Videojuego;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): static
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getCategoria(): ?string
    {
        return $this->categoria;
    }

    public function setCategoria(string $categoria): static
    {
        $this->categoria = $categoria;

        return $this;
    }

    public function getPlataforma(): ?string
    {
        return $this->plataforma;
    }

    public function setPlataforma(string $plataforma): static
    {
        $this->plataforma = $plataforma;

        return $this;
    }

    public function getFechaLanzamiento(): ?\DateTime
    {
        return $this->fechaLanzamiento;
    }

    public function setFechaLanzamiento(\DateTime $fechaLanzamiento): static
    {
        $this->fechaLanzamiento = $fechaLanzamiento;

        return $this;
    }
}
