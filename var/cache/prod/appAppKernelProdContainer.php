<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container0ARD46s\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container0ARD46s/appAppKernelProdContainer.php') {
    touch(__DIR__.'/Container0ARD46s.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\Container0ARD46s\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \Container0ARD46s\appAppKernelProdContainer([
    'container.build_hash' => '0ARD46s',
    'container.build_id' => 'fc5e18a0',
    'container.build_time' => 1714262881,
], __DIR__.\DIRECTORY_SEPARATOR.'Container0ARD46s');
