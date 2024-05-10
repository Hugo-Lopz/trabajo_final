<?php

namespace App\Controller;

use App\Entity\Conversacion;
use App\Entity\Mensaje;
use App\Entity\Usuario;
use App\Repository\MensajeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MensajeController extends AbstractController
{   
    const ATRIBUTOS_A_SERIALIZAR = ['id', 'contenido', 'timeSTamp', 'miMensaje'];

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

        //Recorro el array de mensajes y hago una función para cada uno, en este caso comprobará cuales son los mensajes que pertenecen al usuario que tiene la sesión iniciada.
        array_map(function ($mensaje) {
            $usuario = $this->getUser();
            if ($usuario instanceof Usuario) {
                $mensaje->setMimensaje(
                    $mensaje->getUsuario()->getId() === $usuario->getId()
                        ? true : false
                );
            }
        }, $mensajes);

        return $this->json($mensajes, Response::HTTP_OK, [], [
            'atributos' => self::ATRIBUTOS_A_SERIALIZAR
        ]);
    }

    #[Route('/mensajes/nuevo/{id}', name: 'nuevoMensaje')]
    public function nuevoMensaje (Request $request, Conversacion $conversacion)
    {
        $usuario = $this->getUser();
        $contenido = $request->get(key:'contenido', default:null);

        $mensaje = new Mensaje();
        $mensaje->setContenido($contenido);
        $mensaje->setUsuario($usuario);
        $mensaje->setMiMensaje(true);

        $conversacion->addMensaje($mensaje);
        $conversacion->setUltimoMensaje($mensaje);

        $this->entityManager->getConnection()->beginTransaction();
        try {
            $this->entityManager->persist($mensaje);
            $this->entityManager->persist($conversacion);
            $this->entityManager->flush();
            $this->entityManager->commit();
        } catch(\Exception $e) {
            $this->entityManager->rollback();
            throw $e;
        }

        return $this->json($mensaje, Response::HTTP_CREATED, [], [
            'atributos' => self::ATRIBUTOS_A_SERIALIZAR
        ]);
    }
}
