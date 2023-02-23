<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Subcategoria
 *
 * @ORM\Table(name="subcategoria")
 * @ORM\Entity
 * @Gedmo\Loggable()
 */
class Subcategoria {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Categoria
     * @Gedmo\Versioned()
     *
     * @ORM\ManyToOne(targetEntity="Categoria", inversedBy="subcategorias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categoria_id", referencedColumnName="id")
     * })
     */
    private $categoria;

    /**
     * @var string
     * @Gedmo\Versioned()
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     * @Gedmo\Versioned()
     *
     * @ORM\Column(name="descripcion", type="text", nullable=true)
     */
    private $descripcion;

    /**
     * @var bool|null
     * @Gedmo\Versioned()
     *
     * @ORM\Column(name="estado", type="boolean", nullable=true)
     */
    private $estado;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuarioCreado_id", referencedColumnName="id")
     * })
     */
    private $usuarioCreado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaCreado", type="datetime", nullable=true)
     */
    private $fechaCreado;

    /**
     * @ORM\OneToMany(targetEntity="Producto", mappedBy="subcategoria")
     */
    private $productos;

    public function __construct() {
        $this->productos = new ArrayCollection();
    }

    public function __toString() {
        return $this->nombre;
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getNombre(): ?string {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDescripcion(): ?string {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): self {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function isEstado(): ?bool {
        return $this->estado;
    }

    public function setEstado(?bool $estado): self {
        $this->estado = $estado;

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
     * @return Collection<int, Producto>
     */
    public function getProductos(): Collection {
        return $this->productos;
    }

    public function addProducto(Producto $producto): self {
        if (!$this->productos->contains($producto)) {
            $this->productos[] = $producto;
            $producto->setSubcategoria($this);
        }

        return $this;
    }

    public function removeProducto(Producto $producto): self {
        if ($this->productos->removeElement($producto)) {
            // set the owning side to null (unless already changed)
            if ($producto->getSubcategoria() === $this) {
                $producto->setSubcategoria(null);
            }
        }

        return $this;
    }

}
