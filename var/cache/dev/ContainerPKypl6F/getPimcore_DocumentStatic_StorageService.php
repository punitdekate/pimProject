<?php

namespace ContainerPKypl6F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcore_DocumentStatic_StorageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'pimcore.document_static.storage' shared service.
     *
     * @return \League\Flysystem\Filesystem
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/FilesystemReader.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/FilesystemWriter.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/FilesystemOperator.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/CalculateChecksumFromStream.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/Filesystem.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/FilesystemAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/ChecksumProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/Local/LocalFilesystemAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/UnixVisibility/VisibilityConverter.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/flysystem/src/UnixVisibility/PortableVisibilityConverter.php';

        return $container->privates['pimcore.document_static.storage'] = new \League\Flysystem\Filesystem(new \League\Flysystem\Local\LocalFilesystemAdapter((\dirname(__DIR__, 4).'/public/var/tmp/pages'), \League\Flysystem\UnixVisibility\PortableVisibilityConverter::fromArray(['file' => ['public' => 420, 'private' => 384], 'dir' => ['public' => 493, 'private' => 448]]), 0, 2, NULL, false), ['visibility' => 'public', 'directory_visibility' => NULL, 'case_sensitive' => true, 'disable_asserts' => false]);
    }
}
