<?php

namespace ContainerBbSApjD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Iq6MQcqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Iq6MQcq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Iq6MQcq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'assetsInstaller' => ['services', 'Pimcore\\Tool\\AssetsInstaller', 'getAssetsInstallerService', true],
            'cacheClearer' => ['services', 'Pimcore\\Cache\\Symfony\\CacheClearer', 'getCacheClearer2Service', true],
            'kernel' => ['services', 'kernel', 'getKernelService', false],
        ], [
            'assetsInstaller' => 'Pimcore\\Tool\\AssetsInstaller',
            'cacheClearer' => 'Pimcore\\Cache\\Symfony\\CacheClearer',
            'kernel' => '?',
        ]);
    }
}
