<?php 
// 
$LKS_host = "mysql.idhostinger.com";
$LKS_user = "u832302606_root";
$LKS_pass = "boge12345";
$LKS_dbname = "u832302606_lks";

try 
{
	$DB_con= new PDO("mysql:host=$LKS_host;dbname=$LKS_dbname",$LKS_user,$LKS_pass);
	$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (PDOException $e) 
{
	echo $e->getMessage();
}

 ?>
 