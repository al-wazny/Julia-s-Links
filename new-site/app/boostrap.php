<?php
require_once 'config/config.php';

// Autoload Core Libraries
spl_autoload_register(function ($classname){
    $classFile = APP_ROOT . '/libraries/' .$classname . '.php';

    if (file_exists($classFile)) {
        require_once $classFile;
    }
});
