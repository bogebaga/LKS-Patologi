<div class="panel panel-danger">
		<div class="panel-heading">
			<h1 class="panel-title">
				Info Tes dan Hasil
			</h1>
		</div>
		
		<div class="panel-body" style="position:relative;">
			<div class="col-xs-6">
				<label class="control-label col-xs-6" style="padding-left:0;">Analisis dimulai</label>
				<input id="jammulai" name="analisis_mulai" style="width:100%;" value="<?php echo $analisis_mulai; ?>">
			</div>

			<div class="garis-samping-putus"></div>

			<div class="col-xs-6">
				<label class="control-label col-xs-6" style="padding-left:0;">Analisis berakhir</label>
				<input id="jamakhir" name="analisis_berakhir" style="width:100%;" value="<?php echo $analisis_berakhir; ?>">
			</div>
		</div>

		

		<div class="panel-group-custom" id="accordion" role="tablist" aria-multiselectable="true"> 
			<!-- heading collapse data putih -->
			<div class="panel panel-danger fix-panel-danger">
			<div class="panel-heading-putih" role="tab" id="headingFormPutih">
 				<h1 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion"  href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						Tabel : Form Putih						
					</a>
				</h1>
			</div>
			
			<!-- DATa collpse form putih -->
			<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFormPutih">
				<div class="panel-body">
					<?php include 'tablewith.php';?>
				</div>
			</div>

			<!-- heading untuk collpse data hijau -->
			<div class="panel-heading-hijau" role="tab" id="headingFormHijau">
				<h1 class="panel-title">
					<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						Tabel : Form Hijau
					</a> 
				</h1>
			</div>
			<!-- data collapse form hijau -->
			<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFormHijau">
				<div class="panel-body">
					<?php include 'tablewith_hijau.php';?>
				</div>
			</div>
		</div>	
	</div>	
</div>