<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaa744bcd11cfc175f4b1e7a91492845b
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Tests\\' => 10,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitaa744bcd11cfc175f4b1e7a91492845b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaa744bcd11cfc175f4b1e7a91492845b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaa744bcd11cfc175f4b1e7a91492845b::$classMap;

        }, null, ClassLoader::class);
    }
}
