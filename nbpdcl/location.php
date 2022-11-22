<!DOCTYPE html>
<?php
include("conn.php");
include("admin_menu.php");
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>form</title>
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

	
.txt{
	color:white;
}

</style>
</head>

	<body style=" background-image:url(image/gas-and-power.jpeg);background-size: cover;">
	<center><img src="icon/eyes-office-women-red-icon.png" height="100px" width="100px"></center><br>
	<div class="container">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
		<div class="panel panel-info">
			<div class="panel-body"style="background-color:rgba(249, 168, 37,0.7)">
			<div class="bg-img">
			<div class="content"><font face="Gunplay"color="white" size="11">Please fill these details...</font></div>		
				</div>
					
	<font face="Gunplay"color="#009688"><h1>Location</h1></font>
	<div class="panel panel-info">
	<div class="panel-body">
	    <form method="post">
			<div class="form-group">
				<label>Company-Id:</label>
				<select class="form-control" required name="c_id">
				<option>select</option>
					<?php
					$query="select * from company";
					$record=mysql_query($query);
					while($data=mysql_fetch_array($record))
					{
						?>
					<option><?php echo $data[0];?></option>
					<?php
					}	
					?>
				</select>
			</div>
			<div class="form-group">
				<label>Location:</label>
				<input type="text" name="location_name" required="" pattern="[a-zA-Z]{2,}+" class="form-control">
			</div>
			<button type="submit"name="b5"class="btn btn-md btn-success" value="submit">Save</button>
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
 if(isset($_POST['b5']))
 {
$l_id=$_POST['l_id'];
$c_id=$_POST['c_id'];
$location_name=$_POST['location_name'];
$query="insert into location(c_id,location_name) values('$c_id','$location_name')";
$data=mysql_query($query);
if($data==true)
{
	
	echo"<script>alert('Data Submitted Successfully')</script>";
	echo"<script>window.location.href='location.php' </script>";
}
else{
	echo"<script>alert('Data  Not Submitted')</script>";
	echo"<script>window.location.href='location.php' </script>";
}
}
?>

