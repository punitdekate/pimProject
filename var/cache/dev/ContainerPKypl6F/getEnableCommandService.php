<?php

namespace ContainerPKypl6F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEnableCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\CoreBundle\Command\Bundle\EnableCommand' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\Command\Bundle\EnableCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Console/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/CoreBundle/Command/Bundle/AbstractBundleCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/CoreBundle/Command/Bundle/EnableCommand.php';

        $container->privates['Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\EnableCommand'] = $instance = new \Pimcore\Bundle\CoreBundle\Command\Bundle\EnableCommand(($container->services['Pimcore\\Extension\\Bundle\\PimcoreBundleManager'] ?? $container->getPimcoreBundleManagerService()), ($container->privates['Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\Helper\\PostStateChange'] ?? $container->load('getPostStateChangeService')));

        $instance->setName('pimcore:bundle:enable');

        return $instance;
    }
}
