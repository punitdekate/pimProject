<?php

namespace ContainerGW703N7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OepQe_KService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.OepQe.k' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OepQe.k'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'config' => ['services', 'Pimcore\\Config', 'getConfigService', false],
            'csrfProtection' => ['services', 'Pimcore\\Bundle\\AdminBundle\\Security\\CsrfProtectionHandler', 'getCsrfProtectionHandlerService', false],
            'kernel' => ['services', 'kernel', 'getKernelService', false],
            'maintenanceExecutor' => ['privates', 'Pimcore\\Maintenance\\Executor', 'getExecutorService', true],
            'siteConfigProvider' => ['privates', 'Pimcore\\Analytics\\Google\\Config\\SiteConfigProvider', 'getSiteConfigProviderService', true],
        ], [
            'config' => 'Pimcore\\Config',
            'csrfProtection' => 'Pimcore\\Bundle\\AdminBundle\\Security\\CsrfProtectionHandler',
            'kernel' => '?',
            'maintenanceExecutor' => 'Pimcore\\Maintenance\\Executor',
            'siteConfigProvider' => 'Pimcore\\Analytics\\Google\\Config\\SiteConfigProvider',
        ]);
    }
}
