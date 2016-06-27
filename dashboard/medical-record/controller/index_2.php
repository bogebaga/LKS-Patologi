<?php 
session_start();

require '../../libs/config.php';
require '../../libs/libs.php';

if(empty($_SESSION['username']))
{
	echo "<script>
			window.alert('Maaf, anda harus log in untuk mengakses halaman ini.'); 
			window.location='$config[site]login.page/';
		</script>";
}
else
{
	if($_SESSION['level_acc']!='user')
	{	
		echo "<script>
				window.alert('Maaf, username dan password anda tidak tersedia, silahkan log in kembali.');
				window.location='$config[site]/login.page/'
			</script>";	
	}
	else
	{
		$data = array("title"=>"Dashboard Lembar Kendali Sampel (LKS)- User");

		require '../views/sections/head.php';
		require '../views/pages/index_2.php';
		require '../views/sections/footer.php';
	}
}
?>