<?php

namespace ContainerIQw6xm6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getQuantityValueService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\DataObject\FielddefinitionMarshaller\Classificationstore\QuantityValue' shared autowired service.
     *
     * @return \Pimcore\DataObject\ClassificationstoreDataMarshaller\QuantityValue
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Marshaller/MarshallerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassificationstoreDataMarshaller/QuantityValue.php';

        return $container->services['Pimcore\\DataObject\\FielddefinitionMarshaller\\Classificationstore\\QuantityValue'] = new \Pimcore\DataObject\ClassificationstoreDataMarshaller\QuantityValue();
    }
}
