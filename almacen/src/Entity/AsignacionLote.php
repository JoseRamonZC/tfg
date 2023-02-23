<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * AsignacionLote
 *
 * @ORM\Table(name="asignacion_lote")
 * @ORM\Entity
 * @Gedmo\Loggable()
 */
class AsignacionLote {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Asignacion
     *
     * @ORM\ManyToOne(targetEntity="Asignacion", inversedBy="lotes")
     * @Gedmo\Versioned()
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="asignacion_id", referencedColumnName="id")
     * })
     */
    private $asignacion;

    /**
     * @var \Lote
     *
     * @ORM\ManyToOne(targetEntity="Lote", inversedBy="asignaciones")
     * @Gedmo\Versioned()
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lote_id", referencedColumnName="id")
     * })
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

    public function getId(): ?int
    {
        return $this->id;
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

    public function getAsignacion(): ?Asignacion
    {
        return $this->asignacion;
    }

    public function setAsignacion(?Asignacion $asignacion): self
    {
        $this->asignacion = $asignacion;

        return $this;
    }

    public function getLote(): ?Lote
    {
        return $this->lote;
    }

    public function setLote(?Lote $lote): self
    {
        $this->lote = $lote;

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

}
