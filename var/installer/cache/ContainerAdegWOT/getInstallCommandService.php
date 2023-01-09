<?php

namespace ContainerAdegWOT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInstallCommandService extends Pimcore_Bundle_InstallBundle_InstallerKernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Bundle\InstallBundle\Command\InstallCommand' shared autowired service.
     *
     * @return \Pimcore\Bundle\InstallBundle\Command\InstallCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/InstallBundle/Command/InstallCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/InstallBundle/Installer.php';

        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        return $container->services['Pimcore\\Bundle\\InstallBundle\\Command\\InstallCommand'] = new \Pimcore\Bundle\InstallBundle\Command\InstallCommand(new \Pimcore\Bundle\InstallBundle\Installer(($container->privates['monolog.logger'] ?? $container->load('getMonolog_LoggerService')), $a), $a);
    }
}
