<div class="panel panel-danger">
		<div class="panel-heading">
			<h1 class="panel-title">
				Info Verifikasi dan Validasi hasil
			</h1>
		</div>
		<div class="panel-body" style="position:relative;" align="center">

			<div class="col-xs-6">
				<label class="control-label">Verifikator I</label>
				<!-- <label class="control-label">Jam:</label> -->
						<input id="jamverI" name="verifikator_i" style="width:100%" value="<?php echo date('h:i A'); ?>">	
			</div>
			
			<div class="garis-samping-putus"></div>
			
			<div class="col-xs-6">
				<label class="control-label">Verifikator II</label>
				<!-- <label class="control-label">Jam:</label> -->
					<input id="jamverII" name="verifikator_ii" style="width:100%" value="<?php echo date ('h:i A')?>">	
			</div>
			
			<div class="garis-bawah"></div>
			
			<div class="col-xs-6">
				<label class="control-label">Validasi</label>
				<!-- <label class="control-label" >Jam:</label> -->
					<input id="jamval" name="validasi" style="width:100%" value="<?php echo date ('h:i A')?>">		
			</div>	
			
			<div class="garis-samping-putus putus-top"></div>

			<div class="col-xs-6">
				<label class="control-label">Interpretasi</label>
				<input type="text" class="form-control" name="interpretasi" placeholder="Interpretasi">
			</div>
			
		</div>