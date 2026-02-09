<?php

namespace App\Entity;

use App\Repository\ListaDeseosRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ListaDeseosRepository::class)]
class ListaDeseos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'listaDeseos')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Usuario $usuario = null;

    #[ORM\ManyToOne(inversedBy: 'listaDeseos')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Videojuego $videojuego = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $fechaAgregado = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsuario(): ?Usuario
    {
        return $this->usuario;
    }

    public function setUsuario(?Usuario $usuario): static
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getVideojuego(): ?Videojuego
    {
        return $this->videojuego;
    }

    public function setVideojuego(?Videojuego $videojuego): static
    {
        $this->videojuego = $videojuego;

        return $this;
    }

    public function getFechaAgregado(): ?\DateTimeImmutable
    {
        return $this->fechaAgregado;
    }

    public function setFechaAgregado(\DateTimeImmutable $fechaAgregado): static
    {
        $this->fechaAgregado = $fechaAgregado;

        return $this;
    }
}
