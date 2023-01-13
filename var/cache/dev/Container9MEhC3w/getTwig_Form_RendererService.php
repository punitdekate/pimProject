<?php

namespace Container9MEhC3w;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_Form_RendererService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'twig.form.renderer' shared service.
     *
     * @return \Symfony\Component\Form\FormRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRenderer.php';

        return $container->privates['twig.form.renderer'] = new \Symfony\Component\Form\FormRenderer(($container->privates['twig.form.engine'] ?? $container->load('getTwig_Form_EngineService')), ($container->services['.container.private.security.csrf.token_manager'] ?? $container->load('get_Container_Private_Security_Csrf_TokenManagerService')));
    }
}
