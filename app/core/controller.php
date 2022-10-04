<?php
class Controller{
    public function view($path, $data = [])
    {
        if (file_exists("../app/views/" . $path . ".php")) {
            include "../app/views/" . $path . ".php";
        }
    }
        public function load_model($path){
            if (file_exists("../app/models/".strtolower($path).".class.php")){
                include "../app/models/".strtolower($path).".class.php";
                return $a = new $path;
            }
            return false;

        }
}