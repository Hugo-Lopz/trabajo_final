<?php

namespace App\Entity;

use App\Repository\ListaDeseosRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ListaDeseosRepository::class)]
class ListaDeseos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToMany(targetEntity: Producto::class, mappedBy: 'listaDeseos')]
    private Collection $productos;

    #[ORM\OneToOne(mappedBy: 'lista_deseos', cascade: ['persist', 'remove'])]
    private ?Usuario $usuario = null;

    public function __construct()
    {
        $this->productos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Producto>
     */
    public function getProductos(): Collection
    {
        return $this->productos;
    }

    public function addProducto(Producto $producto): static
    {
        if (!$this->productos->contains($producto)) {
            $this->productos->add($producto);
            $producto->addListaDeseo($this);
        }

        return $this;
    }

    public function removeProducto(Producto $producto): static
    {
        if ($this->productos->removeElement($producto)) {
            $producto->removeListaDeseo($this);
        }

        return $this;
    }

    public function getUsuario(): ?Usuario
    {
        return $this->usuario;
    }

    public function setUsuario(?Usuario $usuario): static
    {
        // unset the owning side of the relation if necessary
        if ($usuario === null && $this->usuario !== null) {
            $this->usuario->setListaDeseos(null);
        }

        // set the owning side of the relation if necessary
        if ($usuario !== null && $usuario->getListaDeseos() !== $this) {
            $usuario->setListaDeseos($this);
        }

        $this->usuario = $usuario;

        return $this;
    }
}
