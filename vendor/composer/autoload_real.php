<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit8a2fb5a495b32ab3646bc640a9e083f1
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

        spl_autoload_register(array('ComposerAutoloaderInit8a2fb5a495b32ab3646bc640a9e083f1', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit8a2fb5a495b32ab3646bc640a9e083f1', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit8a2fb5a495b32ab3646bc640a9e083f1::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
