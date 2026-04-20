<?php

namespace App\Entity;

use App\Repository\CategoriaRepository;
use Doctrine\Common\Collections\ArrayCollection; // <--- AÑADIR
use Doctrine\Common\Collections\Collection;    // <--- AÑADIR
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoriaRepository::class)]
class Categoria
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    // --- RELACIÓN AÑADIDA ---
    #[ORM\OneToMany(mappedBy: 'categoria', targetEntity: Videojuego::class)]
    private Collection $videojuegos;

    public function __construct()
    {
        $this->videojuegos = new ArrayCollection();
    }
    // -----------------------

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * @return Collection<int, Videojuego>
     */
    public function getVideojuegos(): Collection
    {
        return $this->videojuegos;
    }

    public function __toString(): string
    {
        return $this->nombre ?? '';
    }
}
