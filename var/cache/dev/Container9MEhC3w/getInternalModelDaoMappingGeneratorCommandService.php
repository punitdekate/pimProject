<?php

namespace Container9MEhC3w;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInternalModelDaoMappingGeneratorCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'console.command.public_alias.Pimcore\Bundle\CoreBundle\Command\InternalModelDaoMappingGeneratorCommand' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\Command\InternalModelDaoMappingGeneratorCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Console/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/CoreBundle/Command/InternalModelDaoMappingGeneratorCommand.php';

        return $container->services['console.command.public_alias.Pimcore\\Bundle\\CoreBundle\\Command\\InternalModelDaoMappingGeneratorCommand'] = new \Pimcore\Bundle\CoreBundle\Command\InternalModelDaoMappingGeneratorCommand();
    }
}
