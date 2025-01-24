<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbd5bc1a87ba041bed88076da1303aa8a
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Endroid\\QrCode\\' => 15,
        ),
        'D' => 
        array (
            'DASPRiD\\Enum\\' => 13,
        ),
        'B' => 
        array (
            'Bernh\\QrCode\\' => 13,
            'BaconQrCode\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Endroid\\QrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/endroid/qr-code/src',
            1 => __DIR__ . '/..' . '/endroid/qrcode/src',
        ),
        'DASPRiD\\Enum\\' => 
        array (
            0 => __DIR__ . '/..' . '/dasprid/enum/src',
        ),
        'Bernh\\QrCode\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'BaconQrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/bacon/bacon-qr-code/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbd5bc1a87ba041bed88076da1303aa8a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbd5bc1a87ba041bed88076da1303aa8a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbd5bc1a87ba041bed88076da1303aa8a::$classMap;

        }, null, ClassLoader::class);
    }
}
