<?php
include("menu11.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Bill Payment</title>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
		
	<script src="bootstrap/jquery/jquery3.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	
	<style>
.bg-img {
	background-image: url("");
	min-height: 200px;
	background-position: center;
	background-size: cover;
	position: relative;

	}
.header{
	height: 100px;
	width: auto;
	background-color: #f1910e;
	padding-top:0px;
	margin-top: -9px;
}
.panel-box{
	padding: 80px;
}
	</style>
	</head>
	
	<body style="background: url('image/bulb2.jpg');background-size: cover;height:600px;width: auto">
	<div class="container-fluid"style="background-color: #f5ae0a;margin-top: 25px" height="10px" width="auto">
	<div class="row">
		
		<h2 align="center" style="padding-top:15px"><img src="image/Cash-register-icon.png"height="60px" width="60px"><font color="white" size="7"><b>  Bill Payement Mode</b></font></h2>
		</div>
	
		</div>
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<div class="panel-box">
        	<div class="panel panel-info">
			
			<div class="panel-body">
			<div class="col-sm-4">
			<img src="icon/payment-method-icon.png" class="img-circle" height="180px" width="220px">
				<a href="home.php"><h3 align="center"><b>Online Payment</b></h3></a>
			</div>
			<div class="col-sm-4">
			<img src="image/Cash-icon.png" class="img-circle" height="180px" width="220px">
				<a href="home.php"><h3 align="center"><b>Cash Payment</b></h3></a>
			</div>
			<div class="col-sm-4">
			<img src="icon/payment-card-icon.png" class="img-circle" height="180px" width="220px">
				<a href="home"><h3 align="center"><b>Card Payment</b></h3></a>
			</div>
			
			</div>
			</div>
			</div>
			<div class="col-sm-2"></div>
		</div>
		</div>
	</body>
</html>