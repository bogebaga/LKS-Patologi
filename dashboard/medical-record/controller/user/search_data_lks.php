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
	if($_SESSION['level_acc']!='user')
	{
		echo "<script>window.alert('Maaf, anda tidak berhak untuk mengakses halaman ini.');window.location='$config[site]login.page/'</script>";
	}
	else
	{
		$data = array("title"=>"User Page - Search Data Lembar Kendali Sampel (LKS)");

		require '../../views/sections/head.php';
		require '../../views/pages/user/cari_data_lks.php';
		require '../../views/sections/footer.php';
	}
}
?>