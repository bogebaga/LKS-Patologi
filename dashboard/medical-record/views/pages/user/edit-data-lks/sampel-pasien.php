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
					<input type="checkbox" name="inputdarah" <?php $lkscrud->cek_list($col_darah); ?>>Darah
				</label>

				<label class="col-xs-2 checkbox-inline">
					<input type="checkbox" name="inputurine" <?php $lkscrud->cek_list($col_urine); ?>  >Urine
				</label>

			<label class="col-xs-2 checkbox-inline">
				<input type="checkbox" name="inputfeses" <?php $lkscrud->cek_list($col_feses); ?>>Feses
			</label>
			
			<label class="col-xs-3 checkbox-inline">
				<input id="cb_cairan" type="checkbox" <?php $lkscrud->cek_list_text($col_cairan); ?>>Cairan
				<input id="txt_cairan" type="text" placeholder="Isi cairan disini&hellip;" name="inputcairantext" style="width:80%;outline:none;border:none;border-bottom:1px dashed red;" <?php $lkscrud->cek_list_text_enable($col_cairan);?> value="<?php echo $col_cairan; ?>">
			</label>
		</div>

		<div class="dash-line"></div>

		<!-- ASAL SPESIMEN -->
		<div class="clearfix">
			<label class="col-xs-3 control-label">Asal Spesimen&nbsp;:</label>
			<label class="col-xs-4 checkbox-inline">
				<input type="checkbox" name="inputvena" <?php $lkscrud->cek_list($col_vena); ?>>Vena
			</label>

			<label class="col-xs-4 checkbox-inline">
				<input id="cb_arteri" type="checkbox" <?php $lkscrud->cek_list_text($col_arteri); ?>>Arteri&nbsp
				<input id="txt_arteri"type="text" name="inputarteritext" placeholder="Isi arteri disini&hellip;" style="width:85%;outline:none;border:none;border-bottom:1px dashed red;" <?php $lkscrud->cek_list_text_enable($col_arteri); ?>  value="<?php echo $col_arteri; ?>">
			</label>
		</div>
		
		<div class="bold-line"></div>
		
		<div class="clearfix">
			<label class="col-xs-2 control-label" style="margin-top:10px;">Tabung:</label>

			<div class="col-xs-7">
				<div id="EDTA" class="col-xs-4">
					<label class="checkbox-inline">
						<input type="checkbox" name="inputEDTA" <?php $lkscrud->cek_list($col_EDTA); ?> >EDTA
					</label>
					<button class="help-btn" type="button" data-toggle="popover" data-container="body" data-placement="top" data-content="Umumnya tersedia dalam bentuk garam sodium (natrium) atau potassium (kalium), mencegah koagulasi dengan cara mengikat atau mengkhelasi kalsium <a href=''>&hellip;</a>" title="EDTA Tube" data-trigger="focus">
						<span class="sr-only">EDTA &hellip;</span>?
					</button>
				</div>
				
				<div id="Plain" class="col-xs-4">
					<label class="checkbox-inline">
						<input type="checkbox" name="inputplain" <?php $lkscrud->cek_list($col_plain); ?>>Plain
					</label>
					<button class="help-btn" type="button" data-toggle="popover" data-container="body" data-placement="top" data-content="Tabung tutup merah.Tabung ini tanpa penambahan zat additive, darah akan menjadi beku dan serum dipisahkan dengan pemusingan <a href=''>&hellip;</a>" data-title="Plain Tube" data-trigger="focus">
						<span class="sr-only">PLAIN &hellip;</span>?
					</button>	
				</div>

				<div id="Citrate" class="col-xs-3">
					<label class="checkbox-inline">
						<input type="checkbox" name="inputcitrate" <?php $lkscrud->cek_list($col_citrate); ?> >Citrate
					</label>
					<button class="help-btn" type="button" data-toggle="popover" data-container="body" data-placement="top" data-content="PT tabung digunakan untuk tes pembekuan darah dan berlaku untuk sistem fibrinolitik (PT, TT, APTT dan fibrinogen, dll) <a href=''>&hellip;</a>" title="Citrate Tube" data-trigger="focus">
						<span class="sr-only">Citrate &hellip;</span>?
					</button>
				</div>

				<div id="Heparin" class="col-xs-4">
					<label class="checkbox-inline">
						<input type="checkbox" name="inputheparin" <?php $lkscrud->cek_list($col_heparin); ?> >Heparin
					</label>
					<button class="help-btn" type="button" data-toggle="popover" data-container="body" data-placement="bottom" data-content="Tabung tutup hijau terang.Tabung ini berisi gel separator (plasma separator tube/PST) dengan antikoagulan lithium heparin <a href=''>&hellip;</a>" title="Heparin Tube" data-trigger="focus">	
						<span class="sr-only">Heparin &hellip;</span>?
					</button>
				</div>

				<div id="SST" class="col-xs-4">
					<label class="checkbox-inline">
						<input type="checkbox" name="inputsst" <?php $lkscrud->cek_list($col_sst); ?> >SST
					</label>	
					<button class="help-btn" type="button" data-toggle="popover" data-container="body" data-placement="bottom" data-content="Tabung tutup kuning.Tabung ini berisi gel separator (serum separator tube/SST) yang fungsinya memisahkan serum dan sel darah <a href=''>&hellip;</a>" title="SST Tube" data-title data-trigger="focus">
						<span class="sr-only">SST &hellip;</span>?
					</button>
				</div>

				<div id="LED" class="col-xs-3">
					<label class="checkbox-inline">
						<input type="checkbox" name="inputled" <?php $lkscrud->cek_list($col_led); ?> >LED
					</label>
					<button class="help-btn" type="button" data-toggle="popover" data-container="body" data-placement="bottom" data-content="Laju endap darah (erithrocyte sedimentation rate, ESR) yang juga disebut kecepatan endap darah (KED) atau laju sedimentasi eritrosit adalah kecepatan sedimentasi eritrosit dalam darah yang belum membeku, dengan satuan mm/jam <a href=''>&hellip;</a> " title="LED Tube" data-trigger="focus">
						<span class="sr-only">LED &hellip;</span>?
					</button>
				</div>
			</div>
			
			<label class="col-xs-3 checkbox-inline" style="margin-top:10px;">
				<input id="cb_tabung"type="checkbox" <?php $lkscrud->cek_list_text($col_tube_etc); ?>>
				<input id="txt_tabung"type="text" name="inputTubetext" placeholder="Isi jenis tabung disini&hellip;" style="width:85%;outline:none;border:none;border-bottom:1px dashed red;" <?php $lkscrud->cek_list_text_enable($col_tube_etc);?> value="<?php echo $col_tube_etc; ?>">
			</label>

		</div>
			
		<div class="bold-line"></div>

		<!-- KONDISI -->
		<div class="clearfix">
			<label class="col-xs-2 control-label">Kondisi Spesimen :</label>

			<label class="col-xs-2 checkbox-inline">
				<input type="checkbox" name="inputbaik" <?php $lkscrud->cek_list($col_baik); ?>>Baik
			</label>
			<label class="col-xs-2 checkbox-inline">
				<input type="checkbox" name="inputlisis" <?php $lkscrud->cek_list($col_lisis); ?>>Lisis
			</label>
			<label class="col-xs-2 checkbox-inline">
				<input type="checkbox" name="inputlipemik" <?php $lkscrud->cek_list($col_lipemik); ?>>Lipemik
			</label>
			<label class="col-xs-3 checkbox-inline">
				<input type="checkbox" name="inputikterik" <?php $lkscrud->cek_list($col_ikterik); ?>>Ikterik
			</label>
		</div>
		<div class="clearfix" style="margin-top:6px;">
			<label class="col-xs-2 control-label">Volume Spesimen :</label>
		
			<label class="col-xs-3 checkbox-inline">
				<input type="checkbox" name="inputcukup" <?php $lkscrud->cek_list($col_cukup); ?>>Cukup
			</label>
			<label class="col-xs-3 checkbox-inline">
				<input type="checkbox" name="inputkurang" <?php $lkscrud->cek_list($col_kurang); ?>>Kurang
			</label>
			<label class="col-xs-3 checkbox-inline">
				<input type="checkbox" name="inputskurang" <?php $lkscrud->cek_list($col_sngtkrng); ?>>Sangat Kurang
			</label>
		</div>	
			
		<div class="bold-line"></div>
			
		<div class="clearfix">
			<label class="col-xs-2 control-label" style="margin-top:10px;">Dikirim ke:</label>
			
			<label class="col-xs-3 checkbox-inline" style="margin-left:10px;">
				<input type="checkbox" name="inputhematologi" <?php $lkscrud->cek_list($col_hematologi); ?>><strong>Hematologi
			</strong></label>
		
			<label class="col-xs-3 checkbox-inline">
				<input type="checkbox" name="inputhemostatis" <?php $lkscrud->cek_list($col_hemostatis); ?>><strong>Hemostatis</strong>
			</label>
			
			<label class="col-xs-3 checkbox-inline">
				<input type="checkbox" name="inputanalisiscairan" <?php $lkscrud->cek_list($col_analisis_cairan); ?>><strong>Analisis Cairan</strong>
			</label>
			<label class="col-xs-3 checkbox-inline">
				<input type="checkbox" name="inputkimiaklinik" <?php $lkscrud->cek_list($col_kimia_klinik); ?>><strong>Kimia Klinik</strong>
			</label>
			
			<label class="col-xs-3 checkbox-inline">
				<input type="checkbox" name="inputimunoserologi" <?php $lkscrud->cek_list($col_imunoserologi); ?>><strong>Imunoserologi</strong>
			</label>
		</div>
		
		
		<div class="line-grey"></div>
		
		<div class="clearfix">
			<label class="col-xs-3 checkbox-inline" style="margin-top:5px;">
				<input id="cb_anali"type="checkbox" <?php $lkscrud->cek_list_text($analyzer); ?> >
				<input id="txt_anali"type="text" name="inputAnalyzertext" placeholder="Isi Analyzer disini&hellip;" style="width:100%;outline:none;border:none; border-bottom:1px dashed red;" value="<?php echo $analyzer ?>">
			</label>
		</div>
	
	</div>
</div>