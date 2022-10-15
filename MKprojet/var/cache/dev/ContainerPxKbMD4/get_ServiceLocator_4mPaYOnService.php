<?php

namespace ContainerPxKbMD4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4mPaYOnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4mPaYOn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4mPaYOn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'invoice' => ['privates', '.errored..service_locator.4mPaYOn.App\\Entity\\Invoice', NULL, 'Cannot autowire service ".service_locator.4mPaYOn": it references class "App\\Entity\\Invoice" but no such service exists.'],
            'purchaseRepo' => ['privates', 'App\\Repository\\PurchaseRepository', 'getPurchaseRepositoryService', true],
        ], [
            'invoice' => 'App\\Entity\\Invoice',
            'purchaseRepo' => 'App\\Repository\\PurchaseRepository',
        ]);
    }
}
