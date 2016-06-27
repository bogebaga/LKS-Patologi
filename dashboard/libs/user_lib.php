<?php 
//Set default time use by localhost
date_default_timezone_set("Asia/Makassar");

// 
include 'database.php';
include 'lks_user_class.php';

$masuk_user = new user_class($DB_con);
?>
