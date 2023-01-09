<?php

namespace ContainerSAfzBas;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KIsXnJ0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KIsXnJ0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KIsXnJ0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'service' => ['privates', 'Pimcore\\Model\\Notification\\Service\\UserService', 'getUserServiceService', true],
            'translator' => ['services', 'Symfony\\Contracts\\Translation\\TranslatorInterface', 'getTranslatorInterfaceService', false],
        ], [
            'service' => 'Pimcore\\Model\\Notification\\Service\\UserService',
            'translator' => '?',
        ]);
    }
}
