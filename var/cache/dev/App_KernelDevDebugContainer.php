<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6sdDf6j\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6sdDf6j/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container6sdDf6j.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container6sdDf6j\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container6sdDf6j\App_KernelDevDebugContainer([
    'container.build_hash' => '6sdDf6j',
    'container.build_id' => '3a43a626',
    'container.build_time' => 1584096830,
], __DIR__.\DIRECTORY_SEPARATOR.'Container6sdDf6j');
