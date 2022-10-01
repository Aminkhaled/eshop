<?php
define("WEBSITE_TITLE",'My Shop');

//database config
define('DB_NAME','db_eshop');
define('DB_USER','root');
define('DB_PASSWORD','');

define('DEBUG',true);

if (DEBUG){
    ini_set('display_errors',1);
}else{
    ini_set('display_errors',0);
}