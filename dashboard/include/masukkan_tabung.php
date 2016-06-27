<?php 
	//LKS Merah
	if(isset($_POST['inputEDTA'])){
							$inputEDTA = 1;
	}
	else
	{
							$inputEDTA = 0;
	}

	if(isset($_POST['inputplain'])){
							$inputplain = 1;
	}
	else
	{
							$inputplain = 0;
	}

	if(isset($_POST['inputcitrate'])){
							$inputcitrate = 1;
	}
	else
	{
							$inputcitrate = 0;
	}

	if(empty($_POST['inputTubetext'])){
							$inputTube = '';
	}
	else
	{
							$inputTube = $_POST['inputTubetext'];
	}

	if(isset($_POST['inputheparin'])){
							$inputheparin = 1;
	}
	else
	{
							$inputheparin = 0;
	}

	if(isset($_POST['inputsst'])){
							$inputsst = 1;
	}
	else
	{
							$inputsst = 0;
	}
	
	if(isset($_POST['inputled'])){
							$inputled = 1;
	}
	else
	{
							$inputled = 0;
	}
	//END LKS MERAH

	//LKS HIJAU
	if(isset($_POST['inputEDTA_hijau'])){
							$inputEDTA_hijau = 1;
	}
	else
	{
							$inputEDTA_hijau = 0;
	}

	if(isset($_POST['inputplain_hijau'])){
							$inputplain_hijau = 1;
	}
	else
	{
							$inputplain_hijau = 0;
	}

	if(isset($_POST['inputcitrate_hijau'])){
							$inputcitrate_hijau = 1;
	}
	else
	{
							$inputcitrate_hijau = 0;
	}

	if(empty($_POST['inputTubetext_hijau'])){
							$inputTube_hijau = '';
	}
	else
	{
							$inputTube_hijau = $_POST['inputTubetext_hijau'];
	}

	if(isset($_POST['inputheparin_hijau'])){
							$inputheparin_hijau = 1;
	}
	else
	{
							$inputheparin_hijau = 0;
	}

	if(isset($_POST['inputsst_hijau'])){
							$inputsst_hijau = 1;
	}
	else
	{
							$inputsst_hijau = 0;
	}
	
	if(isset($_POST['inputled_hijau'])){
							$inputled_hijau = 1;
	}
	else
	{
							$inputled_hijau = 0;
	}
	//END LKS HIJAU
?>