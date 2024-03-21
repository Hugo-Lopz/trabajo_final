<?php

namespace App\Entity;

use App\Repository\EscalaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EscalaRepository::class)]
class Escala
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 5)]
    private ?string $nombre_escala = null;

    #[ORM\OneToMany(mappedBy: 'escala', targetEntity: Producto::class, orphanRemoval: true)]
    private Collection $producto;

    public function __construct()
    {
        $this->producto = new ArrayCollection();
    }

    public function __toString(): string
    {
        return $this->getNombreEscala();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreEscala(): ?string
    {
        return $this->nombre_escala;
    }

    public function setNombreEscala(string $nombre_escala): static
    {
        $this->nombre_escala = $nombre_escala;

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
            $producto->setEscala($this);
        }

        return $this;
    }

    public function removeProducto(Producto $producto): static
    {
        if ($this->producto->removeElement($producto)) {
            // set the owning side to null (unless already changed)
            if ($producto->getEscala() === $this) {
                $producto->setEscala(null);
            }
        }

        return $this;
    }
}
