<?php

namespace libs;

class Controller
{
    public function __construct()
    {
        #Configura valores por defecto para las view.
        $this->data['page_tag'] = APP_NAME;
        $this->data['page_title'] = '';
        #Asignamos modal-open-onload cuando queremos que se abra onload
        $this->data['modal-open-onload'] = "";
        $this->view = new View();
    }
}