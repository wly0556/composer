<?php
namespace core;
Class Boorstrap{
    public static function run(){
        self::perUrl();
    }

    public static function perUrl(){
        if(isset($_GET["s"])){
            $arr = explode("/",$_GET["s"]);
            $class = "\web\controller\\".ucfirst($arr[0]);
            $action = $arr[1];
        }else{
            $class = "\web\controller\Index";
            $action = "show";
        }
        echo (new $class)->$action();
    }
}