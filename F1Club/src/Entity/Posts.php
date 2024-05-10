<?php

namespace App\Entity;

use App\Repository\PostsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PostsRepository::class)]
class Posts
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'posts')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Usuario $usuarios = null;

    #[ORM\ManyToOne(inversedBy: 'posts')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Temas $temas = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsuarios(): ?Usuario
    {
        return $this->usuarios;
    }

    public function setUsuarios(?Usuario $usuarios): static
    {
        $this->usuarios = $usuarios;

        return $this;
    }

    public function getTemas(): ?Temas
    {
        return $this->temas;
    }

    public function setTemas(?Temas $temas): static
    {
        $this->temas = $temas;

        return $this;
    }
}
