<?php

class User{
    private $error = "";
    public function signup($post){
        $data = array();
    $data['name'] = trim($post['name']);
        $data['email']  = trim($post['email']);
    $data['password'] = trim($post['password']);
    $password2= trim($post['password2']);
    if(empty(   $data['email']) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $data['email'])){
        $this->error .= 'error please check your mail';
    }
    if(empty($data['name']) || !preg_match("/^([a-zA-Z' ]+)$/",$data['name'])){
        $this->error .= 'error please check your name';
    }
    if ( $data['password'] !== $password2){
        $this->error .= 'Passwords do not match';
    }
    if(strlen($data['password']) < 4){
        $this->error .= 'Passwords must be more than 4 vowels';
    }
    if ($this->error == ""){
      $data['rank'] = "customer";
      $data['url_address'] = $this->generateRandomString(20);
      $data['date'] = date("Y-m-d H:i:s");


        $query = "INSERT INTO users (name,url_address,email,password,rank,date) VALUES (:name , :url_address , :email , :password , :rank , :date)";
      $db = Database::getInstance();

     $result =  $db->write($query,$data);
   if ($result){
       header('Location: login');
       die();
   }

    }


    }
    public function Login($post){

    }
    public function get_user($url){

    }
   public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}