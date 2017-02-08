<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5c9615e7ef2f6b7f2cc1281dc0594757
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'miyahan\\network\\' => 16,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'miyahan\\network\\' => 
        array (
            0 => __DIR__ . '/..' . '/miyahan/telnet/src',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5c9615e7ef2f6b7f2cc1281dc0594757::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5c9615e7ef2f6b7f2cc1281dc0594757::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
