<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Traslado
 *
 * @ORM\Table(name="traslado")
 * @ORM\Entity
 * @Gedmo\Loggable()
 */
class Traslado {

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
     * @ORM\ManyToOne(targetEntity="Almacen", inversedBy="trasladosA")
     * @Gedmo\Versioned()
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="almacenA_id", referencedColumnName="id")
     * })
     */
    private $almacenA;

    /**
     * @var \Almacen
     *
     * @ORM\ManyToOne(targetEntity="Almacen", inversedBy="trasladosB")
     * @Gedmo\Versioned()
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="almacenB_id", referencedColumnName="id")
     * })
     */
    private $almacenB;

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
     * @ORM\OneToMany(targetEntity="TrasladoLote", mappedBy="traslado")
     */
    private $lotes;

    public function __construct() {
        $this->lotes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getAlmacenA(): ?Almacen
    {
        return $this->almacenA;
    }

    public function setAlmacenA(?Almacen $almacenA): self
    {
        $this->almacenA = $almacenA;

        return $this;
    }

    public function getAlmacenB(): ?Almacen
    {
        return $this->almacenB;
    }

    public function setAlmacenB(?Almacen $almacenB): self
    {
        $this->almacenB = $almacenB;

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
     * @return Collection<int, TrasladoLote>
     */
    public function getLotes(): Collection
    {
        return $this->lotes;
    }

    public function addLote(TrasladoLote $lote): self
    {
        if (!$this->lotes->contains($lote)) {
            $this->lotes[] = $lote;
            $lote->setTraslado($this);
        }

        return $this;
    }

    public function removeLote(TrasladoLote $lote): self
    {
        if ($this->lotes->removeElement($lote)) {
            // set the owning side to null (unless already changed)
            if ($lote->getTraslado() === $this) {
                $lote->setTraslado(null);
            }
        }

        return $this;
    }

}
