<?php

namespace App\Entity;

use App\Repository\CuponRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CuponRepository::class)]
class Cupon
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $descripcion = null;

    #[ORM\Column]
    private ?int $porcentaje_descuento = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $fecha_caducidad = null;

    #[ORM\ManyToMany(targetEntity: Usuario::class, inversedBy: 'cupones')]
    private Collection $usuarios;

    #[ORM\Column(length: 20)]
    private ?string $codigo_cupon = null;

    public function __construct()
    {
        $this->usuarios = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): static
    {
        $this->descripcion = $descripcion;

        return $this;
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

    public function getFechaCaducidad(): ?\DateTimeInterface
    {
        return $this->fecha_caducidad;
    }

    public function setFechaCaducidad(\DateTimeInterface $fecha_caducidad): static
    {
        $this->fecha_caducidad = $fecha_caducidad;

        return $this;
    }

    /**
     * @return Collection<int, Usuario>
     */
    public function getUsuarios(): Collection
    {
        return $this->usuarios;
    }

    public function addUsuario(Usuario $usuario): static
    {
        if (!$this->usuarios->contains($usuario)) {
            $this->usuarios->add($usuario);
        }

        return $this;
    }

    public function removeUsuario(Usuario $usuario): static
    {
        $this->usuarios->removeElement($usuario);

        return $this;
    }

    public function getCodigoCupon(): ?string
    {
        return $this->codigo_cupon;
    }

    public function setCodigoCupon(string $codigo_cupon): static
    {
        $this->codigo_cupon = $codigo_cupon;

        return $this;
    }
}
