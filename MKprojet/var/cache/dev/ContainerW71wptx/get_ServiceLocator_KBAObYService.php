<?php

namespace ContainerW71wptx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KBAObYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KB_aObY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KB_aObY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'annonRepo' => ['privates', 'App\\Repository\\AnnoncesRepository', 'getAnnoncesRepositoryService', true],
        ], [
            'annonRepo' => 'App\\Repository\\AnnoncesRepository',
        ]);
    }
}
