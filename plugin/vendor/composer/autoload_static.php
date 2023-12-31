<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd7933fcb71d1b277e8cca593b8e64223
{
    public static $classMap = array (
        'Wpgeekshub\\Plugin\\Base' => __DIR__ . '/../..' . '/src/Base.php',
        'Wpgeekshub\\Plugin\\Deactivator' => __DIR__ . '/../..' . '/src/Deactivator.php',
        'Wpgeekshub\\Plugin\\Feature' => __DIR__ . '/../..' . '/src/Feature.php',
        'Wpgeekshub\\Plugin\\Fields' => __DIR__ . '/../..' . '/src/Fields.php',
        'Wpgeekshub\\Plugin\\License' => __DIR__ . '/../..' . '/src/License.php',
        'Wpgeekshub\\Plugin\\Metabox' => __DIR__ . '/../..' . '/src/Metabox.php',
        'Wpgeekshub\\Plugin\\Notice' => __DIR__ . '/../..' . '/src/Notice.php',
        'Wpgeekshub\\Plugin\\Settings' => __DIR__ . '/../..' . '/src/Settings.php',
        'Wpgeekshub\\Plugin\\Setup' => __DIR__ . '/../..' . '/src/Setup.php',
        'Wpgeekshub\\Plugin\\Survey' => __DIR__ . '/../..' . '/src/Survey.php',
        'Wpgeekshub\\Plugin\\Table' => __DIR__ . '/../..' . '/src/Table.php',
        'Wpgeekshub\\Plugin\\Update' => __DIR__ . '/../..' . '/src/Update.php',
        'Wpgeekshub\\Plugin\\Widget' => __DIR__ . '/../..' . '/src/Widget.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitd7933fcb71d1b277e8cca593b8e64223::$classMap;

        }, null, ClassLoader::class);
    }
}
