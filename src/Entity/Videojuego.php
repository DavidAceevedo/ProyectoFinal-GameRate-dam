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

    #[ORM\Column(type: Types::TEXT)]
    private ?string $descripcion = null;

    #[ORM\Column(length: 100)]
    private ?string $categoria = null;

    #[ORM\Column(length: 100)]
    private ?string $plataforma = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $fechaLanzamiento = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imagen = null;

    // REQUISITO: Relación 1:N con Opinión
    #[ORM\OneToMany(mappedBy: 'videojuego', targetEntity: Opinion::class, orphanRemoval: true)]
    private Collection $opiniones;

    public function __construct()
    {
        $this->opiniones = new ArrayCollection();
    }

    // REQUISITO: Calcular la puntuación media
    public function getNotaMedia(): float
    {
        if ($this->opiniones->isEmpty()) {
            return 0;
        }

        $suma = 0;
        foreach ($this->opiniones as $opinion) {
            $suma += $opinion->getPuntuacion();
        }

        return round($suma / count($this->opiniones), 1);
    }

    public function getId(): ?int { return $this->id; }

    public function getTitulo(): ?string { return $this->titulo; }
    public function setTitulo(string $titulo): static { $this->titulo = $titulo; return $this; }

    public function getDescripcion(): ?string { return $this->descripcion; }
    public function setDescripcion(string $descripcion): static { $this->descripcion = $descripcion; return $this; }

    public function getCategoria(): ?string { return $this->categoria; }
    public function setCategoria(string $categoria): static { $this->categoria = $categoria; return $this; }

    public function getPlataforma(): ?string { return $this->plataforma; }
    public function setPlataforma(string $plataforma): static { $this->plataforma = $plataforma; return $this; }

    public function getFechaLanzamiento(): ?\DateTimeInterface { return $this->fechaLanzamiento; }
    public function setFechaLanzamiento(\DateTimeInterface $fechaLanzamiento): static { $this->fechaLanzamiento = $fechaLanzamiento; return $this; }

    public function getImagen(): ?string { return $this->imagen; }
    public function setImagen(?string $imagen): static { $this->imagen = $imagen; return $this; }

    /** @return Collection<int, Opinion> */
    public function getOpiniones(): Collection { return $this->opiniones; }
}
