<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitebc6840621b0a80121af7aebf2f066b7
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\VarDumper\\' => 28,
            'Src\\Model\\' => 10,
            'Src\\Data\\' => 9,
            'Src\\Core\\' => 9,
            'Src\\Controllers\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Src\\Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Src/Model',
        ),
        'Src\\Data\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Src/Data',
        ),
        'Src\\Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Src/Core',
        ),
        'Src\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Src/Controller',
        ),
    );

    public static $classMap = array (
        'AltoRouter' => __DIR__ . '/..' . '/altorouter/altorouter/AltoRouter.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitebc6840621b0a80121af7aebf2f066b7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitebc6840621b0a80121af7aebf2f066b7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitebc6840621b0a80121af7aebf2f066b7::$classMap;

        }, null, ClassLoader::class);
    }
}
