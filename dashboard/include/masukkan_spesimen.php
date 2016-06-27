<?php 
	//LKS MERAH
	if(isset($_POST['inputdarah'])){
							$inputdarah = 1;
	}
	else
	{
							$inputdarah = 0;
	}

	if(isset($_POST['inputurine'])){
							$inputurine = 1;
	}
	else
	{
							$inputurine = 0;
	}

	if(isset($_POST['inputfeses'])){
							$inputfeses = 1;
	}
	else
	{
							$inputfeses = 0;
	}


	if(isset($_POST['inputvena'])){
							$inputvena = 1;
	}
	else
	{
							$inputvena = 0;
	}

	if(empty($_POST['inputarteritext'])){
							$inputarteri = '';
	}
	else
	{
							$inputarteri = $_POST['inputarteritext'];
	}
	if(empty($_POST['inputcairantext'])){
							$inputcairan = '';
	}
	else
	{
							$inputcairan = $_POST['inputcairantext'];
	}
	//END LKS MERAH

	//LKS hijau
	if(isset($_POST['inputdarah_hijau'])){
							$inputdarah_hijau = 1;
	}
	else
	{
							$inputdarah_hijau = 0;
	}

	if(isset($_POST['inputurine_hijau'])){
							$inputurine_hijau = 1;
	}
	else
	{
							$inputurine_hijau = 0;
	}

	if(isset($_POST['inputfeses_hijau'])){
							$inputfeses_hijau = 1;
	}
	else
	{
							$inputfeses_hijau = 0;
	}


	if(isset($_POST['inputvena_hijau'])){
							$inputvena_hijau = 1;
	}
	else
	{
							$inputvena_hijau = 0;
	}

	if(empty($_POST['inputarteritext_hijau'])){
							$inputarteri_hijau = '';
	}
	else
	{
							$inputarteri_hijau = $_POST['inputarteritext_hijau'];
	}
	if(empty($_POST['inputcairantext_hijau'])){
							$inputcairan_hijau = '';
	}
	else
	{
							$inputcairan_hijau = $_POST['inputcairantext_hijau'];
	}
	//end LKS HIjau
 ?>