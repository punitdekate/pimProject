<?php

namespace ContainerWOwAeoc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_MessengerDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.messenger_debug' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Command/DebugCommand.php';

        $container->privates['console.command.messenger_debug'] = $instance = new \Symfony\Component\Messenger\Command\DebugCommand(['messenger.bus.pimcore-core' => ['Symfony\\Component\\Mailer\\Messenger\\SendEmailMessage' => [0 => [0 => 'mailer.messenger.message_handler', 1 => []]], 'Symfony\\Component\\Notifier\\Message\\ChatMessage' => [0 => [0 => 'chatter.messenger.chat_handler', 1 => []]], 'Symfony\\Component\\Notifier\\Message\\SmsMessage' => [0 => [0 => 'texter.messenger.sms_handler', 1 => []]], 'Symfony\\Component\\Notifier\\Message\\PushMessage' => [0 => [0 => 'texter.messenger.push_handler', 1 => []]], 'Presta\\SitemapBundle\\Messenger\\DumpSitemapMessage' => [0 => [0 => 'presta_sitemap.messenger.message_handler', 1 => []]], 'Pimcore\\Messenger\\SendNewsletterMessage' => [0 => [0 => 'Pimcore\\Messenger\\Handler\\SendNewsletterHandler', 1 => []]], 'Pimcore\\Messenger\\VideoConvertMessage' => [0 => [0 => 'Pimcore\\Messenger\\Handler\\VideoConvertHandler', 1 => []]], 'Pimcore\\Messenger\\CleanupThumbnailsMessage' => [0 => [0 => 'Pimcore\\Messenger\\Handler\\CleanupThumbnailsHandler', 1 => []]], 'Pimcore\\Messenger\\AssetUpdateTasksMessage' => [0 => [0 => 'Pimcore\\Messenger\\Handler\\AssetUpdateTasksHandler', 1 => []]], 'Pimcore\\Messenger\\AssetPreviewImageMessage' => [0 => [0 => 'Pimcore\\Messenger\\Handler\\AssetPreviewImageHandler', 1 => []]], 'Pimcore\\Messenger\\MaintenanceTaskMessage' => [0 => [0 => 'Pimcore\\Messenger\\Handler\\MaintenanceTaskHandler', 1 => []]], 'Pimcore\\Messenger\\SearchBackendMessage' => [0 => [0 => 'Pimcore\\Messenger\\Handler\\SearchBackendHandler', 1 => []]], 'Pimcore\\Messenger\\OptimizeImageMessage' => [0 => [0 => 'Pimcore\\Messenger\\Handler\\OptimizeImageHandler', 1 => []]], 'Pimcore\\Messenger\\GeneratePagePreviewMessage' => [0 => [0 => 'Pimcore\\Messenger\\Handler\\GeneratePagePreviewHandler', 1 => []]], 'Pimcore\\Messenger\\GenerateWeb2PrintPdfMessage' => [0 => [0 => 'Pimcore\\Messenger\\Handler\\GenerateWeb2PrintPdfHandler', 1 => []]], 'Pimcore\\Messenger\\VersionDeleteMessage' => [0 => [0 => 'Pimcore\\Messenger\\Handler\\VersionDeleteHandler', 1 => []]], 'Pimcore\\Messenger\\SanityCheckMessage' => [0 => [0 => 'Pimcore\\Messenger\\Handler\\SanityCheckHandler', 1 => []]]]]);

        $instance->setName('debug:messenger');
        $instance->setDescription('List messages you can dispatch using the message buses');

        return $instance;
    }
}
