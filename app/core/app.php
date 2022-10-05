<?php

class App{

    protected $method = "index";
    protected $controller = "home";
    protected $params = "home";

    public function __construct()
    {
        $parseUrl =  $this->parseUrl();
        if (file_exists("../app/controllers/".$parseUrl[0].".php")){
         $this->controller =  strtolower($parseUrl[0]);
         unset($parseUrl[0]);
        }
        require "../app/controllers/" . $this->controller.".php";
        $this->controller =  new $this->controller;
        if(isset($parseUrl[1])){
            $parseUrl[1] = strtolower($parseUrl[1]);
            if (method_exists($this->controller,$parseUrl[1])){
                $this->method = $parseUrl[1];
                unset($parseUrl[1]);
            }
        }
        $this->params = (count($parseUrl) > 0) ? $parseUrl : ['home'];
        call_user_func_array([$this->controller,$this->method],$this->params);
    }
    private function parseUrl(){
    $url = isset($_GET['url']) ? $_GET['url'] : "home";
    return explode('/',filter_var(trim($url,'/'),FILTER_SANITIZE_URL));
    }
}

new App();