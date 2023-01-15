<?php

namespace ContainerJKAXrON;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDocumentTargetGroupListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Targeting\EventListener\DocumentTargetGroupListener' shared autowired service.
     *
     * @return \Pimcore\Targeting\EventListener\DocumentTargetGroupListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Targeting/EventListener/DocumentTargetGroupListener.php';

        return $container->privates['Pimcore\\Targeting\\EventListener\\DocumentTargetGroupListener'] = new \Pimcore\Targeting\EventListener\DocumentTargetGroupListener(($container->services['Pimcore\\Http\\Request\\Resolver\\DocumentResolver'] ?? $container->getDocumentResolverService()), ($container->privates['Pimcore\\Targeting\\ActionHandler\\DelegatingActionHandler'] ?? $container->getDelegatingActionHandlerService()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
