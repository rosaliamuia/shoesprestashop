<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKayrhuy\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKayrhuy/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerKayrhuy.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerKayrhuy\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerKayrhuy\appProdProjectContainer([
    'container.build_hash' => 'Kayrhuy',
    'container.build_id' => '96cf52e1',
    'container.build_time' => 1610539682,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKayrhuy');