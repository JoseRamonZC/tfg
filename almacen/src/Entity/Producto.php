<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Producto
 *
 * @ORM\Table(name="producto")
 * @ORM\Entity
 * @Gedmo\Loggable()
 */
class Producto {

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
     * @ORM\Column(name="codigo", type="string", length=255, nullable=true)
     * @Gedmo\Versioned()
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="referencia", type="string", length=255, nullable=true)
     * @Gedmo\Versioned()
     */
    private $referencia;

    /**
     * @var string
     *
     * @ORM\Column(name="codigoBarra", type="string", length=255, nullable=true)
     * @Gedmo\Versioned()
     */
    private $codigoBarra;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=true)
     * @Gedmo\Versioned()
     */
    private $nombre;

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
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", nullable=true)
     * @Gedmo\Versioned()
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="string", length=255, nullable=true)
     * @Gedmo\Versioned()
     */
    private $foto;

    /**
     * @var \Categoria
     *
     * @ORM\ManyToOne(targetEntity="Categoria", inversedBy="productos")
     * @Gedmo\Versioned()
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categoria_id", referencedColumnName="id")
     * })
     */
    private $categoria;

    /**
     * @var \Subcategoria
     *
     * @ORM\ManyToOne(targetEntity="Subcategoria", inversedBy="productos")
     * @Gedmo\Versioned()
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="subcategoria_id", referencedColumnName="id")
     * })
     */
    private $subcategoria;

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
     * @ORM\OneToMany(targetEntity="AlmacenProducto", mappedBy="producto")
     */
    private $almacenes;

    public function __construct() {
        $this->almacenes = new ArrayCollection();
    }

    public function __toString() {
        return $this->nombre;
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getCodigo(): ?string {
        return $this->codigo;
    }

    public function setCodigo(?string $codigo): self {
        $this->codigo = $codigo;

        return $this;
    }

    public function getReferencia(): ?string {
        return $this->referencia;
    }

    public function setReferencia(?string $referencia): self {
        $this->referencia = $referencia;

        return $this;
    }

    public function getCodigoBarra(): ?string {
        return $this->codigoBarra;
    }

    public function setCodigoBarra(?string $codigoBarra): self {
        $this->codigoBarra = $codigoBarra;

        return $this;
    }

    public function getNombre(): ?string {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self {
        $this->nombre = $nombre;

        return $this;
    }

    public function getPrecio(): ?float {
        return $this->precio;
    }

    public function setPrecio(?float $precio): self {
        $this->precio = $precio;

        return $this;
    }

    public function getDescripcion(): ?string {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): self {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getFechaCreado(): ?\DateTimeInterface {
        return $this->fechaCreado;
    }

    public function setFechaCreado(?\DateTimeInterface $fechaCreado): self {
        $this->fechaCreado = $fechaCreado;

        return $this;
    }

    public function getCategoria(): ?Categoria {
        return $this->categoria;
    }

    public function setCategoria(?Categoria $categoria): self {
        $this->categoria = $categoria;

        return $this;
    }

    public function getUsuarioCreado(): ?Usuario {
        return $this->usuarioCreado;
    }

    public function setUsuarioCreado(?Usuario $usuarioCreado): self {
        $this->usuarioCreado = $usuarioCreado;

        return $this;
    }

    /**
     * @return Collection<int, AlmacenProducto>
     */
    public function getAlmacenes(): Collection {
        return $this->almacenes;
    }

    public function addAlmacene(AlmacenProducto $almacene): self {
        if (!$this->almacenes->contains($almacene)) {
            $this->almacenes[] = $almacene;
            $almacene->setProducto($this);
        }

        return $this;
    }

    public function removeAlmacene(AlmacenProducto $almacene): self {
        if ($this->almacenes->removeElement($almacene)) {
            // set the owning side to null (unless already changed)
            if ($almacene->getProducto() === $this) {
                $almacene->setProducto(null);
            }
        }

        return $this;
    }

    public function getFoto(): ?string
    {
        return $this->foto;
    }

    public function setFoto(?string $foto): self
    {
        $this->foto = $foto;

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

    public function getSubcategoria(): ?Subcategoria
    {
        return $this->subcategoria;
    }

    public function setSubcategoria(?Subcategoria $subcategoria): self
    {
        $this->subcategoria = $subcategoria;

        return $this;
    }

}
