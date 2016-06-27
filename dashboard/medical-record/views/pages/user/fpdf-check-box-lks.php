<?php
// Checkbox spesimen
$pdf->setxy(63.5,62.5);
if($col_darah==''||$col_darah==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}

$pdf->setxy(83.5,62.5);
if($col_urine==''||$col_urine==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}

$pdf->setxy(103.9,62.5);
if($col_feses==''||$col_feses==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}

$pdf->setxy(124.2,62.5);
if($col_cairan=='')
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
	$pdf->setxy(139,61);
	$pdf->cell (28,5,$col_cairan,0,0,'L');
}

//Chekbox Asal Spesimen
$pdf->setxy(71.4,67.85);
if($col_vena==''||$col_vena==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}

$pdf->setxy(103.9,67.5);
if($col_arteri=='')
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");

	$pdf->setxy(118,65.6);
	$pdf->cell (30,5,$col_arteri,0,0,'L');
}

//Checkbox Tabung
//EDTA
$pdf->setxy(61.3,73.19);
if($col_EDTA==''||$col_EDTA==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}
//Plain
$pdf->setxy(86.7,73.19);
if($col_plain==''||$col_plain==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}
//Citrate
$pdf->setxy(109.4,73.19);
if($col_citrate==''||$col_citrate==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}
//Heparin
$pdf->setxy(61.3,77.8);
if($col_heparin==''||$col_heparin==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}
//SST
$pdf->setxy(86.7,77.8);
if($col_sst==''||$col_sst==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}
//LED
$pdf->setxy(109.4,77.8);
if($col_led==''||$col_led==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}
//Tabung Lainnya
$pdf->setxy(131.9,75.6);
if($col_tube_etc=='')
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");

	$pdf->setxy(135,74);
	$pdf->cell (28,5,$col_tube_etc,0,0,'L');
}

//kondisi spesimen
$pdf->setxy(77.2,84.5);
if($col_baik==''||$col_baik==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}

$pdf->setxy(93.5,84.5);
if($col_lisis==''||$col_lisis==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}

$pdf->setxy(109.3,84.5);
if($col_lipemik==''||$col_lipemik==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}

$pdf->setxy(131.8,84.5);
if($col_ikterik==''||$col_ikterik==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}

//volume spesimen
$pdf->setxy(78,90.7);
if($col_cukup==''||$col_cukup==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}

$pdf->setxy(101.8,90.7);
if($col_kurang==''||$col_kurang==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}

$pdf->setxy(128.2,90.7);
if($col_sngtkrng==''||$col_sngtkrng==0)
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
if($col_hematologi==''||$col_hematologi==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}
//Hemostatis
$pdf->setxy(101.1,96.7);
if($col_hemostatis==''||$col_hemostatis==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}
//Analisis
$pdf->setxy(133.3,96.2);
if($col_analisis_cairan==''||$col_analisis_cairan==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}
//KImia Klinik
$pdf->setxy(64.6,101.3);
if($col_kimia_klinik==''||$col_kimia_klinik==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}
//Imunoserologi
$pdf->setxy(101.1,101.3);
if($col_imunoserologi==''||$col_imunoserologi==0)
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");
}

//ANalyzer+
$pdf->setxy(71.2,107.5);
if($analyzer=='')
{
	$pdf->write(1,"");	
}
else 
{
	$pdf->write(1,"X");

	$pdf->setxy(75,105.5);
	$pdf->cell (28,5,$analyzer,0,0,'L');
}

?>