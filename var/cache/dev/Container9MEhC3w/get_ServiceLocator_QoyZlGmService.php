<?php

namespace Container9MEhC3w;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QoyZlGmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qoyZlGm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qoyZlGm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'siteConfigProvider' => ['privates', 'Pimcore\\Analytics\\Google\\Config\\SiteConfigProvider', 'getSiteConfigProviderService', true],
        ], [
            'siteConfigProvider' => 'Pimcore\\Analytics\\Google\\Config\\SiteConfigProvider',
        ]);
    }
}
