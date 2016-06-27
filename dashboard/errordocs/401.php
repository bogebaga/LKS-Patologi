<?php require '../libs/config.php'; ?>

<!DOCTYPE HTML>
<html>
<head>
<title>ERROR 401 - LEMBAR KENDALI SAMPEL</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="icon" type="image/png" href="<?php echo $config['site'];?>assets/favicon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet" type="text/css">
<style type="text/css">
body{
	font-family: 'Courgette', cursive;
}
body{
	background:#f3f3e1;
}	
.wrap{
	margin:0 auto;
	width:1000px;
}
.logo{
	margin-top:50px;
}	
.logo h1{
	font-size:200px;
	color:#8F8E8C;
	text-align:center;
	margin-bottom:1px;
	text-shadow:1px 1px 6px #fff;
}	
.logo p{
	color:rgb(228, 146, 162);
	font-size:20px;
	margin-top:1px;
	text-align:center;
}	
.logo p span{
	color:lightgreen;
}	
.sub a{
	color:white;
	background:#8F8E8C;
	text-decoration:none;
	padding:7px 120px;
	font-size:13px;
	font-family: arial, serif;
	font-weight:bold;
	-webkit-border-radius:3em;
	-moz-border-radius:.1em;
	-border-radius:.1em;
}	
</style>
</head>

<body>
	<div class="wrap">
	   <div class="logo">
	   <h1>401</h1>
	    <p>Error occured! - Bad Request</p>
  	      <div class="sub">
	        <p><a href="dashboard/">Back</a></p>
	      </div>
        </div>
	</div>
</body>