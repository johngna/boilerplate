<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4d2b76e580bc872290153a556591013f
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Johngna\\Boilerplate\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Johngna\\Boilerplate\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4d2b76e580bc872290153a556591013f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4d2b76e580bc872290153a556591013f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4d2b76e580bc872290153a556591013f::$classMap;

        }, null, ClassLoader::class);
    }
}
