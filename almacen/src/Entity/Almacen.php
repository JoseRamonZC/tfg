<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Almacen
 *
 * @ORM\Table(name="almacen")
 * @ORM\Entity
 * @Gedmo\Loggable()
 */
class Almacen {

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
     * @ORM\OneToMany(targetEntity="Traslado", mappedBy="almacenA")
     */
    private $trasladosA;

    /**
     * @ORM\OneToMany(targetEntity="Traslado", mappedBy="almacenB")
     */
    private $trasladosB;

    /**
     * @ORM\OneToMany(targetEntity="Asignacion", mappedBy="almacen")
     */
    private $asignaciones;

    /**
     * @ORM\OneToMany(targetEntity="Importacion", mappedBy="almacen")
     */
    private $importaciones;

    /**
     * @ORM\OneToMany(targetEntity="AlmacenProducto", mappedBy="almacen")
     */
    private $productos;

    public function __construct() {
        $this->trasladosA = new ArrayCollection();
        $this->trasladosB = new ArrayCollection();
        $this->asignaciones = new ArrayCollection();
        $this->importaciones = new ArrayCollection();
        $this->productos = new ArrayCollection();
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
     * @return Collection<int, Traslado>
     */
    public function getTrasladosA(): Collection
    {
        return $this->trasladosA;
    }

    public function addTrasladosA(Traslado $trasladosA): self
    {
        if (!$this->trasladosA->contains($trasladosA)) {
            $this->trasladosA[] = $trasladosA;
            $trasladosA->setAlmacenA($this);
        }

        return $this;
    }

    public function removeTrasladosA(Traslado $trasladosA): self
    {
        if ($this->trasladosA->removeElement($trasladosA)) {
            // set the owning side to null (unless already changed)
            if ($trasladosA->getAlmacenA() === $this) {
                $trasladosA->setAlmacenA(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Traslado>
     */
    public function getTrasladosB(): Collection
    {
        return $this->trasladosB;
    }

    public function addTrasladosB(Traslado $trasladosB): self
    {
        if (!$this->trasladosB->contains($trasladosB)) {
            $this->trasladosB[] = $trasladosB;
            $trasladosB->setAlmacenB($this);
        }

        return $this;
    }

    public function removeTrasladosB(Traslado $trasladosB): self
    {
        if ($this->trasladosB->removeElement($trasladosB)) {
            // set the owning side to null (unless already changed)
            if ($trasladosB->getAlmacenB() === $this) {
                $trasladosB->setAlmacenB(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Asignacion>
     */
    public function getAsignaciones(): Collection
    {
        return $this->asignaciones;
    }

    public function addAsignacione(Asignacion $asignacione): self
    {
        if (!$this->asignaciones->contains($asignacione)) {
            $this->asignaciones[] = $asignacione;
            $asignacione->setAlmacen($this);
        }

        return $this;
    }

    public function removeAsignacione(Asignacion $asignacione): self
    {
        if ($this->asignaciones->removeElement($asignacione)) {
            // set the owning side to null (unless already changed)
            if ($asignacione->getAlmacen() === $this) {
                $asignacione->setAlmacen(null);
            }
        }

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
            $importacione->setAlmacen($this);
        }

        return $this;
    }

    public function removeImportacione(Importacion $importacione): self
    {
        if ($this->importaciones->removeElement($importacione)) {
            // set the owning side to null (unless already changed)
            if ($importacione->getAlmacen() === $this) {
                $importacione->setAlmacen(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, AlmacenProducto>
     */
    public function getProductos(): Collection
    {
        return $this->productos;
    }

    public function addProducto(AlmacenProducto $producto): self
    {
        if (!$this->productos->contains($producto)) {
            $this->productos[] = $producto;
            $producto->setAlmacen($this);
        }

        return $this;
    }

    public function removeProducto(AlmacenProducto $producto): self
    {
        if ($this->productos->removeElement($producto)) {
            // set the owning side to null (unless already changed)
            if ($producto->getAlmacen() === $this) {
                $producto->setAlmacen(null);
            }
        }

        return $this;
    }

}
