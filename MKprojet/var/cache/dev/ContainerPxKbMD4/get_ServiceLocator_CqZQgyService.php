<?php

namespace ContainerPxKbMD4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CqZQgyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._cqZQgy' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._cqZQgy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'invoice' => ['privates', '.errored..service_locator._cqZQgy.App\\Entity\\Invoice', NULL, 'Cannot autowire service ".service_locator._cqZQgy": it references class "App\\Entity\\Invoice" but no such service exists.'],
        ], [
            'invoice' => 'App\\Entity\\Invoice',
        ]);
    }
}
