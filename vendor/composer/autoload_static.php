<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc1dfac4d6d10973711ed7362acb597e2
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
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
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc1dfac4d6d10973711ed7362acb597e2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc1dfac4d6d10973711ed7362acb597e2::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInitc1dfac4d6d10973711ed7362acb597e2::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc1dfac4d6d10973711ed7362acb597e2::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}