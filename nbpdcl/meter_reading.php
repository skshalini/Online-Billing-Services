<?php
include("conn.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>meter-reading</title>
		<link href="bootstrap\css\bootstrap.css" rel="stylesheet"/>
		<script src="bootstrap/jquery/jquery3.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
<style>

.box{
	height:450px;
	width:700px;
	position: absolute;
	top:35%;
	left:24%;
	border:;
	border-radius:5px;
	background-color:rgba(250, 250, 250,0.5);
	box-shadow:7px 12px 18px #888888;
}
	
.txt{
	color:black;
}
	
.footer {
  background-color: #252850;
  color: #ffffff;
  text-align: center;
  font-size: 15px;
  padding: 15px;
  height: 80px;
  bottom:10px;
  width: 85%; 
}	
</style>
</head>

	<body style="background-size: cover" background="image/aa.jpeg">
	<?php
	include("emp_menu.php");
	?>
	
	
	<div class="box">
	<form method="post" action="">
	<div class="row">
	
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="form-group">
		<h4 style="padding-left:85%"><b>Date:<?php
		$dt=date('d/M/y');
		echo $dt."<br>";
		$GLOBALS['mon']=substr($dt,3,6);
		
		?></b></h4>
				<br><h3 class="txt"><center><u><b>Meter-Reading</b></u></center></h3><br>
				
				
			
			<div class="form-group">
				<label class="txt">Consumer-id</label>
				<select class="form-control" name="id">
				<option>select</option>
					<?php
					$query="select * from new_connection where status_2='active'";
					$record=mysql_query($query);
					while($data=mysql_fetch_array($record))
					{
						?>
					<option><?php echo $data[0];?></option>
					<?php
					}	?>
				</select>
			</div>
			
			
			
			
			<div class="form-group">
			<label class="txt">Meter Reading:</label>
			
			 
				<input type="text"name="reading" class="form-control">
			</div>
			
			
			<button type="submit"name="b1"class="btn btn-lg btn-primary" value="submit">Submit</button>
			<button type="reset"name="b2"class="btn btn-lg btn-success" value="reset">Reset</button>
		</div>
		
	</div>
	
	</div>
	
	</form>	
	</div>
	<div class="row">
	<div class="col-sm-12"style="top: 125%; position: absolute;width: 120%;">
		<div class="footer" >
		<footer >
		<p>&copy; Copyright</p>
<p><h4 align="center" style="font-size:15px;color:white;padding-top:px"><span class="glyphicon glyphicon-earphone " style="color: red"></span> Toll free helpline no. 1912 | <span class="glyphicon  glyphicon-map-marker" style="color:red" ></span>Our official website <a href="#">www.nbpdcl.in</a></h4>
</p>
</footer>
  
</div>
</div>
</div>
		
	</body>
</html>
<?php

 if(isset($_POST['b1']))
 {
$id=$_POST['id'];
$month_bill=$GLOBALS['mon'];
$meter_reading=$_POST['reading'];
$entry_date=$dt;
$status='unpaid';

$query="insert into meter_reading (consumer_id,month_bill,unit_reading,reading_date,status) values($id,'$month_bill','$meter_reading','$entry_date','$status')";

$data=mysql_query($query);
if($data==true)
{
	
	echo"<script>alert('Data submitted successfully!!')</script>";
	echo"<script>window.location.href='meter_reading.php' </script>";
}
else{
	echo"<script>alert('Data not submitted!')</script>";
	
}
}
?>