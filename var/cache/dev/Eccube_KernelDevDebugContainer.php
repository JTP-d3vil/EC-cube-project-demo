<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBjUAxOf\Eccube_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBjUAxOf/Eccube_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBjUAxOf.legacy');

    return;
}

if (!\class_exists(Eccube_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBjUAxOf\Eccube_KernelDevDebugContainer::class, Eccube_KernelDevDebugContainer::class, false);
}

return new \ContainerBjUAxOf\Eccube_KernelDevDebugContainer([
    'container.build_hash' => 'BjUAxOf',
    'container.build_id' => 'a347ad74',
    'container.build_time' => 1700814412,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBjUAxOf');
