<?php 
if (isset($_POST['btn-submit']))
{
	$username = strtolower($_POST['username_in']);
	$password_plain = strtolower($_POST['password_in']);
		
	$stmt=$DB_con->prepare("SELECT * FROM tb_user WHERE username=:username");
	$stmt->execute(array(":username"=>$username));

	if($stmt->rowCount()>0)
	{
		while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) 
		{
			if (password_verify($password_plain, $row['password'])) 
			{
				$_SESSION['username'] = $username;
				$_SESSION['nama'] = $row['nama'];
				$_SESSION['level_acc'] = $row['level_acc'];
				$_SESSION['jenis_kel'] = $row['jenis_kel'];
				$_SESSION['password'] = $password_plain;

				if($row['level_acc']=='admin')
				{
					header('Location: ../admin.page/');
				}
				else
				{
					header('Location: ../user.page/');
				}
			}
			else
			{
				$error_data="<div class='alert alert-danger alert-dismissible fade in' role='alert'>
				Username dan Password yang diinputkan tidak cocok
			<button type='button' class='close' data-dismiss='alert'>
				<span aria-hidden='true'>&times;</span>
				<span class='sr-only'>Close</span>
			</button>
			</div>";
			}
		}
	}
	else
	{
		$error_data="<div class='alert alert-danger alert-dismissible fade in' role='alert'>
				Username dan Password yang diinputkan tidak cocok
			<button type='button' class='close' data-dismiss='alert'>
				<span aria-hidden='true'>&times;</span>
				<span class='sr-only'>Close</span>
			</button>
			</div>";
	}
}
?>

<!-- Isi data -->
<body>
<span class="detilnya">
	<img src="<?php echo $config['site']; ?>assets/css/Material/black-unhas.png" alt="Logos Unhas" width="30px" height="40px">rsp. Universitas Hasanuddin
</span>

<div class="col-xs-12 center">
	<div class="container-logo center">
		<img src="<?php echo $config['site']; ?>assets/css/Material/banner-lks.png" alt="Logo Mas" width="300px" height="150px">
	</div>
</div>

<div class="container">
	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-8 center">
		<?php 
		if(isset($error_data))
		{
			echo $error_data;
		}
		?>
	</div>
</div>

<div class="col-lg-4 col-md-5 col-sm-7 col-xs-11 center">
	<div class="login-block">
		<p>Login with your Username and Password</p>

		<form method="POST">
			<input type="text" id="username" name="username_in" placeholder="Username" required autofocus>
			<input type="password" id="password" name="password_in" placeholder="Password" required>
			<button type="submit" name="btn-submit">SUBMIT</button>
		</form>
		
	</div>	
</div>