<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1eaec0c8c88c2bfb536661e3aa89510a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1eaec0c8c88c2bfb536661e3aa89510a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1eaec0c8c88c2bfb536661e3aa89510a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1eaec0c8c88c2bfb536661e3aa89510a::$classMap;

        }, null, ClassLoader::class);
    }
}