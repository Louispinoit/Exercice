<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita2d2872c86f7fcd93432c3f2b1ccdc0c
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInita2d2872c86f7fcd93432c3f2b1ccdc0c::$classMap;

        }, null, ClassLoader::class);
    }
}