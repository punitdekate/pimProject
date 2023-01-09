<?php

namespace ContainerQarLefx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLongRunningHelperService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Helper\LongRunningHelper' shared autowired service.
     *
     * @return \Pimcore\Helper\LongRunningHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Helper/LongRunningHelper.php';

        $container->services['Pimcore\\Helper\\LongRunningHelper'] = $instance = new \Pimcore\Helper\LongRunningHelper(($container->services['doctrine'] ?? $container->getDoctrineService()));

        $instance->setLogger(($container->services['monolog.logger.pimcore'] ?? $container->load('getMonolog_Logger_PimcoreService')));

        return $instance;
    }
}
