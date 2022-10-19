<?php

namespace controllers;

use libs\Controller;

class ErrorsController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function badRequest(){
        $this->view->render('errors/400', $this->data);
    }

    public function unauthorized(){
        $this->view->render('errors/401', $this->data);
    }

    public function forbidden(){
        $this->view->render('errors/403', $this->data);
    }

    public function notFound(){
        $this->view->render('errors/404', $this->data);
    }

    public function notMethod(){
        $this->view->render('errors/405', $this->data);
    }
}