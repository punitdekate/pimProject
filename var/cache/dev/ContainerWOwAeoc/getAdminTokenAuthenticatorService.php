<?php

namespace ContainerWOwAeoc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminTokenAuthenticatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\AdminBundle\Security\Authenticator\AdminTokenAuthenticator' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Security\Authenticator\AdminTokenAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AbstractAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Security/Authenticator/AdminAbstractAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Security/Authenticator/AdminTokenAuthenticator.php';

        $container->privates['Pimcore\\Bundle\\AdminBundle\\Security\\Authenticator\\AdminTokenAuthenticator'] = $instance = new \Pimcore\Bundle\AdminBundle\Security\Authenticator\AdminTokenAuthenticator(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->services['router'] ?? $container->getRouterService()), ($container->services['Symfony\\Contracts\\Translation\\TranslatorInterface'] ?? $container->getTranslatorInterfaceService()));

        $a = ($container->services['monolog.logger.security'] ?? $container->getMonolog_Logger_SecurityService());

        $instance->setLogger($a);
        $instance->setLogger($a);

        return $instance;
    }
}
