<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaf139d13af2e175cceccc64520d5213f
{
    public static $prefixesPsr0 = array (
        'o' => 
        array (
            'org\\bovigo\\vfs' => 
            array (
                0 => __DIR__ . '/..' . '/mikey179/vfsstream/src/main/php',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitaf139d13af2e175cceccc64520d5213f::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
