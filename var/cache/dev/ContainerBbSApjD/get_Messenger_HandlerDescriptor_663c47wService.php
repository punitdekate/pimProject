<?php

namespace ContainerBbSApjD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_663c47wService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.663c47w' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/BatchHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/BatchHandlerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Messenger/Handler/HandlerHelperTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Messenger/Handler/SearchBackendHandler.php';

        return $container->privates['.messenger.handler_descriptor.663c47w'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \Pimcore\Messenger\Handler\SearchBackendHandler(), []);
    }
}
