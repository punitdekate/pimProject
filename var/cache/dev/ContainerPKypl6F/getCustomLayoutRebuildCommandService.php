<?php

namespace ContainerPKypl6F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCustomLayoutRebuildCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\CoreBundle\Command\CustomLayoutRebuildCommand' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\Command\CustomLayoutRebuildCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Console/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/CoreBundle/Command/CustomLayoutRebuildCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Model/DataObject/ClassDefinition/ClassLayoutDefinitionManager.php';

        $container->privates['Pimcore\\Bundle\\CoreBundle\\Command\\CustomLayoutRebuildCommand'] = $instance = new \Pimcore\Bundle\CoreBundle\Command\CustomLayoutRebuildCommand();

        $instance->setClassLayoutDefinitionManager(($container->services['Pimcore\\Model\\DataObject\\ClassDefinition\\ClassLayoutDefinitionManager'] ?? ($container->services['Pimcore\\Model\\DataObject\\ClassDefinition\\ClassLayoutDefinitionManager'] = new \Pimcore\Model\DataObject\ClassDefinition\ClassLayoutDefinitionManager())));
        $instance->setName('pimcore:deployment:custom-layouts-rebuild');

        return $instance;
    }
}
