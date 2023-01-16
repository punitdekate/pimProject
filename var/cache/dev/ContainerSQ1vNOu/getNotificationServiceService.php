<?php

namespace ContainerSQ1vNOu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNotificationServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Model\Notification\Service\NotificationService' shared autowired service.
     *
     * @return \Pimcore\Model\Notification\Service\NotificationService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/models/Notification/Service/NotificationService.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/models/Notification/Service/UserService.php';

        return $container->services['Pimcore\\Model\\Notification\\Service\\NotificationService'] = new \Pimcore\Model\Notification\Service\NotificationService(($container->privates['Pimcore\\Model\\Notification\\Service\\UserService'] ?? ($container->privates['Pimcore\\Model\\Notification\\Service\\UserService'] = new \Pimcore\Model\Notification\Service\UserService())));
    }
}
