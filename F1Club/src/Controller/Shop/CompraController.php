<?php

namespace App\Controller\Shop;

use App\Entity\LineaPedido;
use App\Entity\Pedido;
use App\Entity\Usuario;
use App\Repository\MetodoDePagoRepository;
use App\Repository\ProductoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CompraController extends AbstractController
{
    #[Route('/pagar', name: 'pagina_de_pago')]
    public function pagar(ProductoRepository $productoRepository, Request $request, MetodoDePagoRepository $metodoDePagoRepository): Response
    {
        //Solo podrán realizar esta función los usuarios registrado, en caso de que no estes registrado symfony te llevará al login automáticamente
        $this->denyAccessUnlessGranted('ROLE_USER');

        //Muestro todos los métodos de pago disponibles
        $metodosDePago = $metodoDePagoRepository->findAll();
        $carrito = $request->getSession()->get('carrito', []);
        $precioTotal = 0;

        //Recorro el carrito y voy sumando el precio de cada uno de los productos para saber el coste total
        foreach ($carrito as $idProducto => $cantidad) {
            $producto = $productoRepository->find($idProducto);
            $precioTotal += ($producto->getPrecio() * $cantidad);
        }

        //Este coste lo guardo en sesión para poder utilizarlo más tarde
        $request->getSession()->set('costeTotal', $precioTotal);

        return $this->render('compra/procesoDePago.html.twig', [
            'precio_total' => $precioTotal, 'metodos_de_pago' => $metodosDePago
        ]);
    }

    #[Route('/compra', name: 'procesar_compra')]
    public function comprarProductos(MetodoDePagoRepository $metodoDePagoRepository, EntityManagerInterface $entityManager, Request $request, ProductoRepository $productoRepository): Response
    {
        //Solo podrán realizar esta función los usuarios registrado, en caso de que no estes registrado symfony te llevará al login automáticamente
        $this->denyAccessUnlessGranted('ROLE_USER');
        
        //Obtengo al usuario de la sesión
        $usuario = $this->getUser();

        //Obtengo el value que contiene el id del metodo de pago seleccionado en el formulario
        $metodoPagoId = $request->request->get('metodo_pago');

        //Obtengo el método de pago con su repository gracias a que he obtenido su id
        $metodoPago = $metodoDePagoRepository->find($metodoPagoId);

        //Compruebo que el objeto usuario de la sesión es una instancia de la clase Usuario para usar sus métodos
        if ($usuario instanceof Usuario) {
            //Establezco todos los datos del pedido
            $carrito = $request->getSession()->get('carrito', []);
            $fechaActual = new \DateTimeImmutable('now');
            $fechaEstimadaDeEntrega = $fechaActual->modify('+7 days');
            $costeTotal = $request->getSession()->get('costeTotal');

            $pedido = new Pedido;
            $pedido->setFechaPedido($fechaActual);
            $pedido->setFechaEnvio($fechaEstimadaDeEntrega);
            $pedido->setUsuario($usuario);
            $pedido->setEstadoPedido("En reparto");
            $pedido->setCosteTotal($costeTotal);
            $pedido->setMetodoDePago($metodoPago);

            $usuario->setDineroGastado($usuario->getDineroGastado() + $costeTotal);

            $entityManager->persist($pedido);

            //Vuelvo a recorrer el carrito para establecer cada una de las líneas de pedido del pedido
            foreach ($carrito as $idProducto => $cantidad) {
                $producto = $productoRepository->find($idProducto);

                $linea_pedido = new LineaPedido;
                $linea_pedido->setNombreProducto($producto->getNombreProducto());
                $linea_pedido->setCantidad($cantidad);
                $linea_pedido->setPrecio($producto->getPrecio() * $cantidad);
                $linea_pedido->setPedido($pedido);
                $linea_pedido->setProducto($producto);
                $pedido->addLineaPedido($linea_pedido);

                $producto->setStock($producto->getStock() - $cantidad);

                $entityManager->persist($linea_pedido);
            }

            $entityManager->flush();

            //Vacío el carrito al terminar la compra
            $request->getSession()->set('carrito', []);
        }


        return $this->render('compra/compraFinalizada.html.twig', [
        ]);
    }
}
