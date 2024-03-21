<?php

namespace App\Entity;

use App\Repository\EquipoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EquipoRepository::class)]
class Equipo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $nombre_equipo = null;

    #[ORM\OneToMany(mappedBy: 'equipo', targetEntity: Producto::class, orphanRemoval: true)]
    private Collection $producto;

    public function __construct()
    {
        $this->producto = new ArrayCollection();
    }

    public function __toString(): string
    {
        return $this->getNombreEquipo();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreEquipo(): ?string
    {
        return $this->nombre_equipo;
    }

    public function setNombreEquipo(string $nombre_equipo): static
    {
        $this->nombre_equipo = $nombre_equipo;

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
            $producto->setEquipo($this);
        }

        return $this;
    }

    public function removeProducto(Producto $producto): static
    {
        if ($this->producto->removeElement($producto)) {
            // set the owning side to null (unless already changed)
            if ($producto->getEquipo() === $this) {
                $producto->setEquipo(null);
            }
        }

        return $this;
    }
}
