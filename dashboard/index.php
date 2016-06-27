<?php 
	session_start();

	if (empty($_SESSION['username']))
	{
		header('Location: login.page/');
	} 
	else
	{
		if ($_SESSION['level_acc'] == 'admin')
		{
			header('Location: admin.page/');
		}
		elseif ($_SESSION['level_acc'] == 'user')
		{
			header('Location: user.page/');
		}
		else
		{
			header('location: login.page/');
		}
	}
?>