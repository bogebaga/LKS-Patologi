<div class="text-center batas-samping">
	<!-- TABLE TES/HASIL 1-6 -->
	<div class="col-lg-4 col-md-4 col-xs-12" style="padding:0 0 10px 0;">
	<table class="table table-bordered no-margin-bottom">
		<thead>
			<tr>
				<th class="text-center">No.</th>
				<th class="text-center">Tes</th>
				<th class="text-center">Hasil</th>
			</tr>
		</thead>
		<tbody>
		<?php 
			$boge = 0;		
			while ( $boge <= 5) 
			{
				$tes = array($tes_1,$tes_2,$tes_3,$tes_4,$tes_5,$tes_6);
				extract($tes);
				$hasil = array($hasil_1,$hasil_2,$hasil_3,$hasil_4,$hasil_5,$hasil_6);
				extract($hasil);
			?>
				<tr>
					<td><?php echo $boge+1;?>.</td>
					<td><span no_rekmed="<?php echo $_GET['lks']; ?>" class="tablex" data-type="text" data-title="Tes <?php echo $boge+1; ?>" key="tes_<?php echo $boge+1;?>" style="border-bottom:1px dashed red;"><?php echo $tes[$boge];?></span></td>
					<td><span no_rekmed="<?php echo $_GET['lks']; ?>" class="tablex" data-type="text" data-title="Hasil <?php echo $boge+1;?>" key="hasil_<?php echo $boge+1;?>" style="border-bottom:1px dashed red;"><?php echo $hasil[$boge];?></span></td>
				</tr>
			<?php
				$boge++;
			}
		?>	
		</tbody>
	</table>
	</div>
	<!-- END -->

	<!-- TABLE TES/HASIL 7-12 -->
	<div class="col-lg-4 col-md-4 col-xs-12" style="padding:0 0 10px 0;">
	<table class="table table-bordered no-margin-bottom">
		<thead>
			<tr>
				<th class="text-center">No.</th>
				<th class="text-center">Tes</th>
				<th class="text-center">Hasil</th>
			</tr>
		</thead>
		<tbody>
		<?php 
			$boge = 0;		
			while ( $boge <= 5) 
			{
				$tes7 = array($tes_7,$tes_8,$tes_9,$tes_10,$tes_11,$tes_12);
				extract($tes7);
				$hasil7 = array($hasil_7,$hasil_8,$hasil_9,$hasil_10,$hasil_11,$hasil_12);
				extract($hasil7);
			?>
				<tr>
					<td><?php echo $boge+7;?>.</td>
					<td><span no_rekmed="<?php echo $_GET['lks']; ?>" class="tablex" data-type="text" data-title="Tes <?php echo $boge+7; ?>" key="tes_<?php echo $boge+7;?>" style="border-bottom:1px dashed red;"><?php echo $tes7[$boge];?></span></td>
					<td><span no_rekmed="<?php echo $_GET['lks']; ?>" class="tablex" data-type="text" data-title="Hasil <?php echo $boge+7;?>" key="hasil_<?php echo $boge+7;?>" style="border-bottom:1px dashed red;"><?php echo $hasil7[$boge];?></span></td>
				</tr>
			<?php
				$boge++;
			}
		?>	
		</tbody>
	</table>
	</div>
	<!-- END -->

	<!-- TABLE TES/HASIL 13-18 -->
	<div class="col-lg-4 col-md-4 col-xs-12" style="padding:0 0 10px 0;">
	<table class="table table-bordered no-margin-bottom">
		<thead>
			<tr>
				<th class="text-center">No.</th>
				<th class="text-center">Tes</th>
				<th class="text-center">Hasil</th>
			</tr>
		</thead>
		
		<tbody>
		<?php 
			$boge = 0;		
			while ( $boge <= 5) 
			{
				$tes13 = array($tes_13,$tes_14,$tes_15,$tes_16,$tes_17,$tes_18);
				extract($tes13);
				$hasil13 = array($hasil_13,$hasil_14,$hasil_15,$hasil_16,$hasil_17,$hasil_18);
				extract($hasil13);
			?>
				<tr>
					<td><?php echo $boge+13;?>.</td>
					<td><span no_rekmed="<?php echo $_GET['lks']; ?>" class="tablex" data-type="text" data-title="Tes <?php echo $boge+13; ?>" key="tes_<?php echo $boge+13;?>" style="border-bottom:1px dashed red;"><?php echo $tes13[$boge];?></span></td>
					<td><span no_rekmed="<?php echo $_GET['lks']; ?>" class="tablex" data-type="text" data-title="Hasil <?php echo $boge+13;?>" key="hasil_<?php echo $boge+13;?>" style="border-bottom:1px dashed red;"><?php echo $hasil13[$boge];?></span></td>
				</tr>
			<?php
				$boge++;
			}
		?>	
		</tbody>
	</table>
	</div>
	<!-- END -->
</div>