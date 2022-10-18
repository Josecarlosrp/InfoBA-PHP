
<?php
function url(){
    if(isset($_SERVER['HTTPS'])){
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    } else {
        $protocol = 'http';
    }
    $uri = explode("/", $_SERVER['REQUEST_URI']);
    $app =  isset($uri[1]) ? "/". $uri[1] : "";
    return $protocol . "://" . $_SERVER['HTTP_HOST'] . $app;
}
define('BASE_URL', url());

# Nombre de la app
define('APP_NAME','InfoBA');
# Zona horaria
date_default_timezone_set('Europe/Madrid');
# Moneda
define('DECIMAL_SYMBOL', ',');
define('MILLAR_SYMBOL', '.');
define('MONEY_SYMBOL', '€');
