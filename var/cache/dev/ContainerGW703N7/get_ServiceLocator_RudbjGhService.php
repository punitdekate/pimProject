<?php

namespace ContainerGW703N7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RudbjGhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RudbjGh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RudbjGh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'pimcoreUsers' => ['privates', 'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\PimcoreUsers', 'getPimcoreUsersService', true],
        ], [
            'pimcoreUsers' => 'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\PimcoreUsers',
        ]);
    }
}
