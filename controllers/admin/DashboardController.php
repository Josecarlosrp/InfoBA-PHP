<?php

namespace controllers\admin;

use libs\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
       $this->data['page_title'] = 'Panel de control/Dashboard';
       $this->data['page_subtitle'] = "Monitorización del sistema";
       $this->render('admin/dashboard', $this->data);
    }

}