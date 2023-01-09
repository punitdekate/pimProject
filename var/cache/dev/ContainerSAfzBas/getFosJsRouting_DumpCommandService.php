<?php

namespace ContainerSAfzBas;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosJsRouting_DumpCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'fos_js_routing.dump_command' shared service.
     *
     * @return \FOS\JsRoutingBundle\Command\DumpCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/jsrouting-bundle/Command/DumpCommand.php';

        $container->privates['fos_js_routing.dump_command'] = $instance = new \FOS\JsRoutingBundle\Command\DumpCommand(($container->services['fos_js_routing.extractor'] ?? $container->load('getFosJsRouting_ExtractorService')), ($container->services['fos_js_routing.serializer'] ?? $container->load('getFosJsRouting_SerializerService')), \dirname(__DIR__, 4), NULL);

        $instance->setName('fos:js-routing:dump');

        return $instance;
    }
}
