<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerB8NThsa\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerB8NThsa/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerB8NThsa.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerB8NThsa\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerB8NThsa\App_KernelDevDebugContainer([
    'container.build_hash' => 'B8NThsa',
    'container.build_id' => '8b765c54',
    'container.build_time' => 1721293436,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerB8NThsa');
