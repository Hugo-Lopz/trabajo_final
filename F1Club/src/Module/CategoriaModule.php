<?php

namespace App\Module;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Escala;
use App\Entity\Equipo;
use App\Entity\Fabricante;

class CategoriaModule
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function getEscalas()
    {
        return $this->entityManager->getRepository(Escala::class)->findAll();
    }

    public function getEquipos()
    {
        return $this->entityManager->getRepository(Equipo::class)->findAll();
    }

    public function getFabricantes()
    {
        return $this->entityManager->getRepository(Fabricante::class)->findAll();
    }
}