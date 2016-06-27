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
			$boge = 1;		
			while ( $boge <= 6) 
			{
				echo"
					<tr>
						<td>$boge.</td>
						<td><span no_rekmed='' class='tablex-hijau' data-type='text' data-title='Tes $boge' key='tes_hijau_$boge'></span></td>
						<td><span no_rekmed='' class='tablex-hijau' data-type='text' data-title='Hasil $boge' key='hasil_hijau_$boge'></span></
					</tr>
					";
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
			$boge = 7;

			while($boge <= 12){
				echo "<tr>
							<td>$boge.</td>
							<td><span no_rekmed='' class='tablex-hijau' data-type='text' data-title='Tes $boge' key='tes_hijau_$boge'></span></td>
							<td><span no_rekmed='' class='tablex-hijau' data-type='text' data-title='Hasil $boge' key='hasil_hijau_$boge'></span></td>
						</tr>
				";
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
			$boge = 13;

			while($boge <= 18){
				echo "<tr>
							<td>$boge.</td>
							<td><span no_rekmed='' class='tablex-hijau' data-type='text' data-title='Tes $boge' key='tes_hijau_$boge'></span></td>
							<td><span no_rekmed='' class='tablex-hijau' data-type='text' data-title='Hasil $boge' key='hasil_hijau_$boge'></span></td>
						</tr>
				";
				$boge++;
			}
		 ?>
		</tbody>
	</table>
	</div>
	<!-- END -->
</div>