<?php
class Signup extends Controller {
    public function index(){
        $data['page_title'] = "Signup";
        return $this->view('eshop/signup',$data);
    }
}