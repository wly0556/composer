<?php
namespace web\controller;
use core\View;

Class Index{
    protected $view;
    public function __construct()
    {
        $this->view = new View();
    }

    public function show(){
        echo $this->view->make("index")->with("version","1.0.0");
    }

    public function ccc(){
        echo "xxxxxxx";
    }
}