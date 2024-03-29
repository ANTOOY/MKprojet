<?php

namespace ContainerW71wptx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1GR2ivrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1GR2ivr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1GR2ivr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'productRepo' => ['privates', 'App\\Repository\\AnnoncesRepository', 'getAnnoncesRepositoryService', true],
        ], [
            'productRepo' => 'App\\Repository\\AnnoncesRepository',
        ]);
    }
}
