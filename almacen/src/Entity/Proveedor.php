<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Proveedor
 *
 * @ORM\Table(name="proveedor")
 * @ORM\Entity
 * @Gedmo\Loggable()
 */
class Proveedor {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=true)
     * @Gedmo\Versioned()
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", nullable=true)
     * @Gedmo\Versioned()
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="text", nullable=true)
     * @Gedmo\Versioned()
     */
    private $direccion;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="estado", type="boolean", nullable=true)
     * @Gedmo\Versioned()
     */
    private $estado;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @Gedmo\Versioned()
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuarioCreado_id", referencedColumnName="id")
     * })
     */
    private $usuarioCreado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaCreado", type="datetime", nullable=true)
     * @Gedmo\Versioned()
     */
    private $fechaCreado;

    /**
     * @ORM\OneToMany(targetEntity="Importacion", mappedBy="proveedor")
     */
    private $importaciones;

    public function __construct() {
        $this->importaciones = new ArrayCollection();
    }

    public function __toString() {
        return $this->nombre;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(?string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function isEstado(): ?bool
    {
        return $this->estado;
    }

    public function setEstado(?bool $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getFechaCreado(): ?\DateTimeInterface
    {
        return $this->fechaCreado;
    }

    public function setFechaCreado(?\DateTimeInterface $fechaCreado): self
    {
        $this->fechaCreado = $fechaCreado;

        return $this;
    }

    public function getUsuarioCreado(): ?Usuario
    {
        return $this->usuarioCreado;
    }

    public function setUsuarioCreado(?Usuario $usuarioCreado): self
    {
        $this->usuarioCreado = $usuarioCreado;

        return $this;
    }

    /**
     * @return Collection<int, Importacion>
     */
    public function getImportaciones(): Collection
    {
        return $this->importaciones;
    }

    public function addImportacione(Importacion $importacione): self
    {
        if (!$this->importaciones->contains($importacione)) {
            $this->importaciones[] = $importacione;
            $importacione->setProveedor($this);
        }

        return $this;
    }

    public function removeImportacione(Importacion $importacione): self
    {
        if ($this->importaciones->removeElement($importacione)) {
            // set the owning side to null (unless already changed)
            if ($importacione->getProveedor() === $this) {
                $importacione->setProveedor(null);
            }
        }

        return $this;
    }

}
