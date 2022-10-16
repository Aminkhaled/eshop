<?php
class Ajax extends Controller {
    public function index(){
        $data = $_POST;
        $category = $this->load_model('category');
        $category_data['category'] = $data['category'];
        if ($data['categoryType'] == 'add_category'){
            $category->create($category_data);
        }

    }
}