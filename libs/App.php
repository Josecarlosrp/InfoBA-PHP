<?php


namespace libs;

use controllers\ErrorsController;

class App
{

    public function __construct()
    {
        $url = !empty($_GET['url']) ? $_GET['url'] : 'Home';

        $url = rtrim($url, "/");
        $url = explode("/", $url);

        $controller = $this->obtieneController($url);
        if (!is_null($controller)){
            $method = $this->obtieneMetodo($url);
            if(method_exists($controller, $method)){
                $params = [];
                if (!empty($url[2]) && $url[2] != ""){
                    $params = array_slice($url, 2);
                }
                $controller->{$method}($params);
            }else{
                $controller = new ErrorsController();
                $controller->notMethod();
            }
        }else{
            $controller = new ErrorsController();
            $controller->notFound();
        }
    }

    private function obtieneController(&$url) {
        $controller = null;

        if (strtolower($url[0])== 'admin') {
            $url = array_slice($url, 1);

            if (empty($url[0])) {
                $archivoController = 'controllers/admin/AdminController.php';
                $namespaceController = 'controllers\\admin\\AdminController';
            }else {
                $archivoController = 'controllers/admin/' . ucFirst($url[0]) . 'Controller.php';
                $namespaceController = 'controllers\\admin\\' . ucFirst($url[0]) . 'Controller';
            }
        } else {
            $archivoController = 'controllers/' . ucFirst($url[0]) . 'Controller.php';
            $namespaceController = 'controllers\\' . ucFirst($url[0]) . 'Controller';
        }

        if (file_exists($archivoController)) {
            require_once $archivoController;
            $controller = new $namespaceController;
        }

        return $controller;
    }

    private function obtieneMetodo($url) {
        return  !empty($url[1]) && $url[1] != "" ? $url[1] : 'index';
    }
}