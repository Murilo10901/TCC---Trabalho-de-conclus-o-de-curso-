<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5d67bf44e070b0315cfafe2ddebf6a12
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'chillerlan\\Settings\\' => 20,
            'chillerlan\\QRCode\\' => 18,
        ),
        'U' => 
        array (
            'Usuario\\Tcc\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'chillerlan\\Settings\\' => 
        array (
            0 => __DIR__ . '/..' . '/chillerlan/php-settings-container/src',
        ),
        'chillerlan\\QRCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/chillerlan/php-qrcode/src',
        ),
        'Usuario\\Tcc\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5d67bf44e070b0315cfafe2ddebf6a12::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5d67bf44e070b0315cfafe2ddebf6a12::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5d67bf44e070b0315cfafe2ddebf6a12::$classMap;

        }, null, ClassLoader::class);
    }
}
