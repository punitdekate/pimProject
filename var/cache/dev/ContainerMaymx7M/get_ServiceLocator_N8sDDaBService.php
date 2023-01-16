<?php

namespace ContainerMaymx7M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_N8sDDaBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.N8sDDaB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.N8sDDaB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'config' => ['services', 'Pimcore\\Config', 'getConfigService', false],
        ], [
            'config' => 'Pimcore\\Config',
        ]);
    }
}
