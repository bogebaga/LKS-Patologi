<?php 
session_start();
session_destroy();

require '../../libs/config.php';

echo "<script>window.alert('Anda telah keluar dari sistem pencatatan data Lembar Kendali Sampel (LKS)');window.location='$config[site]login.page/'</script>";

?>