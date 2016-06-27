<?php 
session_start();

require '../../../libs/libs.php';
require '../../../libs/config.php';

if (empty($_SESSION['username'])) 
{
	# code...
	echo "<script>window.alert('Maaf, tidak ada tidak ada session yang tersimpan saat ini.');window.location='$config[site]login.page/'</script>";
}
else
{
	if($_SESSION['level_acc']!='admin')
	{
		echo "<script>window.alert('Maaf, anda tidak berhak untuk mengakses halaman ini.');window.location='$config[site]login.page/'</script>";
	}
	else
	{
		$data = array("title"=>"Admin Page - Views Detail Tabung");

		require '../../views/sections/head.php';
		require '../../views/pages/user/view_daftar_tabung.php';
		require '../../views/sections/footer.php';
	}
}
?>