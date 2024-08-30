<?php

namespace Source\App;

use League\Plates\Engine;

class App
{
    private $view;

public function __construct()
    {
        $this->view = new Engine(__DIR__ . "/../../themes/app","php");
    }

    public function home ()
    {
        echo $this->view->render("home",[]);
    }
    public function profile ()
    {
        echo $this->view->render("profile",[]);
    }
   public function contact ()
    {
        echo $this->view->render("contact",[]);
    }
    public function about ()
    {
        echo $this->view->render("about",[]);
    }
    public function appointment ()
    {
        echo $this->view->render("appointment",[]);
    }
    public function patient ()
    {
        echo $this->view->render("patient",[]);
    }
    public function clinics ()
    {
        echo $this->view->render("clinics",[]);
    }
    public function diets ()
    {
        echo $this->view->render("diets",[]);
    }
    public function loginAdm ()
    {
        echo $this->view->render("loginAdm",[]);
    }


    public function error(array $data)
    {
        var_dump($data);
    }

}
