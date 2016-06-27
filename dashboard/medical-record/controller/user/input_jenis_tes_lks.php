<?php 
session_start();

require '../../../libs/libs.php';
require '../../../libs/config.php';

	$data = array("title"=>"User Page - Input Data Lembar Kendali Sampel (LKS)");

	require '../../views/sections/head.php';
	require '../../views/pages/user/input_jenis_tes.php';
	require '../../views/sections/footer.php';
?>