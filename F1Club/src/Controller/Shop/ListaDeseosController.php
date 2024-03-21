<?php

namespace App\Controller\Shop;

use App\Entity\ListaDeseos;
use App\Repository\ProductoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Usuario;
use App\Module\CategoriaModule;
use App\Module\ProductoImagenModule;
use Doctrine\ORM\EntityManagerInterface;

class ListaDeseosController extends AbstractController
{
    #[Route('/lista_deseos/add/{idProducto}', name: 'agregar_producto_a_lista_deseos')]
    public function agregarProductoAListaDeseos(int $idProducto, ProductoRepository $productoRepository, EntityManagerInterface $entityManager)
    {
        //Solo podrán realizar esta función los usuarios registrado, en caso de que no estes registrado symfony te llevará al login automáticamente
        $this->denyAccessUnlessGranted('ROLE_USER');

        $producto = $productoRepository->find($idProducto);

        if (!$producto) {
            throw $this->createNotFoundException('Producto no encontrado');
        }

        //Obtengo al usuario que hay en la sesión
        $usuario = $this->getUser();

        //Compruebo que el objeto usuario de la sesión es una instancia de la clase Usuario para poder usar sus métodos
        if ($usuario instanceof Usuario) {
            $listaDeseos = $usuario->getListaDeseos();
            $productoLista = $listaDeseos->addProducto($producto);
            $entityManager->persist($productoLista);
            $entityManager->flush();
        }

        return $this->redirectToRoute('ver_producto', ['id' => $idProducto]);
    }

    #[Route('/lista_deseos', name: 'acceder_lista_deseos')]
    public function accederAListaDeseos(CategoriaModule $categoriaModuCategoriaModule, ProductoRepository $productoRepository, ProductoImagenModule $productoImagenModule): Response
    {
        //Solo podrán realizar esta función los usuarios registrado, en caso de que no estes registrado symfony te llevará al login automáticamente
        $this->denyAccessUnlessGranted('ROLE_USER');

        //Al incluir el navbar tengo que introducir sus datos
        $escalas = $categoriaModuCategoriaModule->getEscalas();
        $equipos = $categoriaModuCategoriaModule->getEquipos();
        $fabricantes = $categoriaModuCategoriaModule->getFabricantes();

        $usuario = $this->getUser();
        if ($usuario instanceof Usuario) {
            $listaDeseos = $usuario->getListaDeseos();
            //Obtengo todos los productos que se encuentran en la lista de deseos que tiene el usuario relacionada con el en la BBDD
            $productos = $productoRepository->findProductosByListaDeseos($listaDeseos);
            $productosConImagen = $productoImagenModule->getProductosImagen($productos);
        }

        return $this->render('lista_deseos/lista_deseos.html.twig', [
            'escalas' => $escalas, 'equipos' => $equipos, 'fabricantes' => $fabricantes, 'productosConImagen' => $productosConImagen,
        ]);
    }

    #[Route('/lista_deseos/remove/{idProducto}', name: 'eliminar_producto_de_lista_deseos')]
    public function eliminarProductoAListaDeseos(int $idProducto, ProductoRepository $productoRepository, EntityManagerInterface $entityManager)
    {
        //Solo podrán realizar esta función los usuarios registrado, en caso de que no estes registrado symfony te llevará al login automáticamente
        $this->denyAccessUnlessGranted('ROLE_USER');

        $producto = $productoRepository->find($idProducto);

        if (!$producto) {
            throw $this->createNotFoundException('Producto no encontrado');
        }

        $usuario = $this->getUser();

        if ($usuario instanceof Usuario) {
            $listaDeseos = $usuario->getListaDeseos();
            $listaDeseos->removeProducto($producto);
            $entityManager->flush();
        }

        return $this->redirectToRoute('acceder_lista_deseos');
    }
}
