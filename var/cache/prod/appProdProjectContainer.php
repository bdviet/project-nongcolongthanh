<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUyyjb9e\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUyyjb9e/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerUyyjb9e.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerUyyjb9e\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerUyyjb9e\appProdProjectContainer([
    'container.build_hash' => 'Uyyjb9e',
    'container.build_id' => '92c56c3e',
    'container.build_time' => 1582171641,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUyyjb9e');
