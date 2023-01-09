<?php

namespace ContainerQarLefx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcoreUsersControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\GDPR\PimcoreUsersController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\GDPR\PimcoreUsersController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Controller/DoubleAuthenticationControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Controller/AdminControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Controller/AdminController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/KernelControllerEventInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Controller/GDPR/PimcoreUsersController.php';

        $container->services['Pimcore\\Bundle\\AdminBundle\\Controller\\GDPR\\PimcoreUsersController'] = $instance = new \Pimcore\Bundle\AdminBundle\Controller\GDPR\PimcoreUsersController();

        $instance->setContainer(($container->privates['.service_locator.oafe0zm'] ?? $container->load('get_ServiceLocator_Oafe0zmService'))->withContext('Pimcore\\Bundle\\AdminBundle\\Controller\\GDPR\\PimcoreUsersController', $container));

        return $instance;
    }
}
