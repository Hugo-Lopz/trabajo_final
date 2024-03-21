<?php

namespace ContainerVYaLtsZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getManagerControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Manager\ManagerController' shared autowired service.
     *
     * @return \App\Controller\Manager\ManagerController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Manager/ManagerController.php';

        $container->services['App\\Controller\\Manager\\ManagerController'] = $instance = new \App\Controller\Manager\ManagerController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\Manager\\ManagerController', $container));

        return $instance;
    }
}
