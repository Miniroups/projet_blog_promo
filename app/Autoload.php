<?php

namespace app;

require_once 'settings/settings.php';

class Autoload
{

    public static function register()
    {
        spl_autoload_register([__CLASS__, 'blogAutoload']);
    }

    private static function blogAutoload($class)
    {
        if (strpos($class, __NAMESPACE__ . '\\') === 0) {
            $class = str_replace(__NAMESPACE__.'\\', '', $class);
            $class = str_replace('\\', '/', $class);
            require DIR_ROOT.$class.'.php';
        }
    }
}
