<?php
class Login extends Controller {
    public function index(){
        $data['page_title'] = "Login";

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $user =  $this->load_model('User');
            $user->login($_POST);
            $user->check_vcard();
        }
        return $this->view('eshop/login',$data);
    }
}

