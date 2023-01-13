<?php

namespace ContainerQarLefx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcore_Document_Newsletter_Factory_CsvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'pimcore.document.newsletter.factory.csv' shared autowired service.
     *
     * @return \Pimcore\Document\Newsletter\DefaultAddressSourceAdapterFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Document/Newsletter/AddressSourceAdapterFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Document/Newsletter/DefaultAddressSourceAdapterFactory.php';

        return $container->privates['pimcore.document.newsletter.factory.csv'] = new \Pimcore\Document\Newsletter\DefaultAddressSourceAdapterFactory('Pimcore\\Document\\Newsletter\\AddressSourceAdapter\\CsvList');
    }
}
