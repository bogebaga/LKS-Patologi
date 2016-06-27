<div class="panel panel-danger">
	<div class="panel-heading">
		<h1 class="panel-title">
			Info Sample Pasien
		</h1>
	</div>
			
	<div class="panel-body">
			<!-- SPESIMEN -->
		<div class="clearfix">
				<label class="col-xs-2 control-label">Spesimen:</label>
				<label class="col-xs-2 checkbox-inline">
					<input type="checkbox" name="inputdarah_hijau" <?php $lkscrud->cek_list($col_darah_hijau); ?>>Darah
				</label>

				<label class="col-xs-2 checkbox-inline">
					<input type="checkbox" name="inputurine_hijau" <?php $lkscrud->cek_list($col_urine_hijau); ?>  >Urine
				</label>

			<label class="col-xs-2 checkbox-inline">
				<input type="checkbox" name="inputfeses_hijau" <?php $lkscrud->cek_list($col_feses_hijau); ?>>Feses
			</label>
			
			<label class="col-xs-3 checkbox-inline">
				<input id="cb_cairan_hijau" type="checkbox" <?php $lkscrud->cek_list_text($col_cairan_hijau); ?>>Cairan
				<input id="txt_cairan_hijau" type="text" placeholder="Isi cairan disini&hellip;" name="inputcairantext_hijau" style="width:80%;outline:none;border:none;border-bottom:1px dashed red;" <?php $lkscrud->cek_list_text_enable($col_cairan_hijau);?> value="<?php echo $col_cairan_hijau; ?>">
			</label>
		</div>

		<div class="dash-line"></div>

		<!-- ASAL SPESIMEN -->
		<div class="clearfix">
			<label class="col-xs-3 control-label">Asal Spesimen&nbsp;:</label>
			<label class="col-xs-4 checkbox-inline">
				<input type="checkbox" name="inputvena_hijau" <?php $lkscrud->cek_list($col_vena_hijau); ?>>Vena
			</label>

			<label class="col-xs-4 checkbox-inline">
				<input id="cb_arteri_hijau" type="checkbox" <?php $lkscrud->cek_list_text($col_arteri_hijau); ?>>Arteri&nbsp
				<input id="txt_arteri_hijau" type="text" name="inputarteritext_hijau" placeholder="Isi arteri disini&hellip;" style="width:85%;outline:none;border:none;border-bottom:1px dashed red;" <?php $lkscrud->cek_list_text_enable($col_arteri_hijau); ?>  value="<?php echo $col_arteri_hijau; ?>">
			</label>
		</div>
		
		<div class="bold-line"></div>
		
		<div class="clearfix">
			<label class="col-xs-2 control-label" style="margin-top:10px;">Tabung:</label>

			<div class="col-xs-7">
				<div id="EDTA_hijau" class="col-xs-4">
					<label class="checkbox-inline">
						<input type="checkbox" name="inputEDTA_hijau" <?php $lkscrud->cek_list($col_EDTA_hijau); ?> >EDTA
					</label>
					<button class="help-btn" type="button" data-toggle="popover" data-container="body" data-placement="top" data-content="Umumnya tersedia dalam bentuk garam sodium (natrium) atau potassium (kalium), mencegah koagulasi dengan cara mengikat atau mengkhelasi kalsium <a href=''>&hellip;</a>" title="EDTA Tube" data-trigger="focus">
						<span class="sr-only">EDTA &hellip;</span>?
					</button>
				</div>
				
				<div id="Plain_hijau" class="col-xs-4">
					<label class="checkbox-inline">
						<input type="checkbox" name="inputplain_hijau" <?php $lkscrud->cek_list($col_plain_hijau); ?>>Plain
					</label>
					<button class="help-btn" type="button" data-toggle="popover" data-container="body" data-placement="top" data-content="Tabung tutup merah.Tabung ini tanpa penambahan zat additive, darah akan menjadi beku dan serum dipisahkan dengan pemusingan <a href=''>&hellip;</a>" data-title="Plain Tube" data-trigger="focus">
						<span class="sr-only">PLAIN &hellip;</span>?
					</button>	
				</div>

				<div id="Citrate_hijau" class="col-xs-3">
					<label class="checkbox-inline">
						<input type="checkbox" name="inputcitrate_hijau" <?php $lkscrud->cek_list($col_citrate_hijau); ?> >Citrate
					</label>
					<button class="help-btn" type="button" data-toggle="popover" data-container="body" data-placement="top" data-content="PT tabung digunakan untuk tes pembekuan darah dan berlaku untuk sistem fibrinolitik (PT, TT, APTT dan fibrinogen, dll) <a href=''>&hellip;</a>" title="Citrate Tube" data-trigger="focus">
						<span class="sr-only">Citrate &hellip;</span>?
					</button>
				</div>

				<div id="Heparin_hijau" class="col-xs-4">
					<label class="checkbox-inline">
						<input type="checkbox" name="inputheparin_hijau" <?php $lkscrud->cek_list($col_heparin_hijau); ?> >Heparin
					</label>
					<button class="help-btn" type="button" data-toggle="popover" data-container="body" data-placement="bottom" data-content="Tabung tutup hijau terang.Tabung ini berisi gel separator (plasma separator tube/PST) dengan antikoagulan lithium heparin <a href=''>&hellip;</a>" title="Heparin Tube" data-trigger="focus">	
						<span class="sr-only">Heparin &hellip;</span>?
					</button>
				</div>

				<div id="SST_hijau" class="col-xs-4">
					<label class="checkbox-inline">
						<input type="checkbox" name="inputsst_hijau" <?php $lkscrud->cek_list($col_sst_hijau); ?> >SST
					</label>	
					<button class="help-btn" type="button" data-toggle="popover" data-container="body" data-placement="bottom" data-content="Tabung tutup kuning.Tabung ini berisi gel separator (serum separator tube/SST) yang fungsinya memisahkan serum dan sel darah <a href=''>&hellip;</a>" title="SST Tube" data-title data-trigger="focus">
						<span class="sr-only">SST &hellip;</span>?
					</button>
				</div>

				<div id="LED_hijau" class="col-xs-3">
					<label class="checkbox-inline">
						<input type="checkbox" name="inputled_hijau" <?php $lkscrud->cek_list($col_led_hijau); ?> >LED
					</label>
					<button class="help-btn" type="button" data-toggle="popover" data-container="body" data-placement="bottom" data-content="Laju endap darah (erithrocyte sedimentation rate, ESR) yang juga disebut kecepatan endap darah (KED) atau laju sedimentasi eritrosit adalah kecepatan sedimentasi eritrosit dalam darah yang belum membeku, dengan satuan mm/jam <a href=''>&hellip;</a> " title="LED Tube" data-trigger="focus">
						<span class="sr-only">LED &hellip;</span>?
					</button>
				</div>
			</div>
			
			<label class="col-xs-3 checkbox-inline" style="margin-top:10px;">
				<input id="cb_tabung_hijau" type="checkbox" <?php $lkscrud->cek_list_text($col_tube_etc_hijau); ?>>
				<input id="txt_tabung_hijau" type="text" name="inputTubetext_hijau" placeholder="Isi jenis tabung disini&hellip;" style="width:85%;outline:none;border:none;border-bottom:1px dashed red;" <?php $lkscrud->cek_list_text_enable($col_tube_etc_hijau);?> value="<?php echo $col_tube_etc_hijau; ?>">
			</label>

		</div>
			
		<div class="bold-line"></div>

		<!-- KONDISI -->
		<div class="clearfix">
			<label class="col-xs-2 control-label">Kondisi Spesimen :</label>

			<label class="col-xs-2 checkbox-inline">
				<input type="checkbox" name="inputbaik_hijau" <?php $lkscrud->cek_list($col_baik_hijau); ?>>Baik
			</label>
			<label class="col-xs-2 checkbox-inline">
				<input type="checkbox" name="inputlisis_hijau" <?php $lkscrud->cek_list($col_lisis_hijau); ?>>Lisis
			</label>
			<label class="col-xs-2 checkbox-inline">
				<input type="checkbox" name="inputlipemik_hijau" <?php $lkscrud->cek_list($col_lipemik_hijau); ?>>Lipemik
			</label>
			<label class="col-xs-3 checkbox-inline">
				<input type="checkbox" name="inputikterik_hijau" <?php $lkscrud->cek_list($col_ikterik_hijau); ?>>Ikterik
			</label>
		</div>
		<div class="clearfix" style="margin-top:6px;">
			<label class="col-xs-2 control-label">Volume Spesimen :</label>
		
			<label class="col-xs-3 checkbox-inline">
				<input type="checkbox" name="inputcukup_hijau" <?php $lkscrud->cek_list($col_cukup_hijau); ?>>Cukup
			</label>
			<label class="col-xs-3 checkbox-inline">
				<input type="checkbox" name="inputkurang_hijau" <?php $lkscrud->cek_list($col_kurang_hijau); ?>>Kurang
			</label>
			<label class="col-xs-3 checkbox-inline">
				<input type="checkbox" name="inputskurang_hijau" <?php $lkscrud->cek_list($col_sngtkrng_hijau); ?>>Sangat Kurang
			</label>
		</div>	
			
		<div class="bold-line"></div>
			
		<div class="clearfix">
			<label class="col-xs-2 control-label" style="margin-top:10px;">Dikirim ke:</label>
			
			<label class="col-xs-3 checkbox-inline" style="margin-left:10px;">
				<input type="checkbox" name="inputhematologi_hijau" <?php $lkscrud->cek_list($col_hematologi_hijau); ?>><strong>Hematologi
			</strong></label>
		
			<label class="col-xs-3 checkbox-inline">
				<input type="checkbox" name="inputhemostatis_hijau" <?php $lkscrud->cek_list($col_hemostatis_hijau); ?>><strong>Hemostatis</strong>
			</label>
			
			<label class="col-xs-3 checkbox-inline">
				<input type="checkbox" name="inputanalisiscairan_hijau" <?php $lkscrud->cek_list($col_analisis_cairan_hijau); ?>><strong>Analisis Cairan</strong>
			</label>
			<label class="col-xs-3 checkbox-inline">
				<input type="checkbox" name="inputkimiaklinik_hijau" <?php $lkscrud->cek_list($col_kimia_klinik_hijau); ?>><strong>Kimia Klinik</strong>
			</label>
			
			<label class="col-xs-3 checkbox-inline">
				<input type="checkbox" name="inputimunoserologi_hijau" <?php $lkscrud->cek_list($col_imunoserologi_hijau); ?>><strong>Imunoserologi</strong>
			</label>
		</div>
		
		
		<div class="line-grey"></div>
		
		<div class="clearfix">
			<label class="col-xs-3 checkbox-inline" style="margin-top:5px;">
				<input id="cb_anali_hijau"type="checkbox" <?php $lkscrud->cek_list_text($analyzer_hijau); ?> >
				<input id="txt_anali_hijau"type="text" name="inputAnalyzertext_hijau" placeholder="Isi Analyzer disini&hellip;" style="width:100%;outline:none;border:none; border-bottom:1px dashed red;" <?php $lkscrud->cek_list_text_enable($analyzer_hijau);?> value="<?php echo $analyzer_hijau; ?>">
			</label>
		</div>
	
	</div>
</div>