<?php 
	if(isset($_POST['masuk_tes']))
	{
		$kd_notasi = $_POST['kode_notasi'];
		$nama_tes = $_POST['nama_tes'];
		$jenis_tes = $_POST['jenis_tes'];

		$lkscrud->input_jenis_tes($kd_notasi, $nama_tes, $jenis_tes);
	}
?>
<body>
    <section class="hbox stretch">
        <section id="content">
            <section class="vbox">
                <section class="bg-light lter">
                    <section class="hbox stretch">
                        <!-- .aside -->
                        <aside>
                            <section class="vbox">
                            	<section class="scrollable">
                            		<form method="POST">
										<label>KODE NOTASI</label>
										<input type="text" class="form-control" name="kode_notasi">
										<label>NAMA TES</label>
										<input type="text" class="form-control" name="nama_tes">
										<label>JENIS TES</label>
										<input type="text" class="form-control" name="jenis_tes">
										<!-- ACTION BUTTON -->
                            			<button type="submit" name="masuk_tes" class="btn btn-primary">&nbsp;Simpan</button>
                            			<button type="reset" class="btn btn-default">&nbsp;Reset</button>
                            		</form>
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