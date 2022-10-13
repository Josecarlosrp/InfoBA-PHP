<?php

//Muestra información formateada
function dd($data){
    $format = print_r('<pre>');
    $format .= print_r($data);
    $format .= print_r('</pre>');
    echo $format;
    die();
}

//Muestra información formateada
function dep($data){
    $format = print_r('<pre>');
    $format .= print_r($data);
    $format .= print_r('</pre>');
    echo $format;
}