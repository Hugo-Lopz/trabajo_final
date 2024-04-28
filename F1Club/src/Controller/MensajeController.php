<?php

namespace App\Controller;

use App\Entity\Conversacion;
use App\Entity\Usuario;
use App\Repository\MensajeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MensajeController extends AbstractController
{   
    private $entityManager;
    private $mensajeRepository;
    public function __construct(EntityManagerInterface $entityManager, MensajeRepository $mensajeRepository)
    {
        $this->entityManager = $entityManager;
        $this->mensajeRepository = $mensajeRepository;
    }
    #[Route('/mensajes/{id}', name: 'getMensajes')]
    public function obtenerMensajes(Request $request, Conversacion $conversacion): Response
    {
        //Compruebo si puedo ver la conversación
        $this->denyAccessUnlessGranted('view', $conversacion);

        $mensajes = $this->mensajeRepository->findMensajeByIdConversacion(
            $conversacion->getId()
        );
        /**
         * @var $mensaje Mensaje
         */
        
        if ($this->getUser() instanceof Usuario) {
            array_map(function ($mensaje) {
                $mensaje->setMimensaje(
                    $mensaje->getUsuario()->getId() === $this->getUser()->getId()
                    ? true: false
                );
            }, $mensajes);
    
            dd($mensajes);
        }

        return $this->render('mensaje/index.html.twig', [
            'controller_name' => 'MensajeController',
        ]);
    }
}
