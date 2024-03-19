<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf5ca5c7d4eb07ab536409d1998bc1d8f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Shoni\\Login\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Shoni\\Login\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf5ca5c7d4eb07ab536409d1998bc1d8f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf5ca5c7d4eb07ab536409d1998bc1d8f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf5ca5c7d4eb07ab536409d1998bc1d8f::$classMap;

        }, null, ClassLoader::class);
    }
}
