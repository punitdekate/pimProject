<?php

namespace ContainerIvVzORK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_TokenCreatedListener_TwoFactor_PimcoreAdminService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authentication.token_created_listener.two_factor.pimcore_admin' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\Event\AuthenticationTokenListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Event/AuthenticationTokenListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/AuthenticationContextFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/AuthenticationContextFactory.php';

        return $container->privates['security.authentication.token_created_listener.two_factor.pimcore_admin'] = new \Scheb\TwoFactorBundle\Security\TwoFactor\Event\AuthenticationTokenListener('pimcore_admin', ($container->privates['scheb_two_factor.condition_handler'] ?? $container->load('getSchebTwoFactor_ConditionHandlerService')), new \Scheb\TwoFactorBundle\Security\TwoFactor\AuthenticationContextFactory('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\AuthenticationContext'), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
