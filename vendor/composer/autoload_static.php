<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6ed6d30ce7883bcf123227379a31083f
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'JeroenDesloovere\\VCard\\' => 23,
        ),
        'B' => 
        array (
            'Behat\\Transliterator\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'JeroenDesloovere\\VCard\\' => 
        array (
            0 => __DIR__ . '/..' . '/jeroendesloovere/vcard/src',
        ),
        'Behat\\Transliterator\\' => 
        array (
            0 => __DIR__ . '/..' . '/behat/transliterator/src/Behat/Transliterator',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6ed6d30ce7883bcf123227379a31083f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6ed6d30ce7883bcf123227379a31083f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6ed6d30ce7883bcf123227379a31083f::$classMap;

        }, null, ClassLoader::class);
    }
}
