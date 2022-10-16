<?php
class Admin extends Controller{
    public function index(){
        $data['page_title'] = "Admin page";
        $user =  $this->load_model('User');
        $arr = ['admin'];
        $data['user_data'] = $user->check_login(true,$arr);
        if (is_object($data['user_data'])){
            $user_data =  $data['user_data'] ;
        }
        return $this->view('admin/index',$data);
    }
    public function categories(){
        $data['page_title'] = "Admin page";
        $user =  $this->load_model('User');
        $arr = ['admin'];
        $data['user_data'] = $user->check_login(true,$arr);
        if (is_object($data['user_data'])){
            $user_data =  $data['user_data'] ;
        }
        return $this->view('admin/categories',$data);
    }
}