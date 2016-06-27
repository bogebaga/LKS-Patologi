<?php 
include '../../../libs/libs.php';

$no_rekmed = $_GET['no_rekmed'];
$key = $_GET['key'];
$data = $_GET['data'];

	
	if (preg_match("/^tes_hijau_/",$key) OR preg_match("/^hasil_hijau_/", $key)) 
	{
		$sql="SELECT * FROM tb_tes_hijau WHERE no_rekmed=$no_rekmed";

		$stmt1 = $DB_con->prepare($sql);
		$stmt1->execute();
		$row1 = $stmt1->fetch(PDO::FETCH_ASSOC);

			if ($row1['no_rekmed']==$no_rekmed)
			{
				$lkscrud->update_tes_hijau($no_rekmed, $key, $data);
			} 
			else 
			{
				$lkscrud->insert_tes_hijau($no_rekmed, $key, $data);
			}

		$sql2 = "SELECT * FROM tb_hasil_hijau WHERE no_rekmed=$no_rekmed";

		$stmt2 = $DB_con->prepare($sql2);
		$stmt2->execute();
		$row2 = $stmt2->fetch(PDO::FETCH_ASSOC);

			if ($row2['no_rekmed']==$no_rekmed) 
			{
				$lkscrud->update_hasil_hijau($no_rekmed, $key, $data);
			} 
			else 
			{
				$lkscrud->insert_hasil_hijau($no_rekmed, $key, $data);
			}
	} 
	else 
	{
		$sql="SELECT * FROM tb_tes where no_rekmed=$no_rekmed";

		$stmt1 = $DB_con->prepare($sql);
		$stmt1->execute();
		$row1 = $stmt1->fetch(PDO::FETCH_ASSOC);

			if ($row1['no_rekmed']==$no_rekmed) 
			{
				$lkscrud->update_tes($no_rekmed, $key, $data);
			}
			else
			{
				$lkscrud->insert_tes($no_rekmed, $key, $data);
			}
		
		$sql2="SELECT * FROM tb_hasil where no_rekmed=$no_rekmed";

		$stmt2 = $DB_con->prepare($sql2);
		$stmt2->execute();
		$row2 = $stmt2->fetch(PDO::FETCH_ASSOC);

			if ($row2['no_rekmed']==$no_rekmed) 
			{
				$lkscrud->update_hasil($no_rekmed, $key, $data);
			}
			else
			{
				$lkscrud->insert_hasil($no_rekmed, $key, $data);
			}
	}
?>