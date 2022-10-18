<?php

namespace controllers\admin;

use libs\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $dashboard = new DashboardController;
        $this->home();
    }

    function home(){
        $this->view->render('public/home', $this->data);
    }
}