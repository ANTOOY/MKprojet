<?php

namespace ContainerW71wptx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_T3sFFujService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.T3sFFuj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.T3sFFuj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'annoncesRepo' => ['privates', 'App\\Repository\\AnnoncesRepository', 'getAnnoncesRepositoryService', true],
        ], [
            'annoncesRepo' => 'App\\Repository\\AnnoncesRepository',
        ]);
    }
}