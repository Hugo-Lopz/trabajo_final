<?php

namespace ContainerZQc2NHo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Gu7DLi4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gu7DLi4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gu7DLi4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'categoriaModuCategoriaModule' => ['privates', 'App\\Module\\CategoriaModule', 'getCategoriaModuleService', true],
            'lineaPedidoRepository' => ['privates', 'App\\Repository\\LineaPedidoRepository', 'getLineaPedidoRepositoryService', true],
            'productoRepository' => ['privates', 'App\\Repository\\ProductoRepository', 'getProductoRepositoryService', true],
        ], [
            'categoriaModuCategoriaModule' => 'App\\Module\\CategoriaModule',
            'lineaPedidoRepository' => 'App\\Repository\\LineaPedidoRepository',
            'productoRepository' => 'App\\Repository\\ProductoRepository',
        ]);
    }
}
