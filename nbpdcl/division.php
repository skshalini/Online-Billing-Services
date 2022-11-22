<!DOCTYPE html>
<?php
include("conn.php");
include("admin_menu.php");
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>division</title>
		<link href="bootstrap\css\bootstrap.css" rel="stylesheet"/>
		<script src="bootstrap/jquery/jquery3.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
<style>
.bg-img {
	background-image: url("image/ghhjh.jpg");
	min-height:150px;
	width:100%;
	background-position: center;
	background-size:cover;
	position: relative;
	padding:0;
	}
	.content {
	position: absolute;
	bottom: 0;
	background:rgb(0,0,0);
	background: rgba(0,0,0,0.5);
	color: #f1f1f1;
	width: 100%;
	height:150px;
	padding: 50px;
}
.icon{
	width: 100px;
	height:130px;
	border-radius: 50%;
	position: absolute;
	top:10px;
	left: 570px;
}
	
.txt{
	color:white;
}

</style>
</head>

	<body style=" background-image:url(image/gas-and-power.jpeg);background-size: cover;">
	<div class="container">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
		<div class="panel panel-info">
			<div class="panel-body"style="background-color:rgba(249, 168, 37,0.7)">
			<div class="bg-img">
			<div class="content"><font face="Gunplay"color="white" size="11">Please fill these details...</font><img src="icon/jog.jpg" class="icon"></div>		
				</div>
			<font face="Gunplay"color="#009688"><h1 align="">Division</h1></font>	
	<div class="panel panel-info">
			<div class="panel-body">
      	   <form method="post">
			<div class="form-group">
				<label>Division Name:</label>
				<input type="text" name="division_name" pattern="[a-zA-Z]{2,}+"  required class="form-control">
			</div>
			<div class="form-group">
				<label>Zone:</label>
				<input type="text" pattern="[A-Za-z]{2,}+"  required name="zone" class="form-control">
			</div>
			<button type="submit"name="b6"class="btn btn-md btn-success" value="submit">Save</button>
			<button type="submit"name=""class="btn btn-md btn-warning" value="submit">Reset</button>
		</form>
			</div>
		</div>	
	</div>
	</div>
	</div>
	<div class="col-sm-2"></div>
	</div>
	<?php
	include("footer.php");
	?>
	
	</body>
</html>

<?php
 if(isset($_POST['b6']))
 {

$division_name=$_POST['division_name'];
$zone=$_POST['zone'];
$query="insert into division (div_name,zone) values('$division_name','$zone')";
$data=mysql_query($query);
if($data==true)
{
	
	echo"<script>alert('Data Submitted Successfully')</script>";
	echo"<script>window.location.href='division.php' </script>";
}
else{
	echo"<script>alert('Data not Submitted')</script>";
	echo"<script>window.location.href='division.php' </script>";
}
}
?>
