<?php

namespace ContainerWOwAeoc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIntlFormatterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Localization\IntlFormatter' shared autowired service.
     *
     * @return \Pimcore\Localization\IntlFormatter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Localization/IntlFormatter.php';

        return $container->services['Pimcore\\Localization\\IntlFormatter'] = new \Pimcore\Localization\IntlFormatter(($container->services['Pimcore\\Localization\\LocaleServiceInterface'] ?? $container->getLocaleServiceInterfaceService()));
    }
}
