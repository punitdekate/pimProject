<?php

namespace ContainerMaymx7M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGridHelperServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\AdminBundle\Helper\GridHelperService' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Helper\GridHelperService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Helper/GridHelperService.php';

        return $container->privates['Pimcore\\Bundle\\AdminBundle\\Helper\\GridHelperService'] = new \Pimcore\Bundle\AdminBundle\Helper\GridHelperService();
    }
}
