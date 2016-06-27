	<script type="text/javascript" src="<?php echo $config['site'] ?>assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo $config['site'] ?>assets/js/jquery-ui.js"></script>
	<script type="text/javascript">
		$(document).keyup(function() {
			$('.input-sm').keyup(function()
			{
				$.ajax({
					url: 'tes',
					type: 'POST',
					data: 'tes='+$('.input-sm').val(),
					success: function(data)
					{
						$('#tampil').html(data);
					},
					error: function(){}
				});
			});
		});
	</script>
	<script type="text/javascript">
		var kodenotasi = <?php echo json_encode($array_kd_notasi);?>;
		        $('.input-sm').on('click','change', function(){
			        $(".input-sm").autocomplete({source: kodenotasi});
			        // $(".labaga").autocomplete({source: kodenotasi});
		        });
	</script>
	<script type="text/javascript">
		$('.no-options-box').hover(function(){
			$(this).parent('div').addClass('kotak-search-hover');
		},function(){
			$(this).parent('div').removeClass('kotak-search-hover');
		});

		$('.no-options-box').focus(function()
		{
			$(this).parent('div').addClass('kotak-search-focus');
		});
		
		$('.no-options-box').blur(function()
		{
			$(this).parent('div').removeClass('kotak-search-focus');
		});
	</script>
	<?php  
		if(isset($_GET['lks']))
		{
			echo "<script type='text/javascript'>
					function printpdf(url)
					{
						var wnd = window.open(url);
						wnd.print();	
						// setTimeout(function(){wnd.close();},5000);
					}
				</script>";
	}	
	?>
	<script type="text/javascript">
		var state = true;

		function toggle_button(medik,foo,toggle)
		{
			$('[medik="'+medik+'"]').slideToggle();

				if(state)
				{
					$('[toggle="'+toggle+'"]').removeClass('icon-chevron-down').addClass('icon-chevron-up');
				}
				else
				{
					$('[toggle="'+toggle+'"]').removeClass('icon-chevron-up').addClass('icon-chevron-down');
				}	

			$('[foo="'+foo+'"]').text(state ? 'TAMPILKAN LEBIH SEDIKIT' : 'TAMPILKAN LEBIH BANYAK');
			state = !state;
		}
	</script>

	<script type="text/javascript" src="<?php echo $config['site'] ?>assets/js/app.v1.js"></script>
<!--
	<script type="text/javascript" src="<?php //echo $config['site'] ?>assets/js/bootstrap.js"></script>  
-->
	<script type="text/javascript">
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();
			$('[data-toggle="popover"]').popover({html:true});
		});
	</script>

	<script type="text/javascript" src="<?php echo $config['site'] ?>assets/js/bootstrap-editable.js"></script>    
	<script type="text/javascript" src="<?php echo $config['site'] ?>assets/js/kendo.all.min.js"></script> 
	<script type="text/javascript" src="<?php echo $config['site'] ?>assets/js/datecho.js"></script>  
</body>
</html>