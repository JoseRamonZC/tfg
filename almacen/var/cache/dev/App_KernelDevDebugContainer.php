<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHf6At7N\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHf6At7N/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHf6At7N.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHf6At7N\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHf6At7N\App_KernelDevDebugContainer([
    'container.build_hash' => 'Hf6At7N',
    'container.build_id' => 'a9236c62',
    'container.build_time' => 1682249665,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHf6At7N');
