<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMLXQ5Ov\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMLXQ5Ov/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMLXQ5Ov.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMLXQ5Ov\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerMLXQ5Ov\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'MLXQ5Ov',
    'container.build_id' => '718fb7b4',
    'container.build_time' => 1682913777,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMLXQ5Ov');
