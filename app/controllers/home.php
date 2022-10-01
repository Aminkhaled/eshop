<?php
class Home extends Controller {
   public function index($a = '',$b = ''){

       return $this->view('eshop/index');
   }
}