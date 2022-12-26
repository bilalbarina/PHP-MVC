<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3f020774b3ceac455ae485c7f4cc41dd
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3f020774b3ceac455ae485c7f4cc41dd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3f020774b3ceac455ae485c7f4cc41dd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3f020774b3ceac455ae485c7f4cc41dd::$classMap;

        }, null, ClassLoader::class);
    }
}
