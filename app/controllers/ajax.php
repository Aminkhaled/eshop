<?php
class Ajax extends Controller {
    public function index(){
        $data = $_POST;

        if ($data['categoryType'] == 'add_category') {
            $category = $this->load_model('category');
            $category_data['category'] = $data['category'];
            $category->create($category_data);
        }

    }
}