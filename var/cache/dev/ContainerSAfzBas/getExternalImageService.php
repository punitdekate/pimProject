<?php

namespace ContainerSAfzBas;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExternalImageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\DataObject\BlockDataMarshaller\ExternalImage' shared autowired service.
     *
     * @return \Pimcore\DataObject\BlockDataMarshaller\ExternalImage
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Marshaller/MarshallerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/BlockDataMarshaller/ExternalImage.php';

        return $container->services['Pimcore\\DataObject\\BlockDataMarshaller\\ExternalImage'] = new \Pimcore\DataObject\BlockDataMarshaller\ExternalImage();
    }
}
