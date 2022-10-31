<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb503ae5271c52065859c75e6083d3ce4
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nyawach\\LaravelPesapal\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nyawach\\LaravelPesapal\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb503ae5271c52065859c75e6083d3ce4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb503ae5271c52065859c75e6083d3ce4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb503ae5271c52065859c75e6083d3ce4::$classMap;

        }, null, ClassLoader::class);
    }
}
