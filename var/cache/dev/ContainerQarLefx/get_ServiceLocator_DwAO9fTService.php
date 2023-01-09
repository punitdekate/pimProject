<?php

namespace ContainerQarLefx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DwAO9fTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DwAO9fT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DwAO9fT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'config' => ['services', 'Pimcore\\Config', 'getConfigService', false],
            'csrfProtection' => ['services', 'Pimcore\\Bundle\\AdminBundle\\Security\\CsrfProtectionHandler', 'getCsrfProtectionHandlerService', false],
            'eventDispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
        ], [
            'config' => 'Pimcore\\Config',
            'csrfProtection' => 'Pimcore\\Bundle\\AdminBundle\\Security\\CsrfProtectionHandler',
            'eventDispatcher' => '?',
        ]);
    }
}
