<?php
function show($data){
    echo "<pre>";

    echo "</pre>";
}
function check_messages(){
       if(isset($_SESSION['error']) && $_SESSION['error'] != ""){
           echo $_SESSION['error'];
           unset($_SESSION['error']);
       }
}