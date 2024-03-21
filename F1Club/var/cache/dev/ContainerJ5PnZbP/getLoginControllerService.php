<?php

namespace ContainerJ5PnZbP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoginControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\User\LoginController' shared autowired service.
     *
     * @return \App\Controller\User\LoginController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/User/LoginController.php';

        $container->services['App\\Controller\\User\\LoginController'] = $instance = new \App\Controller\User\LoginController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\User\\LoginController', $container));

        return $instance;
    }
}
