<?php

namespace App\Entity;

use App\Repository\PedidoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PedidoRepository::class)]
class Pedido
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $fecha_pedido = null;

    #[ORM\Column(length: 100)]
    private ?string $estado_pedido = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $fecha_envio = null;

    #[ORM\Column]
    private ?float $coste_total = null;

    #[ORM\ManyToOne(inversedBy: 'pedidos')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Usuario $usuario = null;

    #[ORM\OneToMany(mappedBy: 'pedido', targetEntity: LineaPedido::class, orphanRemoval: true)]
    private Collection $lineasPedido;

    #[ORM\ManyToOne(inversedBy: 'pedido')]
    #[ORM\JoinColumn(nullable: false)]
    private ?MetodoDePago $metodoDePago = null;

    public function __construct()
    {
        $this->lineasPedido = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFechaPedido(): ?\DateTimeInterface
    {
        return $this->fecha_pedido;
    }

    public function setFechaPedido(\DateTimeInterface $fecha_pedido): static
    {
        $this->fecha_pedido = $fecha_pedido;

        return $this;
    }

    public function getEstadoPedido(): ?string
    {
        return $this->estado_pedido;
    }

    public function setEstadoPedido(string $estado_pedido): static
    {
        $this->estado_pedido = $estado_pedido;

        return $this;
    }

    public function getFechaEnvio(): ?\DateTimeInterface
    {
        return $this->fecha_envio;
    }

    public function setFechaEnvio(\DateTimeInterface $fecha_envio): static
    {
        $this->fecha_envio = $fecha_envio;

        return $this;
    }

    public function getCosteTotal(): ?float
    {
        return $this->coste_total;
    }

    public function setCosteTotal(float $coste_total): static
    {
        $this->coste_total = $coste_total;

        return $this;
    }

    public function getUsuario(): ?Usuario
    {
        return $this->usuario;
    }

    public function setUsuario(?Usuario $usuario): static
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * @return Collection<int, LineaPedido>
     */
    public function getLineasPedido(): Collection
    {
        return $this->lineasPedido;
    }

    public function addLineaPedido(LineaPedido $lineaPedido): static
    {
        if (!$this->lineasPedido->contains($lineaPedido)) {
            $this->lineasPedido->add($lineaPedido);
            $lineaPedido->setPedido($this);
        }

        return $this;
    }

    public function removeLineaPedido(LineaPedido $lineaPedido): static
    {
        if ($this->lineasPedido->removeElement($lineaPedido)) {
            // set the owning side to null (unless already changed)
            if ($lineaPedido->getPedido() === $this) {
                $lineaPedido->setPedido(null);
            }
        }

        return $this;
    }

    public function getMetodoDePago(): ?MetodoDePago
    {
        return $this->metodoDePago;
    }

    public function setMetodoDePago(?MetodoDePago $metodoDePago): static
    {
        $this->metodoDePago = $metodoDePago;

        return $this;
    }
}
