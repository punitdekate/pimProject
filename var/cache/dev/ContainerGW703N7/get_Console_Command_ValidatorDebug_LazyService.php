<?php

namespace ContainerGW703N7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_ValidatorDebug_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.validator_debug.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.console.command.validator_debug.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('debug:validator', [], 'Display validation constraints for classes', false, function () use ($container): \Symfony\Component\Validator\Command\DebugCommand {
            return ($container->privates['console.command.validator_debug'] ?? $container->load('getConsole_Command_ValidatorDebugService'));
        });
    }
}
