<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUrx8mKt\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUrx8mKt/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerUrx8mKt.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerUrx8mKt\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerUrx8mKt\App_KernelProdContainer([
    'container.build_hash' => 'Urx8mKt',
    'container.build_id' => 'ed1f1b81',
    'container.build_time' => 1608152397,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUrx8mKt');
