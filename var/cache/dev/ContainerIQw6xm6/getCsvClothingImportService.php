<?php

namespace ContainerIQw6xm6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCsvClothingImportService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'console.command.public_alias.App\Command\csvClothingImport' shared autowired service.
     *
     * @return \App\Command\csvClothingImport
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Console/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/src/Command/csvClothingImport.php';

        return $container->services['console.command.public_alias.App\\Command\\csvClothingImport'] = new \App\Command\csvClothingImport();
    }
}
