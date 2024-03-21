<?php

namespace App\Controller\Manager;

use App\Repository\LineaPedidoRepository;
use App\Repository\PedidoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ManagerController extends AbstractController
{
    #[Route('/manager/home', name: 'manager_home')]
    public function mostrarHomeManager(PedidoRepository $pedidoRepository, LineaPedidoRepository $lineaPedidoRepository): Response
    {   
        // Obtengo el total de productos vendidos del repository
        $productosVendidos = $lineaPedidoRepository->obtenerTotalProductosVendidos(); 
        // Obtengo los ingresos totales que ha generado la tienda
        $ingresosTotales =  $pedidoRepository->obtenerIngresosTotales();

        return $this->render('manager/managerHome.html.twig', [
            'productosVendidos' => $productosVendidos, 'ingresosTotales' => $ingresosTotales
        ]);
    }

    #[Route('/manager/productosMasVendidos', name: 'mostrar_mas_vendidos_este_mes')]
    public function mostrarTop10ProductosMasVendidosEsteMes(LineaPedidoRepository $lineaPedidoRepository): Response
    {
        // Obtengo las fechas tanto del primer como del último día del mes
        $fechaInicioMes = new \DateTime('first day of this month');
        $fechaFinMes = new \DateTime('last day of this month');

        // Busco en el repositorio de LineaPedido los productos que más se han vendido en todo el mes
        $productosMasVendidos = $lineaPedidoRepository->findProductosMasVendidos($fechaInicioMes, $fechaFinMes);

        // Convierto el dato del total_vendido a valor númerico para evitar problemas al pasarlo a json y mandarlo al JS
        foreach ($productosMasVendidos as &$producto) {
            $producto['total_vendido'] = intval($producto['total_vendido']); // Convertir el valor a número
        }

        // Convertir los datos a JSON
        $productosMasVendidosJson = json_encode($productosMasVendidos);

        return $this->render('manager/graficaMasVendidos.html.twig', [
            'productosMasVendidos' => $productosMasVendidosJson,
        ]);
    }

    #[Route('/manager/pedidosDiariosMesActual', name: 'mostrar_pedidos_diarios_del_mes_actual')]
    public function pedidosDiariosDelMesActual(PedidoRepository $pedidoRepository): Response
    {
        // Obtengo las fechas tanto del primer como del último día del mes
        $fechaInicioMes = new \DateTime('first day of this month');
        $fechaFinMes = new \DateTime('last day of this month');

        // Busco en el repositorio de LineaPedido todos los pedidos que se han realizado cada uno de los días del mes
        $pedidosDiariosMesActual = $pedidoRepository->findPedidosDiariosMes($fechaInicioMes, $fechaFinMes);

        // Convertir los datos a números y la fecha a string para poder representarla en el eje x
        foreach ($pedidosDiariosMesActual as &$venta) {
            $venta['fecha'] = $venta['fecha']->format('Y-m-d');
            $venta['cantidadPedidos'] = intval($venta['cantidadPedidos']); // Convertir el valor a número
        }

        // Convertir los datos a JSON
        $pedidosDiariosMesActualJson = json_encode($pedidosDiariosMesActual);

        return $this->render('manager/graficaPedidosCadaDiaMesActual.html.twig', [
            'pedidosDiariosMesActual' => $pedidosDiariosMesActualJson
        ]);
    }

    #[Route('/manager/ventasFabricantesEsteMes', name: 'mostrar_ventas_fabricantes_mes_actual')]
    public function ventasFabricantesMesActual(LineaPedidoRepository $lineaPedidoRepository): Response
    {
        // Obtengo las fechas tanto del primer como del último día del mes
        $fechaInicioMes = new \DateTime('first day of this month');
        $fechaFinMes = new \DateTime('last day of this month');

        // En el repositorio de LineaPedido busco las ventas que ha realizado cada uno de los fabricantes en todo el mes
        $ventasFabricantesMes = $lineaPedidoRepository->findFabricantesVentas($fechaInicioMes, $fechaFinMes);

        // Convertir los datos a números
        foreach ($ventasFabricantesMes as &$venta) {
            $venta['total_vendido'] = intval($venta['total_vendido']); // Convertir el valor a número
        }

        // Convertir los datos a JSON
        $ventasFabricantesMesJson = json_encode($ventasFabricantesMes);

        return $this->render('manager/graficaVentasFabricantes.html.twig', [
            'ventasFabricantesMes' => $ventasFabricantesMesJson
        ]);
    }
}
