<?php

namespace ContainerJ5PnZbP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoriaControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Shop\CategoriaController' shared autowired service.
     *
     * @return \App\Controller\Shop\CategoriaController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Shop/CategoriaController.php';

        $container->services['App\\Controller\\Shop\\CategoriaController'] = $instance = new \App\Controller\Shop\CategoriaController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\Shop\\CategoriaController', $container));

        return $instance;
    }
}
