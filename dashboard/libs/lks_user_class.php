<?php 
class user_class
{
	private $db;

	function __construct($DB_con)
	{
		$this->db = $DB_con;
	}

	public function masukan_user($username,$password,$nama,$jenis_kel,$telpon,$alamat,$level_acc,$fileNewname)
	{
		$password_new_hash = password_hash($password, PASSWORD_BCRYPT);
		
		$sql = "INSERT INTO tb_user (username,password,nama,jenis_kel,telpon,alamat,level_acc,pic_account) 
				VALUES (:username,:password,:nama,:jenis_kel,:telpon,:alamat,:level_acc,:fileNewname)";
			
		try 
		{
			$stmt = $this->db->prepare($sql);

			$stmt->bindparam(":username",$username,PDO::PARAM_STR);
			$stmt->bindparam(":password",$password_new_hash);
			$stmt->bindparam(":nama",$nama,PDO::PARAM_STR);
			$stmt->bindparam(":jenis_kel",$jenis_kel,PDO::PARAM_STR);
			$stmt->bindparam(":telpon",$telpon,PDO::PARAM_INT);
			$stmt->bindparam(":alamat",$alamat,PDO::PARAM_STR);
			$stmt->bindparam(":level_acc",$level_acc,PDO::PARAM_STR);
			$stmt->bindparam(":fileNewname",$fileNewname,PDO::PARAM_STR);

			$stmt->execute();
			return true;
		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();
			return false;	
		}
	}

	public function edit_user($username,$password,$nama,$jenis_kel,$telpon,$alamat,$level_acc,$fileNewname)
	{
		$password_new_hash = password_hash($password, PASSWORD_BCRYPT);

		$sql = "UPDATE tb_user SET 	password=:password,
									nama=:nama,
									jenis_kel=:jenis_kel,
									telpon=:telpon,
									alamat=:alamat,
									level_acc=:level_acc,
									pic_account=:fileNewname
								WHERE 
									username=:username";
			
		try 
		{
			$stmt = $this->db->prepare($sql);

			$stmt->bindparam(":username",$username,PDO::PARAM_STR);
			$stmt->bindparam(":password",$password_new_hash);
			$stmt->bindparam(":nama",$nama,PDO::PARAM_STR);
			$stmt->bindparam(":jenis_kel",$jenis_kel,PDO::PARAM_STR);
			$stmt->bindparam(":telpon",$telpon,PDO::PARAM_INT);
			$stmt->bindparam(":alamat",$alamat,PDO::PARAM_STR);
			$stmt->bindparam(":level_acc",$level_acc,PDO::PARAM_STR);
			$stmt->bindparam(":fileNewname",$fileNewname,PDO::PARAM_STR);

			$stmt->execute();
			return true;
		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();
			return false;	
		}
	}

	public function delete_user($username)
	{
		$sql = "DELETE FROM tb_user WHERE username=:username";

		$stmt = $this->db->prepare($sql);

		$stmt->bindparam(":username", $username, PDO::PARAM_STR);
		$stmt->execute();

		return true;
	}

	function config()
	{
		if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
				$uri = 'https://';
			} else {
				$uri = 'http://';
			}
		
		$uri .= $_SERVER['HTTP_HOST'];
			
