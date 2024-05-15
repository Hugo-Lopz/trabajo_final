<?php

namespace App\Entity;

use App\Repository\ProductoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductoRepository::class)]
class Producto
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $stock = null;

    #[ORM\Column(length: 200)]
    private ?string $nombre_producto = null;

    #[ORM\OneToMany(mappedBy: 'producto', targetEntity: LineaPedido::class, orphanRemoval: true)]
    private Collection $lineaPedidos;

    #[ORM\OneToMany(mappedBy: 'producto', targetEntity: Imagen::class, orphanRemoval: true)]
    private Collection $imagenes;

    #[ORM\OneToMany(mappedBy: 'producto', targetEntity: Valoracion::class)]
    private Collection $valoraciones;

    #[ORM\ManyToMany(targetEntity: ListaDeseos::class, inversedBy: 'productos')]
    private Collection $listaDeseos;

    #[ORM\ManyToOne(inversedBy: 'producto')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Equipo $equipo = null;

    #[ORM\Column(nullable: true)]
    private ?float $precio = null;

    #[ORM\ManyToOne(inversedBy: 'producto')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Escala $escala = null;

    #[ORM\ManyToOne(inversedBy: 'producto')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Fabricante $fabricante = null;

    #[ORM\Column]
    private ?bool $segunda_mano = null;

    public function __construct()
    {
        $this->lineaPedidos = new ArrayCollection();
        $this->imagenes = new ArrayCollection();
        $this->valoraciones = new ArrayCollection();
        $this->listaDeseos = new ArrayCollection();
    }

    public function __toString(): string
    {
        return $this->getEquipo()->getNombreEquipo() . "{$this->getEscala()->getNombreEscala()}";
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): static
    {
        $this->stock = $stock;

        return $this;
    }

    public function getNombreProducto(): ?string
    {
        return $this->nombre_producto;
    }

    public function setNombreProducto(string $nombre_producto): static
    {
        $this->nombre_producto = $nombre_producto;

        return $this;
    }

    /**
     * @return Collection<int, LineaPedido>
     */
    public function getLineaPedidos(): Collection
    {
        return $this->lineaPedidos;
    }

    public function addLineaPedido(LineaPedido $lineaPedido): static
    {
        if (!$this->lineaPedidos->contains($lineaPedido)) {
            $this->lineaPedidos->add($lineaPedido);
            $lineaPedido->setProducto($this);
        }

        return $this;
    }

    public function removeLineaPedido(LineaPedido $lineaPedido): static
    {
        if ($this->lineaPedidos->removeElement($lineaPedido)) {
            // set the owning side to null (unless already changed)
            if ($lineaPedido->getProducto() === $this) {
                $lineaPedido->setProducto(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Imagen>
     */
    public function getImagenes(): Collection
    {
        return $this->imagenes;
    }

    public function addImagen(Imagen $imagen): static
    {
        if (!$this->imagenes->contains($imagen)) {
            $this->imagenes->add($imagen);
            $imagen->setProducto($this);
        }

        return $this;
    }

    public function removeImagen(Imagen $imagen): static
    {
        if ($this->imagenes->removeElement($imagen)) {
            // set the owning side to null (unless already changed)
            if ($imagen->getProducto() === $this) {
                $imagen->setProducto(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Valoracion>
     */
    public function getValoraciones(): Collection
    {
        return $this->valoraciones;
    }

    public function addValoracion(Valoracion $valoracion): static
    {
        if (!$this->valoraciones->contains($valoracion)) {
            $this->valoraciones->add($valoracion);
            $valoracion->setProducto($this);
        }

        return $this;
    }

    public function removeValoracion(Valoracion $valoracion): static
    {
        if ($this->valoraciones->removeElement($valoracion)) {
            // set the owning side to null (unless already changed)
            if ($valoracion->getProducto() === $this) {
                $valoracion->setProducto(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ListaDeseos>
     */
    public function getListaDeseos(): Collection
    {
        return $this->listaDeseos;
    }

    public function addListaDeseo(ListaDeseos $listaDeseo): static
    {
        if (!$this->listaDeseos->contains($listaDeseo)) {
            $this->listaDeseos->add($listaDeseo);
        }

        return $this;
    }

    public function removeListaDeseo(ListaDeseos $listaDeseo): static
    {
        $this->listaDeseos->removeElement($listaDeseo);

        return $this;
    }

    public function getEquipo(): ?Equipo
    {
        return $this->equipo;
    }

    public function setEquipo(?Equipo $equipo): static
    {
        $this->equipo = $equipo;

        return $this;
    }

    public function getPrecio(): ?float
    {
        return $this->precio;
    }

    public function setPrecio(?float $precio): static
    {
        $this->precio = $precio;

        return $this;
    }

    public function getEscala(): ?Escala
    {
        return $this->escala;
    }

    public function setEscala(?Escala $escala): static
    {
        $this->escala = $escala;

        return $this;
    }

    public function getFabricante(): ?Fabricante
    {
        return $this->fabricante;
    }

    public function setFabricante(?Fabricante $fabricante): static
    {
        $this->fabricante = $fabricante;

        return $this;
    }

    public function isSegundaMano(): ?bool
    {
        return $this->segunda_mano;
    }

    public function setSegundaMano(bool $segunda_mano): static
    {
        $this->segunda_mano = $segunda_mano;

        return $this;
    }
}