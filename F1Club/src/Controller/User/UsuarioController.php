<?php

namespace App\Controller\User;

use App\Entity\Usuario;
use App\Module\CategoriaModule;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsuarioController extends AbstractController
{
    #[Route('/usuario/ver_pedidos', name: 'usuario_vista_pedidos')]
    public function verPedidos(CategoriaModule $categoriaModuCategoriaModule): Response
    {   
        //Solo podrán realizar esta función los usuarios registrado, en caso de que no estes registrado symfony te llevará al login automáticamente
        $this->denyAccessUnlessGranted('ROLE_USER');
        
        //Al incluir el navbar tengo que introducir sus datos
        $escalas = $categoriaModuCategoriaModule->getEscalas();
        $equipos = $categoriaModuCategoriaModule->getEquipos();
        $fabricantes = $categoriaModuCategoriaModule->getFabricantes();

        $usuario = $this->getUser();

        if ($usuario instanceof Usuario) {
            $pedidos = $usuario->getPedidos();
        }

        return $this->render('usuario/vistaPedidos.html.twig', [
            'pedidosUsuario' =>  $pedidos, 'escalas' => $escalas, 'equipos' => $equipos, 'fabricantes' => $fabricantes
        ]);
    }
}
