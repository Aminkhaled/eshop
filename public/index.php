<?php
session_start();

$a = $_SERVER['REQUEST_SCHEME']."://". $_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];
$asset = str_replace('index.php','',$a);
define('ROOT',$asset);
define('ASSETS',$asset ."assets/");
include "../app/init.php";
