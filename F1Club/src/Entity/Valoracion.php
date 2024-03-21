<?php

namespace App\Entity;

use App\Repository\ValoracionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ValoracionRepository::class)]
class Valoracion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $valoracion_numerica = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $comentario = null;

    #[ORM\Column(length: 100)]
    private ?string $nombre_usuario = null;

    #[ORM\ManyToOne(inversedBy: 'valoracion')]
    private ?Producto $producto = null;

    #[ORM\ManyToOne(inversedBy: 'valoracions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Usuario $usuario = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValoracionNumerica(): ?int
    {
        return $this->valoracion_numerica;
    }

    public function setValoracionNumerica(int $valoracion_numerica): static
    {
        $this->valoracion_numerica = $valoracion_numerica;

        return $this;
    }

    public function getComentario(): ?string
    {
        return $this->comentario;
    }

    public function setComentario(?string $comentario): static
    {
        $this->comentario = $comentario;

        return $this;
    }

    public function getNombreUsuario(): ?string
    {
        return $this->nombre_usuario;
    }

    public function setNombreUsuario(string $nombre_usuario): static
    {
        $this->nombre_usuario = $nombre_usuario;

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

    public function getUsuario(): ?Usuario
    {
        return $this->usuario;
    }

    public function setUsuario(?Usuario $usuario): static
    {
        $this->usuario = $usuario;

        return $this;
    }
}