		$config = array("site" => "$uri/LKS-Patologi/dashboard/" );	
	}
	
	public function user_admin_dataview ($query)
	{
		$stmt = $this->db->prepare($query);
		$stmt->execute();

		global $config;
		
		if($stmt->rowCount()>0)
		{
			while($row = $stmt->fetch(PDO::FETCH_ASSOC))
			{
			?>
				<div class="daftar-user center">
					<div class="user-kop">
						<span class="label label-danger" style="float:right;font-size:12px;">Admin</span>
						<span class="icon-user-md"></span>&nbsp;Admin
					</div>

					<div class="user-content">
						<span>Username&nbsp;</span> 
						<span class="huruf-tipis"><?php echo $row['username']; ?></span>
						<span class="garis-samping"></span>
						<span>Nama Lengkap&nbsp;</span>
						<span class="huruf-tipis"><?php echo $row['nama']; ?></span>
						<span class="garis-samping"></span>
						<span>Jenis Kelamin&nbsp;</span>
						<span class="huruf-tipis"><?php echo $row['jenis_kel']; ?></span>
					</div>	

					<div class="block-background"></div>
				
					<div class="btn-group-user">
						<button type="button" class="edit-user" onclick="location='../edit-data-admin/?u=<?php echo $row['username'];?>'" style="margin-right:-2px;"><span class="icon-ok-sign"></span>&nbsp;Edit</button>
						<button type="button" class="delete-user" data-toggle="modal" data-target="#deletemodal-<?php echo $row['username'];?>"><span class="icon-remove-sign"></span>&nbsp;Delete</button>
					</div>

					<div class="lingkaran" style="<?php 
							// 
							$nama_file= $_SERVER['DOCUMENT_ROOT']."/LKS-Patologi/dashboard/UPLOAD_FILES/Images/Users_img/";
							// 
							$nama_file .= md5($row['username']."1");

							$name_file_clone = md5($row['username']."1");

							// 
							$data_exist=file_exists($nama_file);

							if ($data_exist) 
							{
								echo "background:url('".$config['site']."UPLOAD_FILES/Images/Users_img/".$name_file_clone."') no-repeat;background-size:cover;background-position:center center;";
							} 
							else 
							{
								if($row['jenis_kel']=='Laki-laki')
								{
									echo "background: url('".$config['site']."assets/css/Material/user_acc.png') no-repeat;background-size:525px 390px;background-position:-356px -203px;";
								}
								else
								{
									echo "background: url('".$config['site']."assets/css/Material/user_acc.png') no-repeat;background-size:525px 390px;background-position:-178px -24px;";
								}
							}
						?>">
					</div>
				</div>
			<?php
			}
		}
		else
		{
		?>
			<div align="center" style="margin-top:55px;">
				<img id="logo-not" src="<?php echo $config['site'];?>assets/css/Material/clipboard65.png" width="256px" height="256px" alt="not-found" align="center">
				<span id="tdk-ditemukan">data tidak ditemukan</span>
			</div>
		<?php	
		}
	}
	public function  tampilkan_modal_user($query)
	{
		$stmt = $this->db->prepare($query);
		$stmt->execute();

		global $config;

		if($stmt->rowCount()>0)
		{
			while($row = $stmt->fetch(PDO::FETCH_ASSOC))
			{?>
				<div class="modal fade" id="deletemodal-<?php echo $row['username'];?>">
					<div class="modal-dialog">
						<div class="modal-content">
								<div class="modal-header">
									<button class="close" type="button" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
									<h3 class="modal-title"><span class="icon-minus-sign" style="color:#da251d;"></span>DATA YANG AKAN DIHAPUS</h3>
								</div>
								<div class="modal-body" style="padding-left:50px;padding-right:50px;">
									<img src="<?php echo $config["site"]; ?>assets/css/Material/gym5.png" height="100px" width="100px" alt="gambar-data-user" style="float:left;">
									<div style="border:0;border-left:2px dotted #848D93;height:100px; display:inline-block; margin-left:30px;margin-right:30px;"></div>
									<div class="badan-modal" style="display:inline-block;">
										<span class="huruf-besar">Username&nbsp;</span> 
										<span class="huruf-kecil"><?php echo $row['username']; ?></span><br>
										<span class="huruf-besar">Nama Lengkap&nbsp;</span>
										<span class="huruf-kecil"><?php echo $row['nama']; ?></span><br>
										<span class="huruf-besar">Jenis Kelamin&nbsp;</span>
										<span class="huruf-kecil"><?php echo $row['jenis_kel']; ?></span>					
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
									<button type="button" class="btn btn-danger" onclick="location='<?php 
											if ($row['level_acc']=='admin')
											{
												echo "delete-data-admin/?u=".$row['username']."&jn=".$row['level_acc'];
											}
											else
											{
												echo "delete-data-user/?u=".$row['username']."&jn=".$row['level_acc'];
											}
										?>'">Hapus Data User</button>
								</div>
						</div>
					</div>
				</div>
		<?php }
		}
	}

	public function user_admin_dataview_2 ($query)
	{
		$stmt = $this->db->prepare($query);
		$stmt->execute();

		global $config;
		if($stmt->rowCount()>0)
		{
			while($row = $stmt->fetch(PDO::FETCH_ASSOC))
			{
			?>
			<div class="daftar-user center">
				<div class="user-kop" style="background-color:rgba(24, 133, 35, 0.7215686274509804);border:1px solid rgba(13, 88, 20, 1.0);border-bottom:1px dotted #B4B9BC;">
					<span class="label label-success" style="float:right;font-size:12px;">user</span>
					<span class="icon-user-md"></span>&nbsp;user
				</div>

				<div class="user-content" style="border: 1px solid rgba(185, 0, 4, 1.0);border-top: none;">
					<span>Username&nbsp;</span> 
					<span class="huruf-tipis"><?php echo $row['username']; ?></span>
					<span class="garis-samping"></span>
					<span>Nama Lengkap&nbsp;</span>
					<span class="huruf-tipis"><?php echo $row['nama']; ?></span>
					<span class="garis-samping"></span>
					<span>Jenis Kelamin&nbsp;</span>
					<span class="huruf-tipis"><?php echo $row['jenis_kel']; ?></span>
				</div>	
					
				<div class="block-background"></div>
					
				<div class="btn-group-user">
					<button type="button" class="edit-user" onclick="location='../edit-data-user/?u=<?php echo $row['username']; ?>'"  style="margin-right:-2px;"><span class="icon-ok-sign"></span>&nbsp;Edit</button>

					<button type="button" class="delete-user" data-toggle="modal" data-target="#deletemodal-<?php echo $row['username']; ?>"><span class="icon-remove-sign"></span>&nbsp;Delete</button>
				</div>
		
				<div class="lingkaran" style="<?php 
						// 
						$nama_file= $_SERVER['DOCUMENT_ROOT']."/LKS-Patologi/dashboard/UPLOAD_FILES/Images/Users_img/";
						// 
						$nama_file .= md5($row['username']."1");

						$name_file_clone = md5($row['username']."1");

						// 
						$data_exist=file_exists($nama_file);

						if ($data_exist) 
						{
							echo "background:url('".$config['site']."UPLOAD_FILES/Images/Users_img/".$name_file_clone."') no-repeat;background-size:cover;background-position:center center;";
						} 
						else 
						{
							if($row['jenis_kel']=='Laki-laki')
							{
								echo "background: url('".$config['site']."assets/css/Material/user_acc.png') no-repeat;background-size:525px 390px;background-position:-356px -203px;";
							}
							else
							{
								echo "background: url('".$config['site']."assets/css/Material/user_acc.png') no-repeat;background-size:525px 390px;background-position:-178px -24px;";
							}
						}
					?>">
				</div>
			</div>
			<?php
			}
		}
		else
		{
		?>
			<div align="center" style="margin-top:55px;">
				<img id="logo-not" src="<?php echo $config['site']; ?>assets/css/Material/clipboard65.png" width="256px" height="256px" alt="not-found" align="center">
				<span id="tdk-ditemukan">data tidak ditemukan</span>
			</div>
		<?php
		}
	}

	public function getid_by_username($username)
	{
			$stmt = $this->db->prepare("SELECT * FROM tb_user WHERE username=:username");
			$stmt->execute(array(":username" => $username));
			$editRow = $stmt->fetch(PDO::FETCH_ASSOC);

			return $editRow;
	}

	public function hitung_jumlah_record_user()
	{
		$sql="SELECT count(*) as jumlah_user FROM tb_user";
		
		try 
		{
			$stmt = $this->db->prepare($sql);
			$stmt->execute();

			$row = $stmt->fetch(PDO::FETCH_ASSOC);

			echo $row['jumlah_user'];

			return true;
		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();

			return false;
		}
	}

}
?>