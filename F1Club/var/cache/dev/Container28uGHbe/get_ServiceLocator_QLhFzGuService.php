<?php

namespace Container28uGHbe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QLhFzGuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QLhFzGu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QLhFzGu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'categoriaModule' => ['privates', 'App\\Module\\CategoriaModule', 'getCategoriaModuleService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'userPasswordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
        ], [
            'categoriaModule' => 'App\\Module\\CategoriaModule',
            'entityManager' => '?',
            'userPasswordHasher' => '?',
        ]);
    }
}