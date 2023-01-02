<?php

namespace ContainerUYAyh17;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrestaSitemap_Eventlistener_RouteAnnotationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'presta_sitemap.eventlistener.route_annotation' shared service.
     *
     * @return \Presta\SitemapBundle\EventListener\RouteAnnotationEventListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/presta/sitemap-bundle/src/EventListener/RouteAnnotationEventListener.php';

        return $container->privates['presta_sitemap.eventlistener.route_annotation'] = new \Presta\SitemapBundle\EventListener\RouteAnnotationEventListener(($container->services['router'] ?? $container->getRouterService()), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), 'default');
    }
}
