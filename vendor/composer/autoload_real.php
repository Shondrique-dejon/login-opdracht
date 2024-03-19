<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf5ca5c7d4eb07ab536409d1998bc1d8f
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitf5ca5c7d4eb07ab536409d1998bc1d8f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf5ca5c7d4eb07ab536409d1998bc1d8f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitf5ca5c7d4eb07ab536409d1998bc1d8f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
