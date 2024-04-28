<?php

namespace App\Entity;

use App\Repository\MensajeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MensajeRepository::class)]
class Mensaje
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'mensajes')]
    private ?Conversacion $conversacion = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $contenido = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $timeStamp = null;

    #[ORM\ManyToOne(inversedBy: 'mensajes')]
    private ?Usuario $usuario = null;

    private $miMensaje;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getConversacion(): ?Conversacion
    {
        return $this->conversacion;
    }

    public function setConversacion(?Conversacion $conversacion): static
    {
        $this->conversacion = $conversacion;

        return $this;
    }

    public function getContenido(): ?string
    {
        return $this->contenido;
    }

    public function setContenido(?string $contenido): static
    {
        $this->contenido = $contenido;

        return $this;
    }

    public function getTimeStamp(): ?\DateTimeInterface
    {
        return $this->timeStamp;
    }

    public function setTimeStamp(\DateTimeInterface $timeStamp): static
    {
        $this->timeStamp = $timeStamp;

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

    public function getMiMensaje()
    {
        return $this->miMensaje;
    }

    public function setMiMensaje($miMensaje)
    {
        $this->miMensaje = $miMensaje;
        
        return $this;
    }
}
