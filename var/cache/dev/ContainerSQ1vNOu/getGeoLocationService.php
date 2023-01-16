<?php

namespace ContainerSQ1vNOu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGeoLocationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Targeting\DataProvider\GeoLocation' shared autowired service.
     *
     * @return \Pimcore\Targeting\DataProvider\GeoLocation
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Targeting/DataProvider/DataProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Targeting/DataProvider/GeoLocation.php';

        return $container->privates['Pimcore\\Targeting\\DataProvider\\GeoLocation'] = new \Pimcore\Targeting\DataProvider\GeoLocation(($container->privates['Pimcore\\Targeting\\DataProvider\\GeoIp'] ?? $container->load('getGeoIpService')), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));
    }
}
