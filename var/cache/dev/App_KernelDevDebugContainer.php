<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMr9sZfk\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMr9sZfk/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMr9sZfk.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMr9sZfk\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMr9sZfk\App_KernelDevDebugContainer([
    'container.build_hash' => 'Mr9sZfk',
    'container.build_id' => 'b4454a20',
    'container.build_time' => 1730745291,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMr9sZfk');
