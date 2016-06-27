<?php
// Checkbox spesimen
$pdf->setxy(63.5,62.5);
if($col_darah_hijau==''||$col_darah_hijau==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}

$pdf->setxy(83.5,62.5);
if($col_urine_hijau==''||$col_urine_hijau==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}

$pdf->setxy(103.9,62.5);
if($col_feses_hijau==''||$col_feses_hijau==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}

$pdf->setxy(124.2,62.5);
if($col_cairan_hijau=='')
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
	$pdf->setxy(139,61);
	$pdf->cell (28,5,$col_cairan_hijau,0,0,'L');
}

//Chekbox Asal Spesimen
$pdf->setxy(71.4,67.85);
if($col_vena_hijau==''||$col_vena_hijau==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}

$pdf->setxy(103.9,67.5);
if($col_arteri_hijau=='')
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");

	$pdf->setxy(118,65.6);
	$pdf->cell (30,5,$col_arteri_hijau,0,0,'L');
}

//Checkbox Tabung
//EDTA
$pdf->setxy(61.3,73.19);
if($col_EDTA_hijau==''||$col_EDTA_hijau==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}
//Plain
$pdf->setxy(86.7,73.19);
if($col_plain_hijau==''||$col_plain_hijau==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}
//Citrate
$pdf->setxy(109.4,73.19);
if($col_citrate_hijau==''||$col_citrate_hijau==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}
//Heparin
$pdf->setxy(61.3,77.8);
if($col_heparin_hijau==''||$col_heparin_hijau==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}
//SST
$pdf->setxy(86.7,77.8);
if($col_sst_hijau==''||$col_sst_hijau==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}
//LED
$pdf->setxy(109.4,77.8);
if($col_led_hijau==''||$col_led_hijau==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}
//Tabung Lainnya
$pdf->setxy(131.9,75.6);
if($col_tube_etc_hijau=='')
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");

	$pdf->setxy(135,74);
	$pdf->cell (28,5,$col_tube_etc_hijau,0,0,'L');
}

//kondisi spesimen
$pdf->setxy(77.2,84.5);
if($col_baik_hijau==''||$col_baik_hijau==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}

$pdf->setxy(93.5,84.5);
if($col_lisis_hijau==''||$col_lisis_hijau==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}

$pdf->setxy(109.3,84.5);
if($col_lipemik_hijau==''||$col_lipemik_hijau==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}

$pdf->setxy(131.8,84.5);
if($col_ikterik_hijau==''||$col_ikterik_hijau==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}

//volume spesimen
$pdf->setxy(78,90.7);
if($col_cukup_hijau==''||$col_cukup_hijau==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}

$pdf->setxy(101.8,90.7);
if($col_kurang_hijau==''||$col_kurang_hijau==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}

$pdf->setxy(128.2,90.7);
if($col_sngtkrng_hijau==''||$col_sngtkrng_hijau==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}

//Dikirim ke
//Hematologi
$pdf->setxy(64.6,96.7);
if($col_hematologi_hijau==''||$col_hematologi_hijau==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}
//Hemostatis
$pdf->setxy(101.1,96.7);
if($col_hemostatis_hijau==''||$col_hemostatis_hijau==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}
//Analisis
$pdf->setxy(133.3,96.2);
if($col_analisis_cairan_hijau==''||$col_analisis_cairan_hijau==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}
//KImia Klinik
$pdf->setxy(64.6,101.3);
if($col_kimia_klinik_hijau==''||$col_kimia_klinik_hijau==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}
//Imunoserologi
$pdf->setxy(101.1,101.3);
if($col_imunoserologi_hijau==''||$col_imunoserologi_hijau==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}

//ANalyzer
$pdf->setxy(71.2,107.5);
if($analyzer_hijau=='')
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");

	$pdf->setxy(75,105.5);
	$pdf->cell (28,5,$analyzer_hijau,0,0,'L');
}
?>