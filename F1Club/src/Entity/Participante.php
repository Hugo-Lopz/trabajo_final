<?php

namespace App\Entity;

use App\Repository\ParticipanteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ParticipanteRepository::class)]
class Participante
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'participantes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Conversacion $conversacion = null;

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
}
