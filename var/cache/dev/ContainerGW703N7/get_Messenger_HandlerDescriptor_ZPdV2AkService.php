<?php

namespace ContainerGW703N7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_ZPdV2AkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.ZPdV2Ak' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/BatchHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/BatchHandlerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Messenger/Handler/HandlerHelperTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Messenger/Handler/CleanupThumbnailsHandler.php';

        return $container->privates['.messenger.handler_descriptor.ZPdV2Ak'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \Pimcore\Messenger\Handler\CleanupThumbnailsHandler(), []);
    }
}
