<?php

namespace App\Controller\Shop;

use App\Module\CategoriaModule;
use App\Module\ProductoImagenModule;
use App\Repository\EquipoRepository;
use App\Repository\EscalaRepository;
use App\Repository\FabricanteRepository;
use App\Repository\ProductoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoriaController extends AbstractController
{
    #[Route('/fabricante/{id}', name: 'seleccion_fabricante')]
    public function catalogoFabricantes(ProductoImagenModule $productoImagenModule,CategoriaModule $categoriaModule, FabricanteRepository $fabricanteRepository, ProductoRepository $productoRepository, int $id): Response
    {
        //Con la clase que hemos creado vuelvo a obtener todos los datos necesarios para el navbar
        $escalas = $categoriaModule->getEscalas();
        $equipos = $categoriaModule->getEquipos();
        $fabricantes = $categoriaModule->getFabricantes();

        //Obtengo la categoría con el ID que se está pasando
        $fabricante = $fabricanteRepository->find($id);

        if (!$fabricante) {
            throw $this->createNotFoundException('La decada no existe');
        }

        //Obtengo todos los productos de la base de datos 
        $productos = $productoRepository->findBy(['fabricante' => $fabricante]);

        //Obtengo las imagenes
        $productosConImagen = $productoImagenModule->getProductosImagen($productos);

        return $this->render('catalogo/catalogo.html.twig', [
            'escalas' => $escalas, 'equipos' => $equipos, 'fabricantes' => $fabricantes, 'productosConImagen' => $productosConImagen,
        ]);
    }

    #[Route('/equipo/{id}', name: 'seleccion_equipo')]
    public function catalogoEquipos(ProductoImagenModule $productoImagenModule, CategoriaModule $categoriaModule, EquipoRepository $equipoRepository, ProductoRepository $productoRepository, int $id): Response
    {
        //Con la clase que hemos creado vuelvo a obtener todos los datos necesarios para el navbar
        $escalas = $categoriaModule->getEscalas();
        $equipos = $categoriaModule->getEquipos();
        $fabricantes = $categoriaModule->getFabricantes();

        //Obtengo la categoría con el ID que se está pasando
        $equipo = $equipoRepository->find($id);

        if (!$equipo) {
            throw $this->createNotFoundException('El equipo no existe');
        }

        //Obtengo todos los productos de la base de datos 
        $productos = $productoRepository->findBy(['equipo' => $equipo]);

        //Obtengo las imagenes
        $productosConImagen = $productoImagenModule->getProductosImagen($productos);

        return $this->render('catalogo/catalogo.html.twig', [
            'escalas' => $escalas, 'equipos' => $equipos, 'fabricantes' => $fabricantes, 'productosConImagen' => $productosConImagen,
        ]);
    }

    #[Route('/escala/{id}', name: 'seleccion_escala')]
    public function catalogoEscalas(ProductoImagenModule $productoImagenModule,CategoriaModule $categoriaModule, EscalaRepository $escalaRepository, ProductoRepository $productoRepository, int $id): Response
    {
        //Con la clase que hemos creado vuelvo a obtener todos los datos necesarios para el navbar
        $escalas = $categoriaModule->getEscalas();
        $equipos = $categoriaModule->getEquipos();
        $fabricantes = $categoriaModule->getFabricantes();

        //Obtengo la categoría con el ID que se está pasando
        $escala = $escalaRepository->find($id);

        if (!$escala) {
            throw $this->createNotFoundException('La escala no existe');
        }

        //Obtengo todos los productos de la base de datos 
        $productos = $productoRepository->findBy(['escala' => $escala]);

        //Obtengo las imagenes
        $productosConImagen = $productoImagenModule->getProductosImagen($productos);

        return $this->render('catalogo/catalogo.html.twig', [
            'escalas' => $escalas, 'equipos' => $equipos, 'fabricantes' => $fabricantes, 'productosConImagen' => $productosConImagen,
        ]);
    }
}
