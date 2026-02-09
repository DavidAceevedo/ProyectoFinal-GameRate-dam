<?php

namespace App\Entity;

use App\Repository\OpinionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OpinionRepository::class)]
class Opinion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $nota = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $comentario = null;

    #[ORM\ManyToOne(inversedBy: 'opiniones')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Videojuego $videojuego = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Usuario $autor = null;

    public function getId(): ?int { return $this->id; }
    public function getNota(): ?int { return $this->nota; }
    public function setNota(int $nota): self { $this->nota = $nota; return $this; }
    public function getComentario(): ?string { return $this->comentario; }
    public function setComentario(string $comentario): self { $this->comentario = $comentario; return $this; }
    public function getVideojuego(): ?Videojuego { return $this->videojuego; }
    public function setVideojuego(?Videojuego $videojuego): self { $this->videojuego = $videojuego; return $this; }
    public function getAutor(): ?Usuario { return $this->autor; }
    public function setAutor(?Usuario $autor): self { $this->autor = $autor; return $this; }
}
