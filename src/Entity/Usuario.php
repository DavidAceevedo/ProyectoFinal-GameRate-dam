<?php

namespace App\Entity;

use App\Repository\UsuarioRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

// Mapeo de la entidad y restricción de email único
#[ORM\Entity(repositoryClass: UsuarioRepository::class)]
#[ORM\Table(name: '`user`')]
#[UniqueEntity(fields: ['email'], message: 'Ya existe una cuenta con este email')]
class Usuario implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    #[ORM\Column]
    private ?string $password = null;

    /**
     * RELACIÓN ONE-TO-MANY: Un usuario puede tener varios juegos en lista de deseos
     * @var Collection<int, ListaDeseos>
     */
    #[ORM\OneToMany(targetEntity: ListaDeseos::class, mappedBy: 'usuario')]
    private Collection $listaDeseos;

    public function __construct()
    {
        // Inicialización de colecciones para evitar errores de nulidad
        $this->listaDeseos = new ArrayCollection();
    }

    public function getId(): ?int { return $this->id; }

    public function getEmail(): ?string { return $this->email; }
    public function setEmail(string $email): self { $this->email = $email; return $this; }

    // Requisito de UserInterface para identificar al usuario
    public function getUserIdentifier(): string { return (string) $this->email; }

    // Gestión de roles del sistema de seguridad de Symfony
    public function getRoles(): array {
        $roles = $this->roles;
        $roles[] = 'ROLE_USER'; // Rol base garantizado
        return array_unique($roles);
    }
    public function setRoles(array $roles): self { $this->roles = $roles; return $this; }

    public function getPassword(): string { return $this->password; }
    public function setPassword(string $password): self { $this->password = $password; return $this; }

    // Obligatorio por interfaz para limpiar datos temporales de autenticación
    public function eraseCredentials(): void {}

    /**
     * @return Collection<int, ListaDeseos>
     */
    public function getListaDeseos(): Collection
    {
        return $this->listaDeseos;
    }

    // Método para añadir deseos gestionando la relación bidireccional
    public function addListaDeseo(ListaDeseos $listaDeseo): static
    {
        if (!$this->listaDeseos->contains($listaDeseo)) {
            $this->listaDeseos->add($listaDeseo);
            $listaDeseo->setUsuario($this);
        }

        return $this;
    }

    // Método para eliminar deseos rompiendo el vínculo bidireccional
    public function removeListaDeseo(ListaDeseos $listaDeseo): static
    {
        if ($this->listaDeseos->removeElement($listaDeseo)) {
            if ($listaDeseo->getUsuario() === $this) {
                $listaDeseo->setUsuario(null);
            }
        }

        return $this;
    }
}
