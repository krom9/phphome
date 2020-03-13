<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit85c0a64a6af0c60b9239ca5125296dd3
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Academy\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Academy\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit85c0a64a6af0c60b9239ca5125296dd3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit85c0a64a6af0c60b9239ca5125296dd3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}