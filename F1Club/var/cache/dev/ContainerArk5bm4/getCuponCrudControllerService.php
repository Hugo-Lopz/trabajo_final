<?php

namespace ContainerArk5bm4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCuponCrudControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\CuponCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\CuponCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/AbstractCrudController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/CuponCrudController.php';

        $container->services['App\\Controller\\Admin\\CuponCrudController'] = $instance = new \App\Controller\Admin\CuponCrudController();

        $instance->setContainer(($container->privates['.service_locator.ZP92gqz'] ?? $container->load('get_ServiceLocator_ZP92gqzService'))->withContext('App\\Controller\\Admin\\CuponCrudController', $container));

        return $instance;
    }
}