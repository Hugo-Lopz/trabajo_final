<?php

namespace App\Controller\Shop;

use App\Entity\Usuario;
use App\Entity\Valoracion;
use App\Module\CategoriaModule;
use App\Module\ProductoImagenModule;
use App\Repository\LineaPedidoRepository;
use App\Repository\ProductoRepository;
use App\Repository\ValoracionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductoController extends AbstractController
{
    #[Route('/producto/{id}', name: 'ver_producto')]
    public function visualizarProducto(LineaPedidoRepository $lineaPedidoRepository,ValoracionRepository $valoracionRepository, CategoriaModule $categoriaModule, ProductoRepository $productoRepository, int $id): Response
    {
        //Con la clase que hemos creado vuelvo a obtener todos los datos necesarios para el navbar
        $escalas = $categoriaModule->getEscalas();
        $equipos = $categoriaModule->getEquipos();
        $fabricantes = $categoriaModule->getFabricantes();

        //Obtengo todos los datos del producto que se va a mostrar
        $producto = $productoRepository->find($id);
        $imagenes = $producto->getImagenes();
        $escala = $producto->getEscala();
        $fabricante = $producto->getFabricante();
        $equipo = $producto->getEquipo();
        $ventas = $lineaPedidoRepository->obtenerVentasProducto($id);
        //Obtengo todas las valoraciones de este producto con el repository
        $valoraciones = $valoracionRepository->findBy(['producto' => $producto]);


        return $this->render('producto/vistaProducto.html.twig', [
            'ventas' => $ventas, 'valoraciones' => $valoraciones, 'producto' => $producto, 'imagenes' => $imagenes, 'escala' => $escala, 'fabricante' => $fabricante, 'equipo' => $equipo, 'escalas' => $escalas, 'equipos' => $equipos, 'fabricantes' => $fabricantes
        ]);
    }

    #[Route('/busqueda', name: 'busqueda_producto')]
    public function buscarProducto(ProductoImagenModule $productoImagenModule, Request $request, CategoriaModule $categoriaModule, ProductoRepository $productoRepository): Response
    {
        //Con la clase que hemos creado vuelvo a obtener todos los datos necesarios para el navbar
        $escalas = $categoriaModule->getEscalas();
        $equipos = $categoriaModule->getEquipos();
        $fabricantes = $categoriaModule->getFabricantes();

        //Obtengo los datos de la búsqueda obteniendolo del formulario
        $busqueda = $request->get('busqueda');
        $productos = $productoRepository->findProductosByBusqueda($busqueda);
        $productosConImagen = $productoImagenModule->getProductosImagen($productos);


        return $this->render('catalogo/catalogoBusqueda.html.twig', [
            'productosConImagen' => $productosConImagen, 'escalas' => $escalas, 'equipos' => $equipos, 'fabricantes' => $fabricantes
        ]);
    }

    #[Route('/valorar/{idProducto}', name: 'valoracion_producto')]
    public function valorarProducto(EntityManagerInterface $entityManager, Request $request, ProductoRepository $productoRepository, LineaPedidoRepository $lineaPedidoRepository, int $idProducto): Response
    {
        //Solo podrán realizar esta función los usuarios registrado, en caso de que no estes registrado symfony te llevará al login automáticamente
        $this->denyAccessUnlessGranted('ROLE_USER');
        
        $usuario = $this->getUser();
        $producto = $productoRepository->find($idProducto);

        if ($usuario instanceof Usuario) {
            $idUsuario = $usuario->getId();
            $nombreUsuario = $usuario->getNombre();
        }

        //Obtengo los datos de la valroacion de su formulario y la guardo en la BBDD
        if($lineaPedidoRepository->findProductoComprasUsuario($idUsuario, $idProducto)) {
            $valoracion = new Valoracion();
            $valoracion->setNombreUsuario($nombreUsuario);
            $valoracion->setComentario($request->request->get('comentario'));
            $valoracion->setValoracionNumerica($request->request->get('valoracionNumerica'));
            $valoracion->setProducto($producto);
            $valoracion->setUsuario($usuario);
            $entityManager->persist($valoracion);
            $entityManager->flush();
            
            return $this->redirectToRoute('ver_producto', ['id' => $idProducto]);
        } else {
            return new Response(
                "No puedes valorar productos no comprados"
            );
        }
    }
}
