<?php

namespace ContainerSAfzBas;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEditableUsageResolverService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Document\Editable\EditableUsageResolver' shared autowired service.
     *
     * @return \Pimcore\Document\Editable\EditableUsageResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Document/Editable/EditableUsageResolver.php';

        return $container->services['Pimcore\\Document\\Editable\\EditableUsageResolver'] = new \Pimcore\Document\Editable\EditableUsageResolver(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), ($container->services['Pimcore\\Document\\Renderer\\DocumentRenderer'] ?? $container->getDocumentRendererService()));
    }
}
