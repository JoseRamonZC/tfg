<?php

namespace App\Entity;

use App\Repository\UsuarioRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @Gedmo\Loggable()
 * @ORM\Entity(repositoryClass=UsuarioRepository::class)
 * @UniqueEntity(fields={"username"}, message="There is already an account with this username")
 */
class Usuario implements UserInterface, PasswordAuthenticatedUserInterface {

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Gedmo\Versioned()
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255)
     * @Gedmo\Versioned()
     */
    private $apellidos;

    /**
     * @ORM\Column(name="email", type="string", length=191, nullable=true)
     * @Gedmo\Versioned()
     * @Assert\Email
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     * @Gedmo\Versioned()
     * @Assert\NotBlank
     * @Assert\NotNull
     */
    private $username;

    /**
     * @ORM\Column(type="json", nullable=true)
     * @Gedmo\Versioned()
     */
    private $almacenes = [];

    /**
     * @ORM\Column(type="json")
     * @Gedmo\Versioned()
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     * @Gedmo\Versioned()
     * @Assert\NotBlank
     * @Assert\NotNull
     */
    private $password;

    /**
     * @ORM\Column(name="estado", type="boolean", nullable=true)
     * @Gedmo\Versioned()
     */
    private $estado;

    public function __toString() {
        return $this->username;
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellidos(): ?string
    {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): self
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string {
        return (string) $this->username;
    }

    public function setUsername(string $username): self {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): ?string {
        return $this->email;
    }

    public function setEmail(?string $email): self {
        $this->email = $email;

        return $this;
    }

    public function isEstado(): ?bool {
        return $this->estado;
    }

    public function setEstado(?bool $estado): self {
        $this->estado = $estado;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string {
        return (string) $this->username;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
//        $roles[] = 'ROLE_PROPIETARIO';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string {
        return $this->password;
    }

    public function setPassword(string $password): self {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials() {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getAlmacenes(): ?array
    {
        return $this->almacenes;
    }

    public function setAlmacenes(?array $almacenes): self
    {
        $this->almacenes = $almacenes;

        return $this;
    }

}
