<?php
include("conn.php");
?>
<html>
<head>
<title>meter allocation</title>
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
<?php
	include("admin_menu.php");
	?>
	<div class="container">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
<div class="panel panel-info">
		<div class="panel-body" style="background-color:rgba(249, 168, 37,0.7)">
        <div class="bg-img">
			<div class="content"><font face="Gunplay"color="white" size="11">Please fill these details...</font></div>		
				</div>
				<font face="Gunplay"color="#009688"><h1 align="">Meter</h1></font>
		<div class="panel panel-info">
			<div class="panel-body">
	
	
	    <form method="post">
			<div class="form-group">
				<label>Consumer-Id:</label>
				<select class="form-control" name="con_id">
				<option>select</option>
					<?php
			$query="select * from new_connection where status_2='active'";
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
				<label>Meter-No:</label>
				<input type="text" name="meter_no" class="form-control" required patterrn="[0-9]{1,}">
			</div>
			<button type="submit"name="b2"class="btn btn-md btn-success" value="submit">Submit</button>
			<button type="reset" name="r1" class="btn btn-md btn-warning" value="Reset">Reset</button>
			</form>
			</div>
			</div>
	</div>
</div>
</div>

</div>
<?php
include("footer.php");
?>
</body>
<?php
 if(isset($_POST['b2']))
 {
$con_id=$_POST['con_id'];
$meter_no=$_POST['meter_no'];
$query="insert into meter (con_id,meter_no) values('$con_id','$meter_no')";
$data=mysql_query($query);
if($data==true)
{
	
	echo"<script>alert('Data submitted successfully!!')</script>";
	echo"<script>window.location.href='meter.php' </script>";
}
else{
	echo"<script>alert('Data Not Submitted')</script>";
	
}
}
?>
</html>