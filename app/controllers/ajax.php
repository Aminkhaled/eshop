<?php
class Ajax extends Controller {
    public function index(){
        $data = $_POST;
        $category = $this->load_model('category');

        if ($data['categoryType'] == 'add_category') {
            $category_data['category'] = $data['category'];
            $category->create($category_data);
        }else if ($_GET['categoryType'] == 'delete_category'){
            $arr['id'] = $_GET['id'];
            $category->delete($arr['id']);
            header('Location: categories');
        }else if ($_POST['categoryType'] == 'update_category'){
            $category_name = $_POST['category'];
            $id = $_POST['id'];
           $category->update($category_name,$id);
            header('Location: categories');

        }

    }
}
