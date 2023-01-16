<?php

namespace ContainerMaymx7M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRedirectService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Targeting\ActionHandler\Redirect' shared autowired service.
     *
     * @return \Pimcore\Targeting\ActionHandler\Redirect
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Targeting/ActionHandler/Redirect.php';

        return $container->privates['Pimcore\\Targeting\\ActionHandler\\Redirect'] = new \Pimcore\Targeting\ActionHandler\Redirect();
    }
}
