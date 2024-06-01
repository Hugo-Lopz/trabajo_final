<?php

namespace ContainerArk5bm4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Nog44rTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Nog44rT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Nog44rT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'categoriaModule' => ['privates', 'App\\Module\\CategoriaModule', 'getCategoriaModuleService', true],
            'fabricanteRepository' => ['privates', 'App\\Repository\\FabricanteRepository', 'getFabricanteRepositoryService', true],
            'productoImagenModule' => ['privates', 'App\\Module\\ProductoImagenModule', 'getProductoImagenModuleService', true],
            'productoRepository' => ['privates', 'App\\Repository\\ProductoRepository', 'getProductoRepositoryService', true],
        ], [
            'categoriaModule' => 'App\\Module\\CategoriaModule',
            'fabricanteRepository' => 'App\\Repository\\FabricanteRepository',
            'productoImagenModule' => 'App\\Module\\ProductoImagenModule',
            'productoRepository' => 'App\\Repository\\ProductoRepository',
        ]);
    }
}