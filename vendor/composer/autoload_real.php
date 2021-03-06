<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd5764dbfca4c4dcc4fa4064c15a1e675
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

        spl_autoload_register(array('ComposerAutoloaderInitd5764dbfca4c4dcc4fa4064c15a1e675', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd5764dbfca4c4dcc4fa4064c15a1e675', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        \Composer\Autoload\ComposerStaticInitd5764dbfca4c4dcc4fa4064c15a1e675::getInitializer($loader)();

        $loader->register(true);

        return $loader;
    }
}
