<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf7ea3952851baefe44d5483f9f4dcc7c
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DBlackborough\\Quill\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DBlackborough\\Quill\\' => 
        array (
            0 => __DIR__ . '/..' . '/deanblackborough/php-quill-renderer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf7ea3952851baefe44d5483f9f4dcc7c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf7ea3952851baefe44d5483f9f4dcc7c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
