<?php 
$pdf->setxy(182,14);
	$judul_tabel = array(
							array('nama_kolom'=>'No.','lebar'=>8,'align'=>'C'),
							array('nama_kolom'=>'KN','lebar'=>20,'align'=>'C'),
							array('nama_kolom'=>'Nama Tes','lebar'=>76,'align'=>'C'),
						);
	foreach ($judul_tabel as $judul_kolom) 
	{
		$pdf->cell($judul_kolom['lebar'],5,$judul_kolom['nama_kolom'],1,0,$judul_kolom['align']);
	}
$pdf->ln();
	// tb_tes
	$stmt = $DB_con->prepare("SELECT tes_hijau_1, tes_hijau_2, tes_hijau_3, tes_hijau_4, tes_hijau_5, tes_hijau_6, tes_hijau_7, tes_hijau_8, tes_hijau_9, tes_hijau_10, tes_hijau_11, tes_hijau_12, tes_hijau_13, tes_hijau_14, tes_hijau_15, tes_hijau_16, tes_hijau_17, tes_hijau_18 FROM tb_tes_hijau WHERE no_rekmed='$no_rekmed'");
	$stmt->execute();
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	
	// tb__hasil
	$stmt_hasil = $DB_con->prepare("SELECT hasil_hijau_1, hasil_hijau_2, hasil_hijau_3, hasil_hijau_4, hasil_hijau_5, hasil_hijau_6, hasil_hijau_7, hasil_hijau_8, hasil_hijau_9, hasil_hijau_10, hasil_hijau_11, hasil_hijau_12, hasil_hijau_13, hasil_hijau_14, hasil_hijau_15, hasil_hijau_16, hasil_hijau_17, hasil_hijau_18 FROM tb_hasil_hijau WHERE no_rekmed='$no_rekmed'");
	$stmt_hasil->execute();
	$row_hasil = $stmt_hasil->fetch(PDO::FETCH_ASSOC);
	
	// tb_nama_tes
	$stmt_nama_tes = $DB_con->prepare("SELECT * FROM tb_nama_tes");
	$stmt_nama_tes->execute();
	
	$i=1;
	while ($row_nama_tes = $stmt_nama_tes->fetch(PDO::FETCH_ASSOC))
	{
		foreach ($row as $tes) 
		{
			if (empty($tes)) 
			{
				echo "";
			}
			else
			{
				if ($tes == $row_nama_tes['kd_notasi']) 
				{
					$pdf->setx(182);
					$pdf->cell(8,8,$i++.".","LR","C");
					$pdf->cell(20,8,$tes,"LR","L");
					$pdf->cell(76,8,$row_nama_tes['nama_tes'],"LR","L");
					$pdf->ln();
				} 
			}
		}
	}
$pdf->setx(182);
$pdf->cell(104,7,"","T",0,"L");
$pdf->setxy(51,16);
$pdf->cell (48,5,$no_lab,0,0,'R');
$pdf->setxy(115,16);
$pdf->cell (40,5,$tgl_tdy,0,0,'L');
$pdf->setxy(76,26.2);
$pdf->cell (40,5,$no_rekmed,0,0,'C');
$pdf->setxy(52,26.2);
$pdf->cell (15,5,$fle_jam,0,0,'L');
$pdf->setxy(125,26.2);
$pdf->cell (40,5,$ruangan,0,0,'C');
$pdf->setxy(109,33);
$pdf->cell (43,5,$nama_pasien,0,0,'L');
$pdf->setxy(109,40);
$pdf->cell (43,5,$tgl_lhr,0,0,'L');
$pdf->setxy(109,46.5);
$pdf->cell (58,5,$dokter_krm,0,0,'L');
$pdf->setxy(40,52);
$pdf->cell (30,5,$lm_puasa,0,0,'C');
$pdf->setxy(109,52);
$pdf->cell (58,5,$diagnosis,0,0,'L');

require 'fpdf-check-box-lks-2.php';

$pdf->setxy(52,119.3);
$pdf->cell (30,5,$analisis_mulai_hijau,0,0,'L');
$pdf->setxy(114,119.3);
$pdf->cell (35,5,$analisis_berakhir_hijau,0,0,'L');

