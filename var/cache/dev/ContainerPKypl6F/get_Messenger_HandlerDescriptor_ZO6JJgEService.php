<?php

namespace ContainerPKypl6F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_ZO6JJgEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.ZO6JJgE' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Messenger/Handler/GeneratePagePreviewHandler.php';

        return $container->privates['.messenger.handler_descriptor.ZO6JJgE'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \Pimcore\Messenger\Handler\GeneratePagePreviewHandler(($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService())), []);
    }
}
