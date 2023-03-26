<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6ffd541ac789d5f11cd77492e38375c0
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'JsonMachine\\' => 12,
            'JSON\\' => 5,
        ),
        'C' => 
        array (
            'CONFIG\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'JsonMachine\\' => 
        array (
            0 => __DIR__ . '/..' . '/halaxa/json-machine/src',
        ),
        'JSON\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'CONFIG\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6ffd541ac789d5f11cd77492e38375c0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6ffd541ac789d5f11cd77492e38375c0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6ffd541ac789d5f11cd77492e38375c0::$classMap;

        }, null, ClassLoader::class);
    }
}