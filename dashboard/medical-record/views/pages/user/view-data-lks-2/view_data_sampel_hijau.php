	<!-- SPESIMEN -->
	<div class="clearfix">
	<label class="col-xs-12 col-lg-3 control-label">Spesimen:</label>
	<label class="col-xs-2 checkbox-inline" style="margin-left: 15px;">
		<input disabled="true" type="checkbox" name="inputdarah" <?php $lkscrud->cek_list($col_darah_hijau); ?> >Darah
	</label>
	<label class="col-xs-2 checkbox-inline">
		<input disabled="true" type="checkbox" name="inputurine" <?php $lkscrud->cek_list($col_urine_hijau); ?> >Urine
	</label>
	<label class="col-xs-2 checkbox-inline">
		<input disabled="true" type="checkbox" name="inputfeses" <?php $lkscrud->cek_list($col_feses_hijau);?> >Feses
	</label>

	<label class="col-xs-2 checkbox-inline">
		<input disabled="true" type="checkbox" name="inputcairantext" <?php $lkscrud->cek_list_text($col_cairan_hijau); ?>>Cairan&nbsp;<span style="border-bottom:1px dashed red;"><?php echo $col_cairan_hijau; ?></span>
	</label>
	</div>

	<div class="dash-line"></div>

	<!-- ASAL SPESIMEN -->
	<div class="clearfix">
		<label class="col-xs-12 col-lg-3 control-label">Asal Spesimen&nbsp;:</label>
		<label class="col-xs-4 checkbox-inline" style="margin-left: 15px;">
			<input disabled="true" type="checkbox" name="inputvena" <?php $lkscrud->cek_list($col_vena_hijau); ?>>Vena
		</label>
		<label class="col-xs-4 checkbox-inline">
			<input disabled="true" type="checkbox" name="inputarteritext" <?php $lkscrud->cek_list_text($col_arteri_hijau); ?>>Arteri&nbsp;<span style="border-bottom:1px dashed red;"><?php echo $col_arteri_hijau; ?></span>
		</label>
	</div>

	<div class="bold-line"></div>

	<div class="clearfix">
		<label class="col-xs-12 col-lg-2 control-label" style="margin-top:10px;">Tabung:</label>
		<div class="col-xs-8 col-lg-7">
			<label class="col-xs-4 checkbox-inline" style="margin-left:10px;">
				<input disabled="true" type="checkbox" name="inputEDTA" <?php $lkscrud->cek_list($col_EDTA_hijau); ?>>EDTA
			</label>
			<label class="col-xs-4 checkbox-inline">
				<input disabled="true" type="checkbox" name="inputplain" <?php $lkscrud->cek_list($col_plain_hijau); ?>>Plain
			</label>
			<label class="col-xs-4 checkbox-inline">
				<input disabled="true" type="checkbox" name="inputcitrate" <?php $lkscrud->cek_list($col_citrate_hijau); ?>>Citrate
			</label>
			<label class="col-xs-4 checkbox-inline">
				<input disabled="true" type="checkbox" name="inputheparin" <?php $lkscrud->cek_list($col_heparin_hijau); ?>>Heparin
			</label>
			<label class="col-xs-4 checkbox-inline">
				<input disabled="true" type="checkbox" name="inputsst" <?php $lkscrud->cek_list($col_sst_hijau); ?>>SST
			</label>
			<label class="col-xs-4 checkbox-inline">
				<input disabled="true" type="checkbox" name="inputled" <?php $lkscrud->cek_list($col_led_hijau); ?>>LED
			</label>
		</div>
		<label class="col-xs-4 col-lg-3 checkbox-inline" style="margin-top:10px;">
			<input disabled="true" type="checkbox" name="inputTuetext" <?php $lkscrud->cek_list_text($col_tube_etc_hijau); ?>>&nbsp;<span style="border-bottom:1px dashed red;"><?php echo $col_tube_etc_hijau; ?></span>
		</label>
	</div>
		
	<div class="bold-line"></div>

	<!-- KONDISI -->
	<div class="clearfix">
		<label class="col-xs-12 col-lg-2 control-label">Kondisi Spesimen :</label>
		<label class="col-xs-2 checkbox-inline" style="margin-left: 15px;">
			<input disabled="true" type="checkbox" name="inputbaik" <?php $lkscrud->cek_list($col_baik_hijau); ?>>Baik
		</label>
		<label class="col-xs-2 checkbox-inline">
			<input disabled="true" type="checkbox" name="inputlisis" <?php $lkscrud->cek_list($col_lisis_hijau); ?>>Lisis
		</label>
		<label class="col-xs-2 checkbox-inline">
			<input disabled="true" type="checkbox" name="inputlipemik" <?php $lkscrud->cek_list($col_lipemik_hijau); ?>>Lipemik
		</label>
		<label class="col-xs-3 checkbox-inline">
			<input disabled="true" type="checkbox" name="inputikterik" <?php $lkscrud->cek_list($col_ikterik_hijau); ?>>Ikterik
		</label>
	</div>
	<div class="clearfix" style="margin-top:6px;">
		<label class="col-xs-12 col-lg-2 control-label">Volume Spesimen :</label>
		<label class="col-xs-3 checkbox-inline" style="margin-left: 15px;">
			<input disabled="true" type="checkbox" name="inputcukup" <?php $lkscrud->cek_list($col_cukup_hijau); ?>>Cukup
		</label>
		<label class="col-xs-3 checkbox-inline">
			<input disabled="true" type="checkbox" name="inputkurang" <?php $lkscrud->cek_list($col_kurang_hijau); ?>>Kurang
		</label>
		<label class="col-xs-5 col-lg-3 checkbox-inline">
			<input disabled="true" type="checkbox" name="inputskurang" <?php $lkscrud->cek_list($col_sngtkrng_hijau); ?>>Sangat Kurang
		</label>
	</div>	
		
	<div class="bold-line"></div>
		
	<div class="clearfix" style="margin-bottom: 10px;">
		<label class="col-xs-12 col-lg-2 control-label" style="margin-top:10px;">Dikirim ke:</label>
		<label class="col-xs-3 checkbox-inline" style="margin-left:10px;">
			<input disabled="true" type="checkbox" name="inputhematologi" <?php $lkscrud->cek_list($col_hematologi_hijau); ?>><strong>Hematologi
		</strong></label>
		<label class="col-xs-3 checkbox-inline">
			<input disabled="disabled" type="checkbox" name="inputhemostatis" <?php $lkscrud->cek_list($col_hemostatis_hijau); ?>><strong>Hemostatis</strong>
		</label>
		<label class="col-xs-4 col-lg-3 checkbox-inline">
			<input disabled="disabled" type="checkbox" name="inputanalisiscairan" <?php $lkscrud->cek_list($col_analisis_cairan_hijau); ?>><strong>Analisis Cairan</strong>
		</label>
		<label class="col-xs-3 checkbox-inline">
			<input disabled="disabled" type="checkbox" name="inputkimiaklinik" <?php $lkscrud->cek_list($col_kimia_klinik_hijau); ?>><strong>Kimia Klinik</strong>
		</label>
		<label class="col-xs-3 checkbox-inline">
			<input disabled="disabled" type="checkbox" name="inputimunoserologi" <?php $lkscrud->cek_list($col_imunoserologi_hijau); ?>><strong>Imunoserologi</strong>
		</label>
	</div>

	<div class="line-grey"></div>

	<div class="clearfix">
		<label class="col-xs-2 control-label" style="margin-top:10px;">Analyzer&nbsp;:</label>
			<input disabled="disabled" type="text" class="form-control-view" name="inputAnalyzertext" disabled style="width:83%;" value="<?php echo $analyzer_hijau; ?>">
	</div>