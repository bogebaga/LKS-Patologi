<div class="panel panel-danger">

	<div class="panel-heading">
		<h1 class="panel-title">
			Info Pasien
		</h1>
	</div>
	
	<div class="panel-body" style="padding:10px 3px;">
		<label class="control-label col-xs-12">No. Rekam Medik&nbsp;:
			<input type="text" class="form-control font-normal" name="no_rekmed" placeholder="No. Rekam Medik" disabled value="<?php  echo $no_rekmed; ?>">
		</label>

		<label class="control-label col-xs-4">No. Lab&nbsp;:
			<input type="text" class="form-control font-normal" name="no_lab" placeholder="No. Lab" value="<?php echo $no_lab; ?>" autofocus>
		</label>

		<label class="control-label col-xs-4">Ruangan&nbsp;:
			<input type="text" class="form-control font-normal" name="ruangan" placeholder="Ruangan" value="<?php echo $ruangan; ?>">
		</label>

		<label class="control-label col-xs-4" for="inputLamaPuasa">Lama Puasa&nbsp;:
			<input type="text" class="form-control font-normal" name="lm_puasa" placeholder="Lama Puasa" value="<?php echo $lm_puasa; ?>">
		</label>

		<label class="control-label col-xs-5">Tanggal&nbsp;:
			<input id="todaydate" name="tgl_tdy" style="width:100%" value="<?php echo $tgl_tdy; ?>"> 
		</label>
		
		<label class="control-label col-xs-5">Tanggal Lahir&nbsp;:
			<input id="birthdate" name="tgl_lhr" style="width:100%" value="<?php echo $tgl_lhr; ?>">
		</label>

		<label class="control-label col-xs-2">Flebotomis Jam&nbsp;:
			<input type="text" id="timepicker" name="fle_jam" style="width:100%" value="<?php echo $fle_jam; ?>">	
		</label>

	
		<label class="control-label col-xs-12" for="inputNamaPasien">Nama Pasien&nbsp;:
			<input type="text" class="form-control font-normal" name="nama_pasien" placeholder="Nama Pasien" value="<?php echo $nama_pasien; ?>" required>
		</label>


		<label class="control-label col-xs-7">Dokter Pengirim&nbsp;:
			<input type="text" class="form-control font-normal" name="dokter_krm" placeholder="Dokter Pengirim" value="<?php echo $dokter_krm; ?>">
		</label>

		<label class="control-label col-xs-5">Diagnosis Klinis&nbsp;:
			<input type="text" class="form-control font-normal" name="diagnosis" placeholder="Diagnosis Klinis" value="<?php echo $diagnosis; ?>" required>
		</label>
	</div>
</div>