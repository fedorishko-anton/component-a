<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit383921bc8413a80c0cb742ad11577308
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alva\\ComponentA\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alva\\ComponentA\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit383921bc8413a80c0cb742ad11577308::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit383921bc8413a80c0cb742ad11577308::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit383921bc8413a80c0cb742ad11577308::$classMap;

        }, null, ClassLoader::class);
    }
}
