<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Asignacion
 *
 * @ORM\Table(name="asignacion")
 * @ORM\Entity
 * @Gedmo\Loggable()
 */
class Asignacion {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Almacen
     *
     * @ORM\ManyToOne(targetEntity="Almacen", inversedBy="asignaciones")
     * @Gedmo\Versioned()
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="almacen_id", referencedColumnName="id")
     * })
     */
    private $almacen;

    /**
     * @var \AreaServicio
     *
     * @ORM\ManyToOne(targetEntity="AreaServicio", inversedBy="asignaciones")
     * @Gedmo\Versioned()
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="areaServicio_id", referencedColumnName="id")
     * })
     */
    private $areaServicio;

    /**
     * @var string
     *
     * @ORM\Column(name="terceros", type="text", nullable=true)
     * @Gedmo\Versioned()
     */
    private $terceros;

    /**
     * @var string
     *
     * @ORM\Column(name="encargado", type="string", length=255, nullable=true)
     * @Gedmo\Versioned()
     */
    private $encargado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     * @Gedmo\Versioned()
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="ordenTrabajo", type="text", nullable=true)
     * @Gedmo\Versioned()
     */
    private $ordenTrabajo;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="text", nullable=true)
     * @Gedmo\Versioned()
     */
    private $observaciones;

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
     * @ORM\OneToMany(targetEntity="AsignacionLote", mappedBy="asignacion")
     */
    private $lotes;

    public function __construct() {
        $this->lotes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTerceros(): ?string
    {
        return $this->terceros;
    }

    public function setTerceros(?string $terceros): self
    {
        $this->terceros = $terceros;

        return $this;
    }

    public function getEncargado(): ?string
    {
        return $this->encargado;
    }

    public function setEncargado(?string $encargado): self
    {
        $this->encargado = $encargado;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(?\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getOrdenTrabajo(): ?string
    {
        return $this->ordenTrabajo;
    }

    public function setOrdenTrabajo(?string $ordenTrabajo): self
    {
        $this->ordenTrabajo = $ordenTrabajo;

        return $this;
    }

    public function getObservaciones(): ?string
    {
        return $this->observaciones;
    }

    public function setObservaciones(?string $observaciones): self
    {
        $this->observaciones = $observaciones;

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

    public function getAlmacen(): ?Almacen
    {
        return $this->almacen;
    }

    public function setAlmacen(?Almacen $almacen): self
    {
        $this->almacen = $almacen;

        return $this;
    }

    public function getAreaServicio(): ?AreaServicio
    {
        return $this->areaServicio;
    }

    public function setAreaServicio(?AreaServicio $areaServicio): self
    {
        $this->areaServicio = $areaServicio;

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
    public function getLotes(): Collection
    {
        return $this->lotes;
    }

    public function addLote(AsignacionLote $lote): self
    {
        if (!$this->lotes->contains($lote)) {
            $this->lotes[] = $lote;
            $lote->setAsignacion($this);
        }

        return $this;
    }

    public function removeLote(AsignacionLote $lote): self
    {
        if ($this->lotes->removeElement($lote)) {
            // set the owning side to null (unless already changed)
            if ($lote->getAsignacion() === $this) {
                $lote->setAsignacion(null);
            }
        }

        return $this;
    }

}
