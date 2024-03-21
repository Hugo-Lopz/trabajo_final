<?php

namespace App\Controller\Admin;

use App\Entity\Cupon;
use App\Entity\Decada;
use App\Entity\Descuento;
use App\Entity\Equipo;
use App\Entity\Escala;
use App\Entity\Fabricante;
use App\Entity\Imagen;
use App\Entity\MetodoDePago;
use App\Entity\Pedido;
use App\Entity\Producto;
use App\Entity\Usuario;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{   
    public function __construct(private LoggerInterface $loggerInterface) 
    {
        
    }

    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $usuario = $this->getUser();
        if ($usuario instanceof Usuario) {
            $id = $usuario->getId();
            $nombre = $usuario->getNombre();
            $apellidos = $usuario->getApellidos();
            $roles = $usuario->getRoles();
        }

        $this->loggerInterface->info('El usuario {nombre} {apellidos} con ID {id} y los roles {roles} se ha logeado para hacer cambios', [
            'id' => $id,
            'nombre' => $nombre,
            'apellidos' => $apellidos,
            'roles' => $roles
        ]);
        return $this -> render('admin/admin.html.twig', [
        ]);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('ProyectoServidor');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::section('Administración y gestión del usuario');
        yield MenuItem::linkToCrud('Usuarios', 'fas fa-list', Usuario::class);
        yield MenuItem::linkToCrud('Pedidos', 'fas fa-list', Pedido::class);
        yield MenuItem::section('Administración y gestión de la tienda');
        yield MenuItem::linkToCrud('Cupones', 'fas fa-list', Cupon::class);
        yield MenuItem::linkToCrud('Descuentos', 'fas fa-list', Descuento::class);
        yield MenuItem::linkToCrud('Fabricantes', 'fas fa-list', Fabricante::class);
        yield MenuItem::linkToCrud('Equipos', 'fas fa-list', Equipo::class);
        yield MenuItem::linkToCrud('Escalas', 'fas fa-list', Escala::class);
        yield MenuItem::linkToCrud('Imagenes', 'fas fa-list', Imagen::class);
        yield MenuItem::linkToCrud('Productos', 'fas fa-list', Producto::class);
        yield MenuItem::linkToCrud('Métodos de pago', 'fas fa-list', MetodoDePago::class);
    }
}
