<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9cd30c2966695947c0a80629dcfe44b6
{
    public static $files = array (
        'a9ed0d27b5a698798a89181429f162c5' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Common/customFunctions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zxing\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zxing\\' => 
        array (
            0 => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9cd30c2966695947c0a80629dcfe44b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9cd30c2966695947c0a80629dcfe44b6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9cd30c2966695947c0a80629dcfe44b6::$classMap;

        }, null, ClassLoader::class);
    }
}
