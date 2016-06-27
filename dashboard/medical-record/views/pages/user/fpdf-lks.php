<?php
require_once 'pdif/fpdf18/fpdf.php';
require_once 'pdif/fpdi154/fpdi.php';
if(isset($_GET['lks']))
{
	$no_rekmed = $_GET['lks'];
	extract($lkscrud->ekstrak_data_by_norekmed($no_rekmed));
	extract($lkscrud->ekstrak_data_by_norekmed_tes_hasil($no_rekmed));
	extract($lkscrud->ekstrak_data_by_norekmed_tes_hasil_hijau($no_rekmed));
}
$pdf = new fpdi();
$pdf->SetAutoPageBreak(1,0);
$pdf->AddPage('L','A4');
$pdf->setSourceFile("doc.pdf");
$tpl = $pdf->importPage(1);
$pdf->useTemplate($tpl, 0, 0, 297);
$pdf->SetFont('Arial','',10);
require 'fpdf-fill-lks.php';
// 
$pdf->AddPage('L','A4');
$pdf->setSourceFile("doc.pdf");
$tpl = $pdf->importPage(1);
$pdf->useTemplate($tpl, 0, 0, 297);
$pdf->SetFont('Arial','',10);
require 'fpdf-fill-lks-2.php';
	if(isset($_GET['download']))
	{
		$pdf->Output('LEMBAR KENDALI SAMPEL (LKS) - '.$no_rekmed.'.pdf','D');
	}
	else
	{
		$pdf->Output($_SERVER['DOCUMENT_ROOT'].'/LKS-Patologi/dashboard/ROOT_PDF/'.$no_rekmed.'.pdf','F');
		header('Location: ../../../ROOT_PDF/'.$no_rekmed.'.pdf');
	}
?>