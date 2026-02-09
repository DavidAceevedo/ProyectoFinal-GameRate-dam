<?php

namespace App\Entity;

use App\Repository\UsuarioRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

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
     * @var Collection<int, ListaDeseos>
     */
    #[ORM\OneToMany(targetEntity: ListaDeseos::class, mappedBy: 'usuario')]
    private Collection $listaDeseos;

    public function __construct()
    {
        $this->listaDeseos = new ArrayCollection();
    }

    public function getId(): ?int { return $this->id; }

    public function getEmail(): ?string { return $this->email; }
    public function setEmail(string $email): self { $this->email = $email; return $this; }

    public function getUserIdentifier(): string { return (string) $this->email; }

    public function getRoles(): array {
        $roles = $this->roles;
        $roles[] = 'ROLE_USER';
        return array_unique($roles);
    }
    public function setRoles(array $roles): self { $this->roles = $roles; return $this; }

    public function getPassword(): string { return $this->password; }
    public function setPassword(string $password): self { $this->password = $password; return $this; }

    public function eraseCredentials(): void {}

    /**
     * @return Collection<int, ListaDeseos>
     */
    public function getListaDeseos(): Collection
    {
        return $this->listaDeseos;
    }

    public function addListaDeseo(ListaDeseos $listaDeseo): static
    {
        if (!$this->listaDeseos->contains($listaDeseo)) {
            $this->listaDeseos->add($listaDeseo);
            $listaDeseo->setUsuario($this);
        }

        return $this;
    }

    public function removeListaDeseo(ListaDeseos $listaDeseo): static
    {
        if ($this->listaDeseos->removeElement($listaDeseo)) {
            // set the owning side to null (unless already changed)
            if ($listaDeseo->getUsuario() === $this) {
                $listaDeseo->setUsuario(null);
            }
        }

        return $this;
    }
}
