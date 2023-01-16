<?php

namespace ContainerGW703N7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVisitedPagesCountListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Targeting\EventListener\VisitedPagesCountListener' shared autowired service.
     *
     * @return \Pimcore\Targeting\EventListener\VisitedPagesCountListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Targeting/EventListener/VisitedPagesCountListener.php';

        return $container->privates['Pimcore\\Targeting\\EventListener\\VisitedPagesCountListener'] = new \Pimcore\Targeting\EventListener\VisitedPagesCountListener(($container->privates['Pimcore\\Targeting\\Service\\VisitedPagesCounter'] ?? $container->load('getVisitedPagesCounter2Service')));
    }
}
