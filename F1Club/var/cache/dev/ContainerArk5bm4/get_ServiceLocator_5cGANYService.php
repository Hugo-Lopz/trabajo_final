<?php

namespace ContainerArk5bm4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5cGANYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5c_GANY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5c_GANY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'categoriaModule' => ['privates', 'App\\Module\\CategoriaModule', 'getCategoriaModuleService', true],
            'productoRepository' => ['privates', 'App\\Repository\\ProductoRepository', 'getProductoRepositoryService', true],
        ], [
            'categoriaModule' => 'App\\Module\\CategoriaModule',
            'productoRepository' => 'App\\Repository\\ProductoRepository',
        ]);
    }
}