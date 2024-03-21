<?php

namespace App\Entity;

use App\Repository\LineaPedidoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LineaPedidoRepository::class)]
class LineaPedido
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $nombre_producto = null;

    #[ORM\Column]
    private ?int $cantidad = null;

    #[ORM\Column]
    private ?float $precio = null;

    #[ORM\ManyToOne(inversedBy: 'lineaPedidos')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Pedido $pedido = null;

    #[ORM\ManyToOne(inversedBy: 'lineaPedidos')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Producto $producto = null;

    public function __construct()
    {

    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getCantidad(): ?int
    {
        return $this->cantidad;
    }

    public function setCantidad(int $cantidad): static
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    public function getPrecio(): ?float
    {
        return $this->precio;
    }

    public function setPrecio(float $precio): static
    {
        $this->precio = $precio;

        return $this;
    }

    public function getPedido(): ?Pedido
    {
        return $this->pedido;
    }

    public function setPedido(?Pedido $pedido): static
    {
        $this->pedido = $pedido;

        return $this;
    }

    public function getProducto(): ?Producto
    {
        return $this->producto;
    }

    public function setProducto(?Producto $producto): static
    {
        $this->producto = $producto;

        return $this;
    }
}
