<?php

namespace App\Entity;

use App\Repository\OpinionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: OpinionRepository::class)]
class Opinion {
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    #[Assert\Range(min: 1, max: 5)]
    private ?int $puntuacion = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 10)]
    private ?string $comentario = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $fechaPublicacion = null;

    // CORRECCIÓN: Añadido targetEntity para que Doctrine sepa con quién conecta
    #[ORM\ManyToOne(targetEntity: Usuario::class, inversedBy: 'opiniones')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Usuario $usuario = null;

    // CORRECCIÓN: Añadido targetEntity para que Doctrine sepa con quién conecta
    #[ORM\ManyToOne(targetEntity: Videojuego::class, inversedBy: 'opiniones')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Videojuego $videojuego = null;

    public function __construct() {
        $this->fechaPublicacion = new \DateTime();
    }

    public function getId(): ?int { return $this->id; }

    public function getPuntuacion(): ?int { return $this->puntuacion; }
    public function setPuntuacion(int $puntuacion): static { $this->puntuacion = $puntuacion; return $this; }

    public function getComentario(): ?string { return $this->comentario; }
    public function setComentario(string $comentario): static { $this->comentario = $comentario; return $this; }

    public function getFechaPublicacion(): ?\DateTimeInterface { return $this->fechaPublicacion; }
    public function setFechaPublicacion(\DateTimeInterface $fechaPublicacion): static { $this->fechaPublicacion = $fechaPublicacion; return $this; }

    public function getUsuario(): ?Usuario { return $this->usuario; }
    public function setUsuario(?Usuario $usuario): static { $this->usuario = $usuario; return $this; }

    public function getVideojuego(): ?Videojuego { return $this->videojuego; }
    public function setVideojuego(?Videojuego $videojuego): static { $this->videojuego = $videojuego; return $this; }
}
