<?php

namespace ContainerMReH5Jj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCarritoControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Shop\CarritoController' shared autowired service.
     *
     * @return \App\Controller\Shop\CarritoController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Shop/CarritoController.php';

        $container->services['App\\Controller\\Shop\\CarritoController'] = $instance = new \App\Controller\Shop\CarritoController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\Shop\\CarritoController', $container));

        return $instance;
    }
}