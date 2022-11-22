
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>form</title>
		<link href="bootstrap\css\bootstrap.css" rel="stylesheet"/>
		<script src="bootstrap/jquery/jquery3.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>

.box{
	
	height:500px;
	width:700px;
	position: absolute;
	top:20%;
	left:24%;
	border:;
	border-radius:5px;
	background-color:;
	box-shadow:7px 12px 18px #888888;
	padding-top: 20px;
	
}
	
.txt{
	color:black;
}
	
</style>
</head>

	<body  background="image/close-up-blank-notepad-pencil-cup-keyboard-turquoise-background-with-space-text_23-2147916085.jpg" style="background-size: cover;">
	<div class="container-fluid" style="padding-top: 30px;">
	<div class="col-sm-2">
		<img src="image/mob_reg.jpg" class="img-rounded" style="left:40%;position:absolute;">
	</div>
	<div class="col-sm-8">
	  <div class="box">
	  <h3 align="center">Registration of consumer mobile number</h3>
	  <hr>
	  <div class="row" style="padding-top:10px;">
	  <div class="col-sm-1"></div>
	  	<div class="form-group">
	  	<div class="col-sm-3">
				<label>Mobile No:</label>
				</div>
				<div class="col-sm-6">
				<input type="text"name="mobno" pattern="[0-9]{1,}" required class="form-control"></div>
				</div>
			<div class="col-sm-2"></div></div>
			
				<div class="row" style="padding-top:10px;">
				 <div class="col-sm-1"></div>
	  	<div class="form-group">
	  	<div class="col-sm-3">
				<label>Consumer Id:</label>
				</div>
				<div class="col-sm-6">
				<input type="number"name="conid" pattern="[0-9]{1,}" required class="form-control"></div>
				</div>
				<div class="col-sm-2"></div></div>
				
				<div class="row" style="padding-top:10px;">
				 <div class="col-sm-1"></div>
	  	<div class="form-group">
	  	<div class="col-sm-3">
				<label>Distribution Company:</label>
				</div>
				<div class="col-sm-6">
				<select name="comp" required class="form-control">
				<option>
				North Bihar Power Distribution Company
				</option>
					</select>
				</div>
				</div>
				<div class="col-sm-2"></div></div>
				
				<div class="row" style="padding-top:10px;">
				 <div class="col-sm-1"></div>
	  	<div class="form-group">
	  	<div class="col-sm-3">
				<label>OTP:</label>
				</div>
				<div class="col-sm-6">
				<input type="number"name="otp" pattern="[0-9]{1,}" required class="form-control"></div>
				</div>
				<div class="col-sm-2"></div></div>
				
				</div>
				<div class="col-sm-2"></div>
				</div> 
				
	  </div>   
			</body>
</html>

