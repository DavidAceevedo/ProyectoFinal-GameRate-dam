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

    // Relación con Opiniones
    #[ORM\OneToMany(mappedBy: 'videojuego', targetEntity: Opinion::class, orphanRemoval: true)]
    private Collection $opiniones;

    // Relación con Lista de Deseos
    #[ORM\OneToMany(targetEntity: ListaDeseos::class, mappedBy: 'videojuego', orphanRemoval: true)]
    private Collection $listaDeseos;

    // --- NUEVAS RELACIONES ---

    // Un juego tiene UNA categoría (ManyToOne)
    #[ORM\ManyToOne(targetEntity: Categoria::class, inversedBy: 'videojuegos')]
    private ?Categoria $categoria = null;

    // Un juego tiene MUCHAS plataformas (ManyToMany)
    #[ORM\ManyToMany(targetEntity: Plataforma::class, inversedBy: 'videojuegos')]
    private Collection $plataformas;

    public function __construct()
    {
        $this->opiniones = new ArrayCollection();
        $this->listaDeseos = new ArrayCollection();
        $this->plataformas = new ArrayCollection();
    }

    // Getters y Setters Básicos
    public function getId(): ?int { return $this->id; }
    public function getTitulo(): ?string { return $this->titulo; }
    public function setTitulo(string $titulo): self { $this->titulo = $titulo; return $this; }
    public function getDescripcion(): ?string { return $this->descripcion; }
    public function setDescripcion(?string $descripcion): self { $this->descripcion = $descripcion; return $this; }

    // Gestión de Opiniones
    /** @return Collection<int, Opinion> */
    public function getOpiniones(): Collection { return $this->opiniones; }

    // Gestión de ListaDeseos
    /** @return Collection<int, ListaDeseos> */
    public function getListaDeseos(): Collection { return $this->listaDeseos; }

    public function addListaDeseo(ListaDeseos $listaDeseo): self
    {
        if (!$this->listaDeseos->contains($listaDeseo)) {
            $this->listaDeseos->add($listaDeseo);
            $listaDeseo->setVideojuego($this);
        }
        return $this;
    }

    public function removeListaDeseo(ListaDeseos $listaDeseo): self
    {
        if ($this->listaDeseos->removeElement($listaDeseo)) {
            if ($listaDeseo->getVideojuego() === $this) {
                $listaDeseo->setVideojuego(null);
            }
        }
        return $this;
    }

    // --- MÉTODOS PARA CATEGORÍA ---
    public function getCategoria(): ?Categoria { return $this->categoria; }
    public function setCategoria(?Categoria $categoria): self { $this->categoria = $categoria; return $this; }

    // --- MÉTODOS PARA PLATAFORMAS ---
    /** @return Collection<int, Plataforma> */
    public function getPlataformas(): Collection { return $this->plataformas; }

    public function addPlataforma(Plataforma $plataforma): self
    {
        if (!$this->plataformas->contains($plataforma)) {
            $this->plataformas->add($plataforma);
        }
        return $this;
    }

    public function removePlataforma(Plataforma $plataforma): self
    {
        $this->plataformas->removeElement($plataforma);
        return $this;
    }
}
