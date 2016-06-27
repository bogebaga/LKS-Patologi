<?php 
require '../../../libs/libs.php';
require '../../../libs/config.php';
if (isset($_POST['tes'])) 
{
	# code...
	$stmt = $DB_con->prepare("SELECT * FROM tb_nama_tes WHERE kd_notasi = '".$_POST['tes']."'");
	$stmt->execute();
	$row = $stmt->fetch(PDO::FETCH_ASSOC); 

	if($row['kd_notasi']=='')
	{
		echo "<span style='color:red'>Data tes tidak Tersedia</span>";
	}
	else
	{
		echo "<span style='color:green'>Data tes Tersedia</span>";
	}
}
?>