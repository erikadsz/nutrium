<?php

namespace Source\App;

use League\Plates\Engine;

class Admin
{
    private $view;

public function __construct()
    {
        $this->view = new Engine(__DIR__ . "/../../themes/admin","php");
    }

    public function home ()
    {
        
        echo $this->view->render("home",[]);
    }
    
    public function appointmentList ()
    {
        
        echo $this->view->render("appointmentList",[]);
    }
     
    public function clinicsList ()
    {
        
        echo $this->view->render("clinicsList",[]);
    }
     
    public function dietList ()
    {
        
        echo $this->view->render("dietList",[]);
    }

    public function userList ()
    {
        
        echo $this->view->render("userList",[]);
    }


    public function error(array $data)
    {
        var_dump($data);
    }

}