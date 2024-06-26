<?php

namespace ContainerLrhp6b5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ji3cMwTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Ji3cMwT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Ji3cMwT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'lineaPedidoRepository' => ['privates', 'App\\Repository\\LineaPedidoRepository', 'getLineaPedidoRepositoryService', true],
            'pedidoRepository' => ['privates', 'App\\Repository\\PedidoRepository', 'getPedidoRepositoryService', true],
        ], [
            'lineaPedidoRepository' => 'App\\Repository\\LineaPedidoRepository',
            'pedidoRepository' => 'App\\Repository\\PedidoRepository',
        ]);
    }
}
