<?php
class Category{
    public function create($data){
        $db = Database::newInstance();
        $query = "insert into categories (category) VALUES (:category)";
        $check_category = "select * from categories where category = :category Limit 1";
        $arr['category'] = $data['category'];

        $check = $db->read($check_category,$arr);
        if ($check){
            $arr['error'] = "It is already exist";
            $arr['message'] = $_SESSION['error'];
            $arr['message_type'] = "error";

            echo json_encode($arr);
        }else{
            $db->write($query,$data);
            $arr['successfully'] =  "we added it successfully";
            $arr['message'] = "category added successfully";
            $arr['message_type'] = "info";
            $caties = $this->get_all();
            $arr['data']= $this->make_table($caties);
            echo json_encode($arr);
        }
    }

    public function get_all(){
        $db = Database::getInstance();
        $result = $db->read('select * from categories');
        return $result;
    }
    public function make_table($cats){
         $result = '';
        $categories = [];
      if (is_array($cats)){


//          foreach($cats as $entry){
//              $categories = array_merge($categories, $entry);
//          }

          foreach ($cats as$value){
              $result .= "<tr>      <td><a >$value->id</a></td>  <td class='hidden-phone'>$value->category</td>
                            <td>Active </td>
                           <td>
                                <button class='btn btn-success btn-xs'><i class='fa fa-check'></i></button>
                                <button class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></button>
                                <button class='btn btn-danger btn-xs'><i class='fa fa-trash-o'></i></button>
                            </td>  </tr>";
          }
          return $result;

      }
      return false;

        }


}



