<table class="table no-margin-bottom">
	<tbody>
		<tr>
			<td colspan="2" style="border-bottom:none;border-top:1px solid #000;border-left:none;border-right:1px solid #000;">
				<label class="control-label">Analisis dimulai</label>
				
			</td>
			<td colspan="2" style="border-bottom:none;border-top:1px solid #000;border-left:1px solid #000;border-right:none;">
				<label class="control-label">Analisis berakhir</label>
			</td>
		</tr>
		<tr>
			<td style="border-right:none;border-top:none;border-left:none;border-bottom:1px solid #000;">
				<label class="control-label">Jam:</label>
			</td>
			<td style="border-left:none;border-top:none;border-right:1px solid #000;border-bottom:1px solid #000;">
				<input type="text" class="form-control-view" name="analisis_mulai" value="<?php echo $analisis_mulai; ?>" disabled>
			</td>
			<td style="border-right:none;border-top:none;border-left:1px solid #000;border-bottom:1px solid #000;">
				<label class="control-label">Jam:</label>
			</td>
			<td style="border-left:none;border-top:none;border-right:1px solid #000;border-bottom:1px solid #000;">
				<input name="analisis_berakhir" type="text" class="form-control-view" value="<?php echo $analisis_berakhir; ?>" disabled>
			</td>
		</tr>
	</tbody>
</table>

<?php require 'tablewith.php';?>
<div class="clearfix"></div>