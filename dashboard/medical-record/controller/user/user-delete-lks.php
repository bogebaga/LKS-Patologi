<?php 
require '../../../libs/libs.php';

if(isset($_GET['lks'])){
	$no_rekmed=$_GET['lks'];
	$lkscrud->delete_data_lks($no_rekmed);
	
	header('Location: ../../search/?lks');
}
?>
