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
				$tes_hijau = array($tes_hijau_1,$tes_hijau_2,$tes_hijau_3,$tes_hijau_4,$tes_hijau_5,$tes_hijau_6);
				extract($tes_hijau);
				$hasil_hijau = array($hasil_hijau_1,$hasil_hijau_2,$hasil_hijau_3,$hasil_hijau_4,$hasil_hijau_5,$hasil_hijau_6);
				extract($hasil_hijau);
			?>
				<tr>
					<td><?php echo $boge+1;?>.</td>
					<td><span class="tablex-hijau" data-type="text" data-title="Tes <?php echo $boge+1; ?>" key="tes_hijau_<?php echo $boge+1;?>" style="border-bottom:1px dashed red;"><?php echo $tes_hijau[$boge];?></span></td>
					<td><span class="tablex-hijau" data-type="text" data-title="Hasil <?php echo $boge+1;?>" key="hasil_hijau_<?php echo $boge+1;?>" style="border-bottom:1px dashed red;"><?php echo $hasil_hijau[$boge];?></span></td>
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
				$tes7_hijau = array($tes_hijau_7,$tes_hijau_8,$tes_hijau_9,$tes_hijau_10,$tes_hijau_11,$tes_hijau_12);
				extract($tes7_hijau);
				$hasil7_hijau = array($hasil_hijau_7,$hasil_hijau_8,$hasil_hijau_9,$hasil_hijau_10,$hasil_hijau_11,$hasil_hijau_12);
				extract($hasil7_hijau);
			?>
				<tr>
					<td><?php echo $boge+7;?>.</td>
					<td><span class="tablex-hijau" data-type="text" data-title="Tes <?php echo $boge+7; ?>" key="tes_hijau_<?php echo $boge+7;?>" style="border-bottom:1px dashed red;"><?php echo $tes7_hijau[$boge];?></span></td>
					<td><span class="tablex-hijau" data-type="text" data-title="Hasil <?php echo $boge+7;?>" key="hasil_hijau_<?php echo $boge+7;?>" style="border-bottom:1px dashed red;"><?php echo $hasil7_hijau[$boge];?></span></td>
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
				$tes13_hijau = array($tes_hijau_13,$tes_hijau_14,$tes_hijau_15,$tes_hijau_16,$tes_hijau_17,$tes_hijau_18);
				extract($tes13_hijau);
				$hasil13_hijau = array($hasil_hijau_13,$hasil_hijau_14,$hasil_hijau_15,$hasil_hijau_16,$hasil_hijau_17,$hasil_hijau_18);
				extract($hasil13_hijau);
			?>
				<tr>
					<td><?php echo $boge+13;?>.</td>
					<td><span class="tablex-hijau" data-type="text" data-title="Tes <?php echo $boge+13; ?>" key="tes_hijau_<?php echo $boge+13;?>" style="border-bottom:1px dashed red;"><?php echo $tes13_hijau[$boge];?></span></td>
					<td><span class="tablex-hijau" data-type="text" data-title="Hasil <?php echo $boge+13;?>" key="hasil_hijau_<?php echo $boge+13;?>" style="border-bottom:1px dashed red;"><?php echo $hasil13_hijau[$boge];?></span></td>
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