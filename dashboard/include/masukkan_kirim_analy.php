<?php 
//LKS_MERAH
	if(isset($_POST['inputhematologi'])){
							$inputhematologi = 1;
	}
	else
	{
							$inputhematologi = 0;
	}
	if(isset($_POST['inputhemostatis'])){
							$inputhemostatis = 1;
	}
	else
	{
							$inputhemostatis = 0;
	}
	if(isset($_POST['inputanalisiscairan'])){
							$inputanalisiscairan = 1;
	}
	else
	{
							$inputanalisiscairan = 0;
	}
	if(isset($_POST['inputkimiaklinik'])){
							$inputkimiaklinik = 1;
	}
	else
	{
							$inputkimiaklinik = 0;
	}
	if(isset($_POST['inputimunoserologi'])){
							$inputimunoserologi = 1;
	}
	else
	{
							$inputimunoserologi = 0;
	}
	
	if(empty($_POST['inputAnalyzertext'])){
							$inputAnalyzer = '';
	}
	else
	{
							$inputAnalyzer = $_POST['inputAnalyzertext'];
	}
	//END LKS MERAH

	//LKS_Hijau
	if(isset($_POST['inputhematologi_hijau'])){
							$inputhematologi_hijau = 1;
	}
	else
	{
							$inputhematologi_hijau = 0;
	}
	if(isset($_POST['inputhemostatis_hijau'])){
							$inputhemostatis_hijau = 1;
	}
	else
	{
							$inputhemostatis_hijau = 0;
	}
	if(isset($_POST['inputanalisiscairan_hijau'])){
							$inputanalisiscairan_hijau = 1;
	}
	else
	{
							$inputanalisiscairan_hijau = 0;
	}
	if(isset($_POST['inputkimiaklinik_hijau'])){
							$inputkimiaklinik_hijau = 1;
	}
	else
	{
							$inputkimiaklinik_hijau = 0;
	}
	if(isset($_POST['inputimunoserologi_hijau'])){
							$inputimunoserologi_hijau = 1;
	}
	else
	{
							$inputimunoserologi_hijau = 0;
	}
	
	if(empty($_POST['inputAnalyzertext_hijau'])){
							$inputAnalyzer_hijau = '';
	}
	else
	{
							$inputAnalyzer_hijau = $_POST['inputAnalyzertext_hijau'];
	}
	//END LKS HIJAU
?>