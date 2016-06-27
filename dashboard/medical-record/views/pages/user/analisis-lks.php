<body>
    <section class="hbox stretch">
    <?php 
        require 'menu_analisis.php';
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
									<section class="details-lks">
										<div class="container" align="center">
											<h1 style="text-align:left;">Detail - Lembar Kendali Sampel (LKS)</h1>
											<div class="lks-s">
												<span class="lks-title">LEMBAR KENDALI SAMPEL</span>
												<div class="image-sprite-lks center"></div>
												<span class="total-lks"><?php 
												$lkscrud->hitung_jumlah_record_lks();
												 ?></span>
											</div>
										</div>
									</section>
									<div class="analisis-detil row-centered col-xs-12 col-md-12 col-lg-6">
										<span class="title-row">LKS - Merah</span>
										<!-- LKS MErah -->
										<?php 
										$stmt = $DB_con->prepare("SELECT kd_notasi FROM tb_nama_tes");
										$stmt->execute();

										while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
										{
											foreach ($row as $tes_input)
											{
												$tgl_tdy = date('d/m/Y');
												$kondisi = "lks_merah";
												$lkscrud->tes_detil_analisis_merah_hijau($tgl_tdy, $tes_input, $kondisi);
												// echo $tes_input."<br>";
											}
										}
						
										// $stmt_hasil = $DB_con->prepare("SELECT hasil_1, hasil_2, hasil_3, hasil_4, hasil_5, hasil_6, hasil_7, hasil_8, hasil_9, hasil_10, hasil_11, hasil_12, hasil_13, hasil_14, hasil_15, hasil_16, hasil_17, hasil_18 FROM tb_hasil WHERE no_rekmed=1");
										// $stmt_hasil->execute();
										// $row_hasil = $stmt_hasil->fetch(PDO::FETCH_ASSOC);
										// foreach ($row_hasil as $key) 
										// {
										// 	echo $key."<br>";
										// }
										?>
									</div>	
									<div class="analisis-detil row-centered col-xs-12 col-md-12 col-lg-6 ">
										<span class="title-row">LKS - Hijau</span>
										<!-- LKS - HIJAU -->
										<?php 
										$stmt_hijau = $DB_con->prepare("SELECT kd_notasi FROM tb_nama_tes");
										$stmt_hijau->execute();

										while ($row_hijau = $stmt_hijau->fetch(PDO::FETCH_ASSOC)) 
										{
											foreach ($row_hijau as $tes_input_hijau)
											{
												$tgl_tdy_hijau = date('d/m/Y');
												$kondisi1 = "lks_hijau";
												$lkscrud->tes_detil_analisis_merah_hijau($tgl_tdy_hijau, $tes_input_hijau, $kondisi1);
												// echo $tes_input_hijau."<br>";
											}
										}
										?>
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