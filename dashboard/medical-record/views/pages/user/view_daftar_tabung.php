<?php 
	if(isset($_GET['tube_name']))
	{
		$tube_name=$_GET['tube_name'];
		extract($lkscrud->ekstrak_tube_by_name($tube_name));
	}
	else 
	{
		header('location: view_data_lks.php');
	}
?>
<body>
    <section class="hbox stretch">
    <?php 
        require 'menu.php';
    ?>
        <!-- .vbox -->
        <section id="content">
            <section class="vbox">
                <section class="bg-light lter">
                    <section class="hbox stretch">
                        <!-- .aside -->
                        <aside>
                            <section class="vbox">
                            	<section class="scrollable">
									<div class="latar-merah">
										<div class="container" align="center">
											<h1 class="header-wrap" align="left">Daftar Detail Tabung</h1>
											<hr style="margin-bottom:10px">
											<img class="tube-details" src="<?php echo $config['site']; ?>UPLOAD_FILES/Images/jenis_tube/<?php echo $t_pic; ?>.jpg" alt="gambar tube" width="400px" height="400px" style="margin-top:15px;">
											
											<h3 style="margin-bottom:15px;color:#607D8B;text-transform:uppercase;"><?php echo $t_name; ?></h3>
											
											<div class="col-xs-8 well center" style="color:grey;">
												<?php echo $t_details; ?>
											</div>
										</div>
									</div>
                            	</section>
                            </section>
                        </aside>
                        <!-- /.aside -->
                    </section>
                </section>
            </section>
        </section>
        <!-- /.vbox -->
    </section>