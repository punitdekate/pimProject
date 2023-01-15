<?php

namespace ContainerJKAXrON;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getService2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\DataObject\Consent\Service' shared autowired service.
     *
     * @return \Pimcore\DataObject\Consent\Service
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/Consent/Service.php';

        return $container->services['Pimcore\\DataObject\\Consent\\Service'] = new \Pimcore\DataObject\Consent\Service();
    }
}
