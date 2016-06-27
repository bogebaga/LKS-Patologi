<div class="panel panel-danger">

	<div class="panel-heading">
		<h1 class="panel-title">
			Info Pasien
		</h1>
	</div>
	
	<div class="panel-body" style="padding:10px 3px;">
		<label class="control-label col-xs-12">No. Rekam Medik&nbsp;:
			<input type="text" class="form-control font-normal" id="input_no_medik" name="no_rekmed" placeholder="No. Rekam Medik" required autofocus>
		</label>

		<label class="control-label col-xs-4">No. Lab&nbsp;:
			<input type="text" class="form-control font-normal" name="no_lab" placeholder="No. Lab">
		</label>

		<label class="control-label col-xs-4">Ruangan&nbsp;:
			<input type="text" class="form-control font-normal" name="ruangan" placeholder="Ruangan">
		</label>

		<label class="control-label col-xs-4">Lama Puasa&nbsp;:
			<input type="text" class="form-control font-normal" name="lm_puasa" placeholder="Lama Puasa">
		</label>

		<label class="control-label col-xs-5">Tanggal&nbsp;:
			<input id="todaydate" name="tgl_tdy" style="width:100%" value="<?php echo date('d/m/Y')?>"> 			
		</label>
		
		<label class="control-label col-xs-5">Tanggal Lahir&nbsp;:
			<input id="birthdate" name="tgl_lhr" style="width:100%" value="01/01/1993">
		</label>

		<label class="control-label col-xs-2">Flebotomis Jam&nbsp;:
			<input type="text" id="timepicker" name="fle_jam" style="width:100%" value="<?php echo date('h:i A')?>">	
		</label>
	
		<label class="control-label col-xs-12">Nama Pasien&nbsp;:
			<input type="text" class="form-control font-normal" name="nama_pasien" placeholder="Nama Pasien" required>
		</label>

		<label class="control-label col-xs-7">Dokter Pengirim&nbsp;:
			<input type="text" class="form-control font-normal" name="dokter_krm" placeholder="Dokter Pengirim">
		</label>

		<label class="control-label col-xs-5">Diagnosis Klinis&nbsp;:
			<input type="text" class="form-control font-normal" name="diagnosis" placeholder="Diagnosis Klinis" required>
		</label>
	</div>
</div>