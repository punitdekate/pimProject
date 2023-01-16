<?php

namespace ContainerSQ1vNOu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getManager2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\AdminBundle\GDPR\DataProvider\Manager' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\GDPR\DataProvider\Manager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/GDPR/DataProvider/Manager.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DependencyInjection/CollectionServiceLocator.php';

        return $container->privates['Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\Manager'] = new \Pimcore\Bundle\AdminBundle\GDPR\DataProvider\Manager(new \Pimcore\DependencyInjection\CollectionServiceLocator(['Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\Assets' => function () use ($container) {
            return ($container->privates['Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\Assets'] ?? $container->load('getAssetsService'));
        }, 'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\DataObjects' => function () use ($container) {
            return ($container->privates['Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\DataObjects'] ?? $container->load('getDataObjectsService'));
        }, 'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\PimcoreUsers' => function () use ($container) {
            return ($container->privates['Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\PimcoreUsers'] ?? $container->load('getPimcoreUsersService'));
        }, 'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\SentMail' => function () use ($container) {
            return ($container->privates['Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\SentMail'] ?? ($container->privates['Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\SentMail'] = new \Pimcore\Bundle\AdminBundle\GDPR\DataProvider\SentMail()));
        }]));
    }
}
