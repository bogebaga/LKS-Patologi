<?php 
require '../../../libs/user_lib.php';

$username = $_GET['u'];
$jns_data_del = $_GET['jn'];

if($masuk_user->delete_user($username))
{
	$path = $_SERVER['DOCUMENT_ROOT']."/LKS-PATOLOGI/dashboard/UPLOAD_FILES/Images/Users_img/";
	$path .= md5($username."1");

	if (file_exists($path))
	{
		unlink($path);
	}

	if ($jns_data_del == 'admin') 
	{
		# code...
		header('Location: ../../view-data-admin/');
	} else {
		# code...
		header('Location: ../../view-data-user/');
	}
}
?>