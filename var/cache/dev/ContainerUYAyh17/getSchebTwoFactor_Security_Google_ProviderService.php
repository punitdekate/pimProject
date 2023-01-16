<?php

namespace ContainerUYAyh17;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchebTwoFactor_Security_Google_ProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'scheb_two_factor.security.google.provider' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\Google\GoogleAuthenticatorTwoFactorProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Provider/TwoFactorProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-google-authenticator/Security/TwoFactor/Provider/Google/GoogleAuthenticatorTwoFactorProvider.php';

        return $container->privates['scheb_two_factor.security.google.provider'] = new \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\Google\GoogleAuthenticatorTwoFactorProvider(($container->services['scheb_two_factor.security.google_authenticator'] ?? $container->load('getSchebTwoFactor_Security_GoogleAuthenticatorService')), ($container->privates['scheb_two_factor.security.google.default_form_renderer'] ?? $container->load('getSchebTwoFactor_Security_Google_DefaultFormRendererService')));
    }
}
