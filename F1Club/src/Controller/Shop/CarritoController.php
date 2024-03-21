<?php

namespace App\Controller\Shop;

use App\Module\CategoriaModule;
use App\Repository\ProductoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarritoController extends AbstractController
{
    #[Route('/carrito/add/{idProducto}', name: 'agregar_producto_al_carrito')]
    public function agregarProductoAlCarrito(ProductoRepository $productoRepository, Request $request, int $idProducto): Response
    {
        // Solo podrán realizar esta función los usuarios registrado, en caso de que no estes registrado symfony te llevará al login automáticamente
        $this->denyAccessUnlessGranted('ROLE_USER');

        // Obtengo el carrito de la sesión
        $carrito = $request->getSession()->get('carrito', []);
        // Obtengo el objeto producto del producto que estoy añadiendo
        $producto = $productoRepository->find($idProducto);
        // Obtengo su stock ya que al añadir al carrito tendre que comporbarlo
        $stock = $producto->getStock();

        // Compruebo si el producto existe en el carrito
        if (!isset($carrito[$idProducto])) {
            // Lo establezco con la cantidad que haya añadido del producto
            $carrito[$idProducto] = $request->request->get('cantidad');
            // Si el stock es mayor o igual que la cantidad que he elegido podre añadirlo al carrito
            if ($stock >= $carrito[$idProducto]) {
                $request->getSession()->set('carrito', $carrito);
            }
        } else {
            // En caso de que ese producto este ya en el carrito le sumo la cantidad que haya añadido siempre que el stock sea mayor o igual a la cantidad
            if ($stock >= ($carrito[$idProducto]+ $request->request->get('cantidad'))) {
                $carrito[$idProducto] += $request->request->get('cantidad');
                $request->getSession()->set('carrito', $carrito);
            }
        }


        return $this->redirectToRoute('ver_producto', ['id' => $idProducto]);
    }

    // Este método nos permitira eliminar una unidad del producto dentro del carrito
    #[Route('/carrito/delete/{idProducto}', name: 'quitar_producto_del_carrito')]
    public function quitarProductodelCarrito(Request $request, int $idProducto): Response
    {
        //Solo podrán realizar esta función los usuarios registrado, en caso de que no estes registrado symfony te llevará al login automáticamente
        $this->denyAccessUnlessGranted('ROLE_USER');

        $carrito = $request->getSession()->get('carrito', []);

        // Compruebo que sea mayor que 0 al restar ya que en caso de que de 0 borraré el producto del carrito
        if ($carrito[$idProducto]-1 >= 0) {
            $carrito[$idProducto]--;

            if($carrito[$idProducto] == 0) {
                unset($carrito[$idProducto]);
            }
        }


        $request->getSession()->set('carrito', $carrito);

        return $this->redirectToRoute('mostrar_carrito');
    }

    #[Route('/carrito', name: 'mostrar_carrito')]
    public function mostrarCarrito(CategoriaModule $categoriaModule, ProductoRepository $productoRepository, Request $request): Response
    {
        // Solo podrán realizar esta función los usuarios registrado, en caso de que no estes registrado symfony te llevará al login automáticamente
        $this->denyAccessUnlessGranted('ROLE_USER');
        
        // Al incluir el navbar tengo que introducir sus datos
        $escalas = $categoriaModule ->getEscalas();
        $equipos = $categoriaModule ->getEquipos();
        $fabricantes = $categoriaModule ->getFabricantes();

        $carrito = $request->getSession()->get('carrito', []);

        // Digo que idProducto es nulo para que aparezca el carrito vacío
        $idProducto = null;
        $productosCarrito = [];

        // Recorro el array de carrito en sesión sabiendo que su clave es idProducto y su valor la cantidad
        foreach ($carrito as $idProducto => $cantidad) {
            // Obtengo el objeto producto
            $producto = $productoRepository->find($idProducto);

            if (!$producto) {
                throw $this->createNotFoundException('Producto no encontrado');
            } else {
                // Añado los productos del carrito a un array que tendrá el siguiente array de valores para poder mostrar sus datos en la tabla
                $productosCarrito[$idProducto] = [
                    'nombre' => $producto->getNombreProducto(),
                    'cantidad' => $cantidad,
                    'precio' => $producto->getPrecio()
                ];
            }
        }
        
        return $this->render('carrito/carrito.html.twig', [
            'idProducto' => $idProducto, 'escalas' => $escalas, 'equipos' => $equipos, 'fabricantes' => $fabricantes, 'productosCarrito' => $productosCarrito,
        ]);
    }
}
