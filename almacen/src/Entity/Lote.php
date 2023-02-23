<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Lote
 *
 * @ORM\Table(name="lote")
 * @ORM\Entity
 * @Gedmo\Loggable()
 */
class Lote {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AlmacenProducto
     *
     * @ORM\ManyToOne(targetEntity="AlmacenProducto", inversedBy="lotes")
     * @Gedmo\Versioned()
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="producto_id", referencedColumnName="id")
     * })
     */
    private $producto;

    /**
     * @var string
     *
     * @ORM\Column(name="lote", type="string", length=255, nullable=true)
     * @Gedmo\Versioned()
     */
    private $lote;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad", type="integer",  nullable=true)
     * @Gedmo\Versioned()
     */
    private $cantidad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaCaducidad", type="datetime", nullable=true)
     * @Gedmo\Versioned()
     */
    private $fechaCaducidad;

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
     * @ORM\OneToMany(targetEntity="AsignacionLote", mappedBy="lote")
     */
    private $asignaciones;

    /**
     * @ORM\OneToMany(targetEntity="TrasladoLote", mappedBy="lote")
     */
    private $traslados;

    /**
     * @ORM\OneToMany(targetEntity="ImportacionLote", mappedBy="lote")
     */
    private $importaciones;

    public function __construct() {
        $this->asignaciones = new ArrayCollection();
        $this->traslados = new ArrayCollection();
        $this->importaciones = new ArrayCollection();
    }

    public function __toString() {
        return $this->lote;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLote(): ?string
    {
        return $this->lote;
    }

    public function setLote(?string $lote): self
    {
        $this->lote = $lote;

        return $this;
    }

    public function getCantidad(): ?int
    {
        return $this->cantidad;
    }

    public function setCantidad(?int $cantidad): self
    {
        $this->cantidad = $cantidad;

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

    public function getProducto(): ?AlmacenProducto
    {
        return $this->producto;
    }

    public function setProducto(?AlmacenProducto $producto): self
    {
        $this->producto = $producto;

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
     * @return Collection<int, AsignacionLote>
     */
    public function getAsignaciones(): Collection
    {
        return $this->asignaciones;
    }

    public function addAsignacione(AsignacionLote $asignacione): self
    {
        if (!$this->asignaciones->contains($asignacione)) {
            $this->asignaciones[] = $asignacione;
            $asignacione->setLote($this);
        }

        return $this;
    }

    public function removeAsignacione(AsignacionLote $asignacione): self
    {
        if ($this->asignaciones->removeElement($asignacione)) {
            // set the owning side to null (unless already changed)
            if ($asignacione->getLote() === $this) {
                $asignacione->setLote(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, TrasladoLote>
     */
    public function getTraslados(): Collection
    {
        return $this->traslados;
    }

    public function addTraslado(TrasladoLote $traslado): self
    {
        if (!$this->traslados->contains($traslado)) {
            $this->traslados[] = $traslado;
            $traslado->setLote($this);
        }

        return $this;
    }

    public function removeTraslado(TrasladoLote $traslado): self
    {
        if ($this->traslados->removeElement($traslado)) {
            // set the owning side to null (unless already changed)
            if ($traslado->getLote() === $this) {
                $traslado->setLote(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ImportacionLote>
     */
    public function getImportaciones(): Collection
    {
        return $this->importaciones;
    }

    public function addImportacione(ImportacionLote $importacione): self
    {
        if (!$this->importaciones->contains($importacione)) {
            $this->importaciones[] = $importacione;
            $importacione->setLote($this);
        }

        return $this;
    }

    public function removeImportacione(ImportacionLote $importacione): self
    {
        if ($this->importaciones->removeElement($importacione)) {
            // set the owning side to null (unless already changed)
            if ($importacione->getLote() === $this) {
                $importacione->setLote(null);
            }
        }

        return $this;
    }

    public function getFechaCaducidad(): ?\DateTimeInterface
    {
        return $this->fechaCaducidad;
    }

    public function setFechaCaducidad(?\DateTimeInterface $fechaCaducidad): self
    {
        $this->fechaCaducidad = $fechaCaducidad;

        return $this;
    }

}
