<?php

namespace ContainerW71wptx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_16CYUIJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.16CYUIJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.16CYUIJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categorie' => ['privates', '.errored..service_locator.16CYUIJ.App\\Entity\\Categories', NULL, 'Cannot autowire service ".service_locator.16CYUIJ": it references class "App\\Entity\\Categories" but no such service exists.'],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'categorie' => 'App\\Entity\\Categories',
            'doctrine' => '?',
        ]);
    }
}
