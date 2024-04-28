<?php

namespace App\Controller;

use App\Entity\Conversacion;
use App\Entity\Participante;
use App\Entity\Usuario;
use App\Repository\ConversacionRepository;
use App\Repository\UsuarioRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConversacionController extends AbstractController
{
    private $usuarioRepository;
    private $entityManager;
    private $conversacionRepository;

    public function __construct(UsuarioRepository $usuarioRepository, EntityManagerInterface $entityManager, ConversacionRepository $conversacionRepository)
    {
        $this->usuarioRepository = $usuarioRepository;
        $this->entityManager = $entityManager;
        $this->conversacionRepository = $conversacionRepository;
    }

    #[Route('/conversacion/{id}', name: 'app_conversacion')]
    public function crearConversaciones(Request $request, int $id)
    {
        $otroUser = $request->get(key:'otroUsuario', default:0);
        $otroUser = $this->usuarioRepository->find($id);

        if(is_null($otroUser)) {
            throw new \Exception(message:"No se ha encontrado el usuario");
        }

        //No puedo crear una conversación conmigo mismo
        $usuarioActual = $this->getUser();

        if ($usuarioActual instanceof Usuario) {
            if($otroUser->getId() === $usuarioActual->getId()) {
                throw new \Exception(message:"No puedes crear una conversación contigo mismo");
            }

            //Comprobar si ya existe la conversación
            $conversacion = $this->conversacionRepository->findConversacionByParticipantes($otroUser->getId(),$usuarioActual->getId());
        
            if(count($conversacion)) {
                throw new \Exception(message:"La conversación ya existe"); 
            }

            $conversacion = new Conversacion();

            $participante = new Participante();
            $participante->setUsuario($usuarioActual);
            $participante->setConversacion($conversacion);

            $otroParticipante = new Participante();
            $otroParticipante->setUsuario($otroUser);
            $otroParticipante->setConversacion($conversacion);

            $this->entityManager->getConnection()->beginTransaction();
            try {
                $this->entityManager->persist($conversacion);
                $this->entityManager->persist($participante);
                $this->entityManager->persist($otroParticipante);

                $this->entityManager->flush();
                $this->entityManager->commit();

            } catch (\Exception $e) {
                $this->entityManager->rollback();
                throw $e;
            }


        }


        
        return $this->json(['id' => $conversacion->getId()], Response::HTTP_CREATED, [], []);
    }

    #[Route('/conversaciones', name: 'getConversaciones')]
    public function obtenerConversaciones()
    {
        $usuarioActual = $this->getUser();
        if ($usuarioActual instanceof Usuario) {
            $conversaciones = $this->conversacionRepository->findConversacionByUsuario($usuarioActual->getId());
        }

        return $this->json($conversaciones);
    }
}
