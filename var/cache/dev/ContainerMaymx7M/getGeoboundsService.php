<?php

namespace ContainerMaymx7M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGeoboundsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\DataObject\BlockDataMarshaller\Geobounds' shared autowired service.
     *
     * @return \Pimcore\DataObject\BlockDataMarshaller\Geobounds
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Marshaller/MarshallerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/BlockDataMarshaller/Geobounds.php';

        return $container->services['Pimcore\\DataObject\\BlockDataMarshaller\\Geobounds'] = new \Pimcore\DataObject\BlockDataMarshaller\Geobounds();
    }
}
