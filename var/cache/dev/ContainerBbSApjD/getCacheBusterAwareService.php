<?php

namespace ContainerBbSApjD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCacheBusterAwareService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Twig\Extension\Templating\Placeholder\CacheBusterAware' shared autowired service.
     *
     * @return \Pimcore\Twig\Extension\Templating\Placeholder\CacheBusterAware
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['Pimcore\\Twig\\Extension\\Templating\\Placeholder\\CacheBusterAware'] = new \Pimcore\Twig\Extension\Templating\Placeholder\CacheBusterAware(($container->privates['Pimcore\\Twig\\Extension\\Templating\\Placeholder\\ContainerService'] ?? ($container->privates['Pimcore\\Twig\\Extension\\Templating\\Placeholder\\ContainerService'] = new \Pimcore\Twig\Extension\Templating\Placeholder\ContainerService())));
    }
}
