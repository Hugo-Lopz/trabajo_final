<?php

namespace App\Controller\Shop;

use App\Module\CategoriaModule;
use App\Repository\LineaPedidoRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function home(LineaPedidoRepository $lineaPedidoRepository, CategoriaModule $categoriaModuCategoriaModule): Response
    {
        //Con la clase que hemos creado vuelvo a obtener todos los datos necesarios para el navbar
        $escalas = $categoriaModuCategoriaModule->getEscalas();
        $equipos = $categoriaModuCategoriaModule->getEquipos();
        $fabricantes = $categoriaModuCategoriaModule->getFabricantes();
        //Obtengo los productos
        $productosMasVendidos = $lineaPedidoRepository->obtenerTop3ProductosMasVendidos();

        return $this->render('home/home.html.twig', [
            'productosMasVendidos'=> $productosMasVendidos, 'escalas' => $escalas, 'equipos' => $equipos, 'fabricantes' => $fabricantes,
        ]);
    }
}
