<?php
class Database{
    protected static $instance;

    public static $conn;
    public function __construct()
    {
        try {
          $db = DB_TYPE.":host=localhost;dbname=".DB_NAME;
          self::$conn = new PDO($db,DB_USER,DB_PASSWORD);
        }
        catch (PDOException $e){
          die(  $e->getMessage());
        }
    }
    public static function getInstance(){
        if(!self::$instance){
            return self::$instance = new self();
        }
       return self::$instance;
    }
    //read
    public function read($query,$data = array()){
         $stm = self::$conn->prepare($query);
         $result =   $stm->execute($data);

         if($result){
             $data = $stm->fetchAll(PDO::FETCH_OBJ);
             if (is_array($data)){
                 return $data;
             }
         }
         return false;
    }
    //write
    public function write($query,$data = array()){
        $stm = self::$conn->prepare($query);
         $result =  $stm->execute($data);

           if ($result){
               return true;
           }
           return false;
    }

}
$db = Database::getINstance();


