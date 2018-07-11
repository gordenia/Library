<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitefeacc6e6c8ce3be5653836e7eb0eab5
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Collections\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/collections/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitefeacc6e6c8ce3be5653836e7eb0eab5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitefeacc6e6c8ce3be5653836e7eb0eab5::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitefeacc6e6c8ce3be5653836e7eb0eab5::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
