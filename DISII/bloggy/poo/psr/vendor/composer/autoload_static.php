<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit995bb4e3722bf1fb20e44b714f4eed7f
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Ktest\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ktest\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit995bb4e3722bf1fb20e44b714f4eed7f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit995bb4e3722bf1fb20e44b714f4eed7f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