// row
$pdf->setxy(51.5,132.7);
$pdf->cell (18,5,$tes_hijau_1,0,0,'L');
$pdf->cell (17.5,5,$hasil_hijau_1,0,0,'L');

$pdf->setxy(91.17,132.7);
$pdf->cell (20,5,$tes_hijau_7,0,0,'L');
$pdf->cell (19.8,5,$hasil_hijau_7,0,0,'L');

$pdf->setxy(133.8,132.7);
$pdf->cell (20,5,$tes_hijau_13,0,0,'L');
$pdf->cell (20,5,$hasil_hijau_13,0,0,'L');

// row2
$pdf->setxy(51.5,138.3);
$pdf->cell (18,5,$tes_hijau_2,0,0,'L');
$pdf->cell (17.5,5,$hasil_hijau_2,0,0,'L');

$pdf->setxy(91.17,138.3);
$pdf->cell (20,5,$tes_hijau_8,0,0,'L');
$pdf->cell (19.8,5,$hasil_hijau_8,0,0,'L');

$pdf->setxy(133.8,138.3);
$pdf->cell (20,5,$tes_hijau_14,0,0,'L');
$pdf->cell (20,5,$hasil_hijau_14,0,0,'L');

// row3
$pdf->setxy(51.5,143.5);
$pdf->cell (18,5,$tes_hijau_3,0,0,'L');
$pdf->cell (17.5,5,$hasil_hijau_3,0,0,'L');

$pdf->setxy(91.17,143.5);
$pdf->cell (20,5,$tes_hijau_9,0,0,'L');
$pdf->cell (19.8,5,$hasil_hijau_9,0,0,'L');

$pdf->setxy(133.8,143.5);
$pdf->cell (20,5,$tes_hijau_15,0,0,'L');
$pdf->cell (20,5,$hasil_hijau_15,0,0,'L');

// row4
$pdf->setxy(51.5,148.8);
$pdf->cell (18,5,$tes_hijau_4,0,0,'L');
$pdf->cell (17.5,5,$hasil_hijau_4,0,0,'L');

$pdf->setxy(91.17,148.8);
$pdf->cell (20,5,$tes_hijau_10,0,0,'L');
$pdf->cell (19.8,5,$hasil_hijau_10,0,0,'L');

$pdf->setxy(133.8,148.8);
$pdf->cell (20,5,$tes_hijau_16,0,0,'L');
$pdf->cell (20,5,$hasil_hijau_16,0,0,'L');

// row5
$pdf->setxy(51.5,154.3);
$pdf->cell (18,5,$tes_hijau_5,0,0,'L');
$pdf->cell (17.5,5,$hasil_hijau_5,0,0,'L');

$pdf->setxy(91.17,154.3);
$pdf->cell (20,5,$tes_hijau_11,0,0,'L');
$pdf->cell (19.8,5,$hasil_hijau_11,0,0,'L');

$pdf->setxy(133.8,154.3);
$pdf->cell (20,5,$tes_hijau_17,0,0,'L');
$pdf->cell (20,5,$hasil_hijau_17,0,0,'L');

// last row
$pdf->setxy(51.5,159.8);
$pdf->cell (18,5,$tes_hijau_6,0,0,'L');
$pdf->cell (17.5,5,$hasil_hijau_6,0,0,'L');

$pdf->setxy(91.17,159.8);
$pdf->cell (20,5,$tes_hijau_12,0,0,'L');
$pdf->cell (19.8,5,$hasil_hijau_12,0,0,'L');

$pdf->setxy(133.8,159.8);
$pdf->cell (20,5,$tes_hijau_18,0,0,'L');
$pdf->cell (20,5,$hasil_hijau_18,0,0,'L');


$pdf->setxy(51.9,178);
$pdf->cell (30,5,$verifikator_i,0,0,'L');
$pdf->setxy(109,178);
$pdf->cell (30,5,$verifikator_ii,0,0,'L');

$pdf->setxy(51.9,192);
$pdf->cell (30,5,$validasi,0,0,'L');

$pdf->setxy(100,195);
$pdf->cell (65,5,$interpretasi,0,0,'C');

$pdf->setFont('Times','I',10);
$pdf->setxy(229,205);
$pdf->write(1,"Lembar Kendali Sampel (LKS) : Hijau")
?>