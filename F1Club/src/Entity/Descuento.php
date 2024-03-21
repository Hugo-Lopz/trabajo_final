<?php

namespace App\Entity;

use App\Repository\DescuentoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DescuentoRepository::class)]
class Descuento
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $porcentaje_descuento = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $fecha_inicio = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $fecha_finalizacion = null;

    #[ORM\OneToMany(mappedBy: 'descuento', targetEntity: Producto::class, orphanRemoval: true)]
    private Collection $producto;

    public function __construct()
    {
        $this->producto = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPorcentajeDescuento(): ?int
    {
        return $this->porcentaje_descuento;
    }

    public function setPorcentajeDescuento(int $porcentaje_descuento): static
    {
        $this->porcentaje_descuento = $porcentaje_descuento;

        return $this;
    }

    public function getFechaInicio(): ?\DateTimeInterface
    {
        return $this->fecha_inicio;
    }

    public function setFechaInicio(\DateTimeInterface $fecha_inicio): static
    {
        $this->fecha_inicio = $fecha_inicio;

        return $this;
    }

    public function getFechaFinalizacion(): ?\DateTimeInterface
    {
        return $this->fecha_finalizacion;
    }

    public function setFechaFinalizacion(\DateTimeInterface $fecha_finalizacion): static
    {
        $this->fecha_finalizacion = $fecha_finalizacion;

        return $this;
    }

    /**
     * @return Collection<int, Producto>
     */
    public function getProducto(): Collection
    {
        return $this->producto;
    }

    public function addProducto(Producto $producto): static
    {
        if (!$this->producto->contains($producto)) {
            $this->producto->add($producto);
            $producto->setDescuento($this);
        }

        return $this;
    }

    public function removeProducto(Producto $producto): static
    {
        if ($this->producto->removeElement($producto)) {
            // set the owning side to null (unless already changed)
            if ($producto->getDescuento() === $this) {
                $producto->setDescuento(null);
            }
        }

        return $this;
    }
}
