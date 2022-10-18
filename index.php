<?php

require_once 'config/config_app.php';
require_once 'helpers/helper.php';
require_once 'helpers/helper_dev.php';

spl_autoload_register(function ($clase){
    $file = str_replace('\\', '/', $clase) . '.php';
    if (file_exists($file)){
        require_once ($file);
    }
});

$app = new libs\App();
echo "<h1>hola</h1>";