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
        $data['page_title'] = "Category page";
        $user =  $this->load_model('User');
        $category =  $this->load_model('Category');
        $caties = $category->get_all();
        $data['category_row'] = $category->make_table($caties);

        $arr = ['admin'];
        $data['user_data'] = $user->check_login(true,$arr);
        if (is_object($data['user_data'])){
            $user_data =  $data['user_data'] ;
        }
        return $this->view('admin/categories',$data);
    }

    public function edit_category(){
        $data['page_title'] = "Edit Category page";
         if ($_GET['categoryType'] == 'edit_category'){
            $data['id'] = $_GET['id'];
            $data['category'] = $_GET['category'];
        }
        return $this->view('admin/editCategory',$data);
    }
}