<?php
namespace web\controller;
use core\View;
use Gregwar\Captcha\CaptchaBuilder;

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
//        header('Content-type: image/jpeg');
        $builder = new CaptchaBuilder;
        $builder->build();
        $_SESSION['phrase'] = $builder->getPhrase();
        $builder->output();
        echo $_SESSION['phrase'];
    }
}