<?php

function show($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
function check_messages(){
       if(isset($_SESSION['error']) && $_SESSION['error'] != ""){
           echo $_SESSION['error'];
           unset($_SESSION['error']);
       }
}
function download_vcard(){
    if (isset($_SESSION['url_address']) && $_SESSION['url_address'] != ""){
        $user = new User();
        return $user->check_vcard();
    }
}