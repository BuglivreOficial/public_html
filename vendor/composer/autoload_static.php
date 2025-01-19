<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2eb771ea7cff2cd575f3d83feafb90a2
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
            0 => '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2eb771ea7cff2cd575f3d83feafb90a2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2eb771ea7cff2cd575f3d83feafb90a2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2eb771ea7cff2cd575f3d83feafb90a2::$classMap;

        }, null, ClassLoader::class);
    }
}
