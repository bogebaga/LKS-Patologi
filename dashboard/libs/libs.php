<?php 
//Set default time use by localhost
date_default_timezone_set("Asia/Makassar");

include 'database.php';
include 'lks_crud_class.php';

$lkscrud = new lks_crud($DB_con);

?>