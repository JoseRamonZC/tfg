<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * ImportacionLote
 *
 * @ORM\Table(name="importacion_lote")
 * @ORM\Entity
 * @Gedmo\Loggable()
 */
class ImportacionLote {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Importacion
     *
     * @ORM\ManyToOne(targetEntity="Importacion", inversedBy="lotes")
     * @Gedmo\Versioned()
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="importacion_id", referencedColumnName="id")
     * })
     */
    private $importacion;

    /**
     * @var \Lote
     *
     * @ORM\ManyToOne(targetEntity="Lote", inversedBy="importaciones")
     * @Gedmo\Versioned()
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lote_id", referencedColumnName="id")
     * })
     */
    private $lote;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float", nullable=true)
     * @Gedmo\Versioned()
     */
    private $precio;

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

    public function getPrecio(): ?float
    {
        return $this->precio;
    }

    public function setPrecio(?float $precio): self
    {
        $this->precio = $precio;

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

    public function getImportacion(): ?Importacion
    {
        return $this->importacion;
    }

    public function setImportacion(?Importacion $importacion): self
    {
        $this->importacion = $importacion;

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
