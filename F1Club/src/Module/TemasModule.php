<?php

namespace App\Module;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Temas;

class TemasModule
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function getTemas()
    {
        return $this->entityManager->getRepository(Temas::class)->findAll();
    }
}