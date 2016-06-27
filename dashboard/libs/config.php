<?php 
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}

	//menambahkan alamat ke variable uri(object) yang telah tersimpa --> $uri<save value=https:// or http://> .= $_SERVER['HTTP_HOST'] --> variable baru (value) yang masuk ke variable lama($uri) merge(meratakan variable) masuk ke variable yang sudah tersimpan sebelumnya


	$uri .= $_SERVER['HTTP_HOST'];


	$config = array("site" => "$uri/LKS-Patologi/dashboard/" );


	// Menutup script pada file .php
 	// 	header('Location: '.$uri.'/dashboard/');

	// exit;	
?>

