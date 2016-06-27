<div class="panel panel-danger">
	<div class="panel-heading">
		<h1 class="panel-title">
			Info Sample Pasien
		</h1>
	</div>
	<div class="panel-body">
		<div class="panel-group-custom" id="sampel-pasien" role="tablist" aria-multiselectable="true"> 
		<!-- heading collapse data putih -->
			<div class="panel panel-danger fix-panel-danger">
				<div class="panel-heading-putih" role="tab" id="FormPutih">
	 				<h1 class="panel-title">
						<a data-toggle="collapse" data-parent="#sampel-pasien"  href="#sampelCollapseOne" aria-expanded="true" aria-controls="sampelCollapseOne">
							Tabel : Form Putih						
						</a>
					</h1>
				</div>
				<!-- DATa collpse form putih -->
				<div id="sampelCollapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="FormPutih">
					<div class="panel-body">
						<?php require 'sampel-pasien.php'; ?>
					</div>
				</div>
				
				<!-- heading untuk collpse data hijau -->
				<div class="panel-heading-hijau" role="tab" id="FormHijau">
					<h1 class="panel-title">
						<a class="collapsed" data-toggle="collapse" data-parent="#sampel-pasien" href="#sampelCollapseTwo" aria-expanded="false" aria-controls="sampelCollapseTwo">
							Tabel : Form Hijau
						</a> 
					</h1>
				</div>
				<!-- data collapse form hijau -->
				<div id="sampelCollapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="FormHijau">
					<div class="panel-body">
						<?php require 'sampel-pasien-hijau.php'; ?>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>