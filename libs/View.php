<?php

namespace libs;

class View
{
    public function __construct()
    {
    }

    function render($view, $data="", $mensaje=""){
        require 'view/' .$view. 'view.php';
    }
}