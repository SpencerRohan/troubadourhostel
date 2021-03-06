<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit43ae8d677ff34b1da59f58ee8424cd90
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Troubadour\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Troubadour\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit43ae8d677ff34b1da59f58ee8424cd90::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit43ae8d677ff34b1da59f58ee8424cd90::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
