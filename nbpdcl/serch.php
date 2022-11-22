
<?php
$user_id=0;
if(isset($_POST['s']))
{
	$user_id=$_POST['user_id'];

$query="select * from employee_detail where user_id=$user_id";
$record=mysql_query($query1);
$data=mysql_fetch_array($record1);
?>
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
	
	height:500px;
	width:700px;
	position: absolute;
	top:48%;
	left:24%;
	border:;
	border-radius:5px;
	background-color:rgba(250, 250, 250,0.5);
	box-shadow:7px 12px 18px #888888;
	overflow-y: auto;
}
	
.txt{
	color:black;

	
	
</style>
</head>
<?php
	include("menu.php");
	?>
	<body style="background-size: cover" background="hh.jpeg">
	
	<center>
	<br><br><br>
	<img src="icon/Users-Administrator-2-icon.png"  width="150" height="150" class="img-circle"style="padding-top:0"></center>
	<center><h3><b><u>Employee Info</u></b></h3></center>
	<div class="box">
	<form method="post" action="" enctype="multipart/form-data">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			
			<div class="form-group">
				<label class="txt">User id:</label>
				<div class="input-group">
			 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input type="text"name="user_id" class="form-control" placeholder=" Enter your user id">
			</div>
			</div>
			<button type="submit"name="s"class="btn btn-lg btn-success" >search</button>
			
			<label class="txt">User name:</label>
			<div class="input-group">
			 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				
				<input type="text" name="user_name" class="form-control" placeholder=" Enter user name" value="<?php echo $data[1];?>">
			</div>
			<button type="submit"name="u1"class="btn btn-lg btn-success">update</button>
		</div>
		</div>
		
			</form>
		</div>
	
		
	
	
		
	</body>
</html>
<?
if(isset($_POST['u1']))
{
	$user_name=$_POST['user_name'];
	$query="update employee_detail set user_id='$user_id'";
	$data=mysql_query($query);
	if($data==true)
	{
		echo"<script>alert('data updated')</script>";
	}
	else{
		echo"<script>alert('data not updated')</script>";
	}
}?>