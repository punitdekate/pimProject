<?php

namespace ContainerWOwAeoc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExporterInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Translation\ExportService\Exporter\ExporterInterface' shared autowired service.
     *
     * @return \Pimcore\Translation\ExportService\Exporter\Xliff12Exporter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Translation/ExportService/Exporter/ExporterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Translation/ExportService/Exporter/Xliff12Exporter.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Translation/Escaper/Xliff12Escaper.php';

        return $container->privates['Pimcore\\Translation\\ExportService\\Exporter\\ExporterInterface'] = new \Pimcore\Translation\ExportService\Exporter\Xliff12Exporter(($container->privates['Pimcore\\Translation\\Escaper\\Xliff12Escaper'] ?? ($container->privates['Pimcore\\Translation\\Escaper\\Xliff12Escaper'] = new \Pimcore\Translation\Escaper\Xliff12Escaper())));
    }
}
