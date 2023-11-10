<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4c511a264416ba099bb10b926bfa1033
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4c511a264416ba099bb10b926bfa1033::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4c511a264416ba099bb10b926bfa1033::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4c511a264416ba099bb10b926bfa1033::$classMap;

        }, null, ClassLoader::class);
    }
}