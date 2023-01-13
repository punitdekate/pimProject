<?php

namespace ContainerQarLefx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssignTargetGroupService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Targeting\ActionHandler\AssignTargetGroup' shared autowired service.
     *
     * @return \Pimcore\Targeting\ActionHandler\AssignTargetGroup
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Targeting/ActionHandler/AssignTargetGroup.php';

        return $container->privates['Pimcore\\Targeting\\ActionHandler\\AssignTargetGroup'] = new \Pimcore\Targeting\ActionHandler\AssignTargetGroup(($container->privates['Pimcore\\Targeting\\ConditionMatcher'] ?? $container->getConditionMatcherService()), ($container->privates['Pimcore\\Targeting\\Storage\\CookieStorage'] ?? $container->getCookieStorageService()));
    }
}
