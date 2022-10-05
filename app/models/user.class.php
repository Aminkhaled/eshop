<?php

class User{
    private $error = "";
    public function signup($post){
        $data = array();
        $db = Database::getInstance();
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

      $email = "select * from users where email = :email Limit 1";
    $arr['email'] = $data['email'];
      $check = $db->read($email,$arr);
      if (is_array($check)){
          $this->error = "your email is exist";
      }
      $arr = false;

        $url_address = "select * from users where url_address = :url_address Limit 1";
        $data['url_address'] = $this->generateRandomString(20);

        $url['url_address'] = $data['url_address'];
        $check_url = $db->read($url_address,$url);
        if (is_array($check_url)){
            $data['url_address'] = $this->generateRandomString(20);
        }
        $_SESSION['error'] = $this->error;
    if ($this->error == ""){
      $data['rank'] = "customer";
      $data['password'] = hash('sha1',$data['password']);
      $data['date'] = date("Y-m-d H:i:s");


        $query = "INSERT INTO users (name,url_address,email,password,rank,date) VALUES (:name , :url_address , :email , :password , :rank , :date)";


     $result =  $db->write($query,$data);
   if ($result){
       header('Location: login');
       die();
   }

    }


    }
    public function Login($post){
        $data = array();
        $db = Database::getInstance();
        $data['email']  = trim($post['email']);
        $data['password'] = trim($post['password']);
        if(empty(   $data['email']) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $data['email'])){
            $this->error .= 'error please check your mail';
        }
        if(strlen($data['password']) < 4){
            $this->error .= 'Passwords must be more than 4 vowels';
        }

        $_SESSION['error'] = $this->error;
        if ($this->error == ""){
            $data['password'] = hash('sha1',$data['password']);

            $query = "select * from users where email = :email && password = :password Limit 1";


            $result =  $db->read($query,$data);
            if (is_array($result)){
                $_SESSION['url_address'] = $result[0]->url_address;

                header('Location:home' );
                die();
            }
            $this->error = "this email or password is wrong";

        }

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
    public function check_login(){
        if (isset($_SESSION['url_address'])){
            $arr['url'] = $_SESSION['url_address'];
            $query = "select *  from users where url_address = :url limit 1";
            $db = Database::getInstance();
            $result = $db->read($query,$arr);
            if (is_array($result)){
                return $result[0];
            }
            return false;
        }
    }
}