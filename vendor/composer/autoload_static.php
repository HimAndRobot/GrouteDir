<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit433180116075c3afe57843fc8289341b
{
    public static $prefixLengthsPsr4 = array (
        'd' => 
        array (
            'dir\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'dir\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit433180116075c3afe57843fc8289341b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit433180116075c3afe57843fc8289341b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}