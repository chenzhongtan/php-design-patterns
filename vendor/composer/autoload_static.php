<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7b1cfc63a6bae7cf247e6be9cb642d49
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Remember\\Patterns\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Remember\\Patterns\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7b1cfc63a6bae7cf247e6be9cb642d49::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7b1cfc63a6bae7cf247e6be9cb642d49::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}