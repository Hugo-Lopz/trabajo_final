<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYcA69CQ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYcA69CQ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYcA69CQ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYcA69CQ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYcA69CQ\App_KernelDevDebugContainer([
    'container.build_hash' => 'YcA69CQ',
    'container.build_id' => 'b8f850fc',
    'container.build_time' => 1716981761,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYcA69CQ');
