<?php
class Home extends Controller {
   public function index($a = '',$b = ''){
       print_r($a);
       print_r($b);
       return $this->view('home');
   }
}