<?php
class Category{
    public function create($data){
        $db = Database::getInstance();
        $query = "insert into categories (category) VALUES (:category)";
        $check_category = "select * from categories where category = :category Limit 1";
        $arr['category'] = $data['category'];
        $check = $db->read($check_category,$arr);
        if ($check){
            echo "It is already exist";
        }else{
            $db->write($query,$data);
            echo "we added it successfully";

        }
    }
}