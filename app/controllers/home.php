<?php
use JeroenDesloovere\VCard\VCard;
$vcard = new VCard();
class Home extends Controller {
   public function index(){
       $data['page_title'] = "Home";
       $user =  $this->load_model('User');
       $data['user_data'] = $user->check_login();
       if (is_array($data['user_data'])){
           $user_data =  $data['user_data'];
       }

       return $this->view('eshop/index',$data);
   }
}