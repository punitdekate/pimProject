<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUYAyh17\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUYAyh17/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUYAyh17.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUYAyh17\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUYAyh17\App_KernelDevDebugContainer([
    'container.build_hash' => 'UYAyh17',
    'container.build_id' => '00f5c120',
    'container.build_time' => 1672130779,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUYAyh17');
