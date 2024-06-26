<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf6434310b7f68ad84b02f81071f94a11
{
    public static $classMap = array (
        'AdminPsThemeCustoAdvancedController' => __DIR__ . '/../..' . '/controllers/admin/AdminPsThemeCustoAdvanced.php',
        'AdminPsThemeCustoConfigurationController' => __DIR__ . '/../..' . '/controllers/admin/AdminPsThemeCustoConfiguration.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'ThemeCustoRequests' => __DIR__ . '/../..' . '/classes/ThemeCustoRequests.php',
        'ps_themecusto' => __DIR__ . '/../..' . '/ps_themecusto.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitf6434310b7f68ad84b02f81071f94a11::$classMap;

        }, null, ClassLoader::class);
    }
}
