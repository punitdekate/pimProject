<?php

namespace ContainerSQ1vNOu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServicesResetterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'services_resetter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DependencyInjection/ServicesResetter.php';

        return $container->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () use ($container) {
            if (isset($container->services['cache.app'])) {
                yield 'cache.app' => ($container->services['cache.app'] ?? null);
            }
            if (isset($container->services['cache.system'])) {
                yield 'cache.system' => ($container->services['cache.system'] ?? null);
            }
            if (isset($container->privates['cache.validator'])) {
                yield 'cache.validator' => ($container->privates['cache.validator'] ?? null);
            }
            if (isset($container->privates['cache.serializer'])) {
                yield 'cache.serializer' => ($container->privates['cache.serializer'] ?? null);
            }
            if (isset($container->privates['cache.annotations'])) {
                yield 'cache.annotations' => ($container->privates['cache.annotations'] ?? null);
            }
            if (isset($container->privates['cache.property_info'])) {
                yield 'cache.property_info' => ($container->privates['cache.property_info'] ?? null);
            }
            if (isset($container->privates['cache.messenger.restart_workers_signal'])) {
                yield 'cache.messenger.restart_workers_signal' => ($container->privates['cache.messenger.restart_workers_signal'] ?? null);
            }
            if (isset($container->privates['.debug.http_client'])) {
                yield 'http_client' => ($container->privates['.debug.http_client'] ?? null);
            }
            if (isset($container->privates['mailer.message_logger_listener'])) {
                yield 'mailer.message_logger_listener' => ($container->privates['mailer.message_logger_listener'] ?? null);
            }
            if (isset($container->privates['debug.stopwatch'])) {
                yield 'debug.stopwatch' => ($container->privates['debug.stopwatch'] ?? null);
            }
            if (isset($container->services['event_dispatcher'])) {
                yield 'debug.event_dispatcher' => ($container->services['event_dispatcher'] ?? null);
            }
            if (isset($container->privates['cache.rate_limiter'])) {
                yield 'cache.rate_limiter' => ($container->privates['cache.rate_limiter'] ?? null);
            }
            if (isset($container->services['Symfony\\Component\\HttpKernel\\EventListener\\SessionListener'])) {
                yield 'session_listener' => ($container->services['Symfony\\Component\\HttpKernel\\EventListener\\SessionListener'] ?? null);
            }
            if (isset($container->privates['form.choice_list_factory.cached'])) {
                yield 'form.choice_list_factory.cached' => ($container->privates['form.choice_list_factory.cached'] ?? null);
            }
            if (isset($container->services['cache.validator_expression_language'])) {
                yield 'cache.validator_expression_language' => ($container->services['cache.validator_expression_language'] ?? null);
            }
            if (isset($container->privates['messenger.transport.in_memory.factory'])) {
                yield 'messenger.transport.in_memory.factory' => ($container->privates['messenger.transport.in_memory.factory'] ?? null);
            }
            if (isset($container->services['.container.private.profiler'])) {
                yield 'profiler' => ($container->services['.container.private.profiler'] ?? null);
            }
            if (isset($container->services['.container.private.validator'])) {
                yield 'debug.validator' => ($container->services['.container.private.validator'] ?? null);
            }
            if (isset($container->services['.container.private.security.token_storage'])) {
                yield 'security.token_storage' => ($container->services['.container.private.security.token_storage'] ?? null);
            }
            if (isset($container->privates['cache.security_expression_language'])) {
                yield 'cache.security_expression_language' => ($container->privates['cache.security_expression_language'] ?? null);
            }
            if (isset($container->privates['twig.form.engine'])) {
                yield 'twig.form.engine' => ($container->privates['twig.form.engine'] ?? null);
            }
            if (isset($container->privates['monolog.handler.main'])) {
                yield 'monolog.handler.main' => ($container->privates['monolog.handler.main'] ?? null);
            }
            if (isset($container->privates['monolog.handler.console'])) {
                yield 'monolog.handler.console' => ($container->privates['monolog.handler.console'] ?? null);
            }
            if (isset($container->services['doctrine'])) {
                yield 'doctrine' => ($container->services['doctrine'] ?? null);
            }
            if (isset($container->services['Pimcore\\Log\\Handler\\ApplicationLoggerDb'])) {
                yield 'Pimcore\\Log\\Handler\\ApplicationLoggerDb' => ($container->services['Pimcore\\Log\\Handler\\ApplicationLoggerDb'] ?? null);
            }
            if (isset($container->privates['Pimcore\\Bundle\\CoreBundle\\DataCollector\\PimcoreDataCollector'])) {
                yield 'Pimcore\\Bundle\\CoreBundle\\DataCollector\\PimcoreDataCollector' => ($container->privates['Pimcore\\Bundle\\CoreBundle\\DataCollector\\PimcoreDataCollector'] ?? null);
            }
            if (isset($container->privates['Pimcore\\Bundle\\CoreBundle\\DataCollector\\PimcoreTargetingDataCollector'])) {
                yield 'Pimcore\\Bundle\\CoreBundle\\DataCollector\\PimcoreTargetingDataCollector' => ($container->privates['Pimcore\\Bundle\\CoreBundle\\DataCollector\\PimcoreTargetingDataCollector'] ?? null);
            }
            if (isset($container->services['pimcore.cache.adapter.null_tag_aware'])) {
                yield 'pimcore.cache.adapter.null_tag_aware' => ($container->services['pimcore.cache.adapter.null_tag_aware'] ?? null);
            }
            if (isset($container->privates['pimcore.cache.adapter.doctrine_dbal'])) {
                yield 'pimcore.cache.adapter.doctrine_dbal' => ($container->privates['pimcore.cache.adapter.doctrine_dbal'] ?? null);
            }
            if (isset($container->services['pimcore.cache.pool'])) {
                yield 'pimcore.cache.adapter.doctrine_dbal_tag_aware' => ($container->services['pimcore.cache.pool'] ?? null);
            }
            if (false) {
                yield 'pimcore.cache.adapter.pdo' => null;
            }
            if (false) {
                yield 'pimcore.cache.adapter.pdo_tag_aware' => null;
            }
            if (isset($container->privates['pimcore.cache.adapter.redis_tag_aware'])) {
                yield 'pimcore.cache.adapter.redis_tag_aware' => ($container->privates['pimcore.cache.adapter.redis_tag_aware'] ?? null);
            }
            if (false) {
                yield 'pimcore.cache.pool.app' => null;
            }
            if (isset($container->privates['.debug.http_client'])) {
                yield '.debug.http_client' => ($container->privates['.debug.http_client'] ?? null);
            }
        }, function () use ($container) {
            return 0 + (int) (isset($container->services['cache.app'])) + (int) (isset($container->services['cache.system'])) + (int) (isset($container->privates['cache.validator'])) + (int) (isset($container->privates['cache.serializer'])) + (int) (isset($container->privates['cache.annotations'])) + (int) (isset($container->privates['cache.property_info'])) + (int) (isset($container->privates['cache.messenger.restart_workers_signal'])) + (int) (isset($container->privates['.debug.http_client'])) + (int) (isset($container->privates['mailer.message_logger_listener'])) + (int) (isset($container->privates['debug.stopwatch'])) + (int) (isset($container->services['event_dispatcher'])) + (int) (isset($container->privates['cache.rate_limiter'])) + (int) (isset($container->services['Symfony\\Component\\HttpKernel\\EventListener\\SessionListener'])) + (int) (isset($container->privates['form.choice_list_factory.cached'])) + (int) (isset($container->services['cache.validator_expression_language'])) + (int) (isset($container->privates['messenger.transport.in_memory.factory'])) + (int) (isset($container->services['.container.private.profiler'])) + (int) (isset($container->services['.container.private.validator'])) + (int) (isset($container->services['.container.private.security.token_storage'])) + (int) (isset($container->privates['cache.security_expression_language'])) + (int) (isset($container->privates['twig.form.engine'])) + (int) (isset($container->privates['monolog.handler.main'])) + (int) (isset($container->privates['monolog.handler.console'])) + (int) (isset($container->services['doctrine'])) + (int) (isset($container->services['Pimcore\\Log\\Handler\\ApplicationLoggerDb'])) + (int) (isset($container->privates['Pimcore\\Bundle\\CoreBundle\\DataCollector\\PimcoreDataCollector'])) + (int) (isset($container->privates['Pimcore\\Bundle\\CoreBundle\\DataCollector\\PimcoreTargetingDataCollector'])) + (int) (isset($container->services['pimcore.cache.adapter.null_tag_aware'])) + (int) (isset($container->privates['pimcore.cache.adapter.doctrine_dbal'])) + (int) (isset($container->services['pimcore.cache.pool'])) + (int) (false) + (int) (false) + (int) (isset($container->privates['pimcore.cache.adapter.redis_tag_aware'])) + (int) (false) + (int) (isset($container->privates['.debug.http_client']));
        }), ['cache.app' => [0 => 'reset'], 'cache.system' => [0 => 'reset'], 'cache.validator' => [0 => 'reset'], 'cache.serializer' => [0 => 'reset'], 'cache.annotations' => [0 => 'reset'], 'cache.property_info' => [0 => 'reset'], 'cache.messenger.restart_workers_signal' => [0 => 'reset'], 'http_client' => [0 => '?reset'], 'mailer.message_logger_listener' => [0 => 'reset'], 'debug.stopwatch' => [0 => 'reset'], 'debug.event_dispatcher' => [0 => 'reset'], 'cache.rate_limiter' => [0 => 'reset'], 'session_listener' => [0 => 'reset'], 'form.choice_list_factory.cached' => [0 => 'reset'], 'cache.validator_expression_language' => [0 => 'reset'], 'messenger.transport.in_memory.factory' => [0 => 'reset'], 'profiler' => [0 => 'reset'], 'debug.validator' => [0 => 'reset'], 'security.token_storage' => [0 => 'disableUsageTracking', 1 => 'setToken'], 'cache.security_expression_language' => [0 => 'reset'], 'twig.form.engine' => [0 => 'reset'], 'monolog.handler.main' => [0 => 'reset'], 'monolog.handler.console' => [0 => 'reset'], 'doctrine' => [0 => 'reset'], 'Pimcore\\Log\\Handler\\ApplicationLoggerDb' => [0 => 'reset'], 'Pimcore\\Bundle\\CoreBundle\\DataCollector\\PimcoreDataCollector' => [0 => 'reset'], 'Pimcore\\Bundle\\CoreBundle\\DataCollector\\PimcoreTargetingDataCollector' => [0 => 'reset'], 'pimcore.cache.adapter.null_tag_aware' => [0 => 'reset'], 'pimcore.cache.adapter.doctrine_dbal' => [0 => 'reset'], 'pimcore.cache.adapter.doctrine_dbal_tag_aware' => [0 => 'reset'], 'pimcore.cache.adapter.pdo' => [0 => 'reset'], 'pimcore.cache.adapter.pdo_tag_aware' => [0 => 'reset'], 'pimcore.cache.adapter.redis_tag_aware' => [0 => 'reset'], 'pimcore.cache.pool.app' => [0 => 'reset'], '.debug.http_client' => [0 => 'reset']]);
    }
}
