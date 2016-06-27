<?php 
session_start();

require '../../libs/config.php';
require '../../libs/user_lib.php';
require '../../libs/libs.php';
	
if(empty($_SESSION['username']))
{
	echo "<script>window.alert('Maaf, Anda harus log in terlebih dahulu untuk mengakses halaman ini.'); window.location='$config[site]login.page/'</script>";
}
else
{
	if($_SESSION['level_acc']!='admin')
	{
		echo "<script>window.alert('Maaf, username dan password anda tidak terdaftar sebagai admin, silahkan login sebagai admin');window.location='$config[site]login.page/'</script>";
	}
	else
	{
		$data = array("title"=>"Dashboard Lembar Kendali Sampel (LKS) - Admin");

		require '../views/sections/head.php';
		require '../views/pages/index.php';
		require '../views/sections/footer.php';
	}
}
?>