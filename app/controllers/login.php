<?php
class Login extends Controller {
    public function index(){
        $data['page_title'] = "Login";
        return $this->view('eshop/login',$data);
    }
}