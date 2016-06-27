<?php 
session_start();

require '../../libs/libs.php';
require '../../libs/config.php';

if (isset($_SESSION['level_acc'])) 
{
	if($_SESSION['level_acc']=='admin')
	{
		header('Location: ../admin.page/');
	}
	else
	{
		header('Location: ../user.page/');
	}
} 
else 
{
	$data = array("title"=>"Dashboard Lembar Kendali Sampel (LKS) - Login Page");

	require '../views/login/head.php';
	require '../views/login/login.php';
	require '../views/login/footer.php';
}

?>