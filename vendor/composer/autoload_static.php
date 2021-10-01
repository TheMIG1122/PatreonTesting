<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3a6eaf348e686c3abb0313ba912304a6
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Patreon\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Patreon\\' => 
        array (
            0 => __DIR__ . '/..' . '/patreon/patreon/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3a6eaf348e686c3abb0313ba912304a6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3a6eaf348e686c3abb0313ba912304a6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3a6eaf348e686c3abb0313ba912304a6::$classMap;

        }, null, ClassLoader::class);
    }
}
