<?php

namespace ContainerMaymx7M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWorkflowDumpCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\CoreBundle\Command\WorkflowDumpCommand' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\Command\WorkflowDumpCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Console/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/CoreBundle/Command/WorkflowDumpCommand.php';

        $container->privates['Pimcore\\Bundle\\CoreBundle\\Command\\WorkflowDumpCommand'] = $instance = new \Pimcore\Bundle\CoreBundle\Command\WorkflowDumpCommand();

        $instance->setName('pimcore:workflow:dump');

        return $instance;
    }
}
