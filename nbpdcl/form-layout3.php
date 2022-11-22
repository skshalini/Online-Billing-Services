<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>form</title>
		<link href="bootstrap\css\bootstrap.css" rel="stylesheet"/>
		<script src="bootstrap/jquery/jquery3.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
<style>

.box{
	
	height:550px;
	width:700px;
	position: absolute;
	top:45%;
	left:24%;
	border:;
	border-radius:5px;
	background-color:rgba(250, 250, 250,0.5);
	box-shadow:7px 12px 18px #888888;
}
	
.txt{
	color:black;
}	
</style>
</head>
<?php
	include("menu.php");
	?>
	<body style="background-size: cover" background="hh.jpeg">
	
	<center>
	<img src="icon/Users-Administrator-2-icon.png"  width="150" height="150" class="img-circle"style="padding-top: 0"></center>
	<div class="box">
	<form method="post" action="">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="form-group">
			
				<h3 class="txt"><center><u><b>Employee Form</b></u></center></h3><br>
				
			<div class="form-group">
				<label class="txt">Mobile no.:</label>
				<div class="input-group">
			 <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
				<input type="number"name="num" class="form-control" placeholder=" Enter digit only">
			</div>
			</div>
			<div class="form-group">
				<label class="txt">Aaddhar no.:</label>
				<div class="input-group">
			 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input type="number" name="aaddhar" class="form-control" placeholder=" 0000 0000 0000">
			</div>
			</div>
			<div class="form-group">
				<label class="txt">Department:</label>
				<select class="form-control">
					<option>Select</option>
					<option>Department Detail</option>
				</select>
			</div>
			<div class="form-group">
				<label class="txt">Designation:</label>
				<select class="form-control">
					<option>Select</option>
					<option>Designation Detail</option>
				</select>
			</div>
			
			<div class="form-group">
				<label class="txt">Photo :</label>
				<input type="file"name="img"class="form-control"placeholder="file not choosen"></div>
			
			
			<button type="submit"name="b1"class="btn btn-lg btn-primary" value="submit">Submit</button>
			<button type="reset"name="b2"class="btn btn-lg btn-primary" value="reset">Reset</button>
		</div>
		</div>
		</div>
		<div class="row">
		<div class="col-sm-2"></div>
		<center>
		<a href="form-layout.php"style="text-decoration:none"><h4><b>Go Back</b></h4></a>
	</center></div>
	
	
	
	
	
	</form>	
	</div>
		
	</body>
</html>
<?php
include("conn.php");
 if(isset($_POST['b1']))
 {
$company_name=$_POST['com_name'];
$user_name=$_POST['user_name'];
$user_id=$_POST['user_id'];
$email=$_POST['email'];
$password=$_POST['pass'];
$gender=$_POST['gender'];
$answer=$_POST['answer'];
$address=$_POST['address'];
$mobile_no=$_POST['num'];
$aaddhar_no=$_POST['aaddhar'];
$query="insert into employee_detail (,company_name,user_name,user_id,email,password,gender,answer,address,mobile_no,aaddhar_no) values('$company_name','$user_name','$user_id','$email','$password','$gender','$answer','$address','$aaddhar_no')";
$data=mysql_query($query);
if($data==true)
{
	
	echo"<script>alert('data inserted')</script>";
	echo"<script>window.location.href='form-layout3.php' </script>";
}
else{
	echo"<script>alert('data not inserted')</script>";
	
}
}
?>