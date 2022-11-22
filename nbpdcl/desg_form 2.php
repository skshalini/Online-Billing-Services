<?php
include("conn.php");
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
			
			<h3 class="txt"><center><u><b>Department Detail</b></u></center></h3><br>
				
			
			<div class="form-group">
				<label class="txt">Department name:</label>
				<input type="text"name="dept_name" class="form-control" placeholder="Enter your department name">
			</div>
			
				
			
			<button type="submit"name="b1"class="btn btn-lg btn-primary">Submit</button>&nbsp;
			<button type="reset"name="b2"class="btn btn-lg btn-primary" value="reset">Reset</button>
		
		<div class="form-group"><br>
			<h3 class="txt"><center><u><b>Designation Detail</b></u></center></h3>
				</div>
			<div class="form-group">
				<label class="txt">Designation name:</label>
				<input type="text"name="desg_name" class="form-control" placeholder=" Enter your designation name">
			</div>
			
			<div class="form-group">
				<label class="txt">Department Name:</label>
				<select class="form-control" name="t3">
				<?php
				$query="select * from dept_form";
				$record=mysql_query($query);
				while($data=mysql_fetch_array($record))
				{
					?>
					<option><?php echo $data[1];?></option>
					<?php
					}
					?>
					</select>
			</div>
			
				
		<button type="submit"name="b3"class="btn btn-lg btn-primary">Submit</button>&nbsp;
		<button type="reset"name="b4"class="btn btn-lg btn-primary" value="reset">Reset</button>	
		</div>
	
	</div>
	</div>
	<div class="row">
	<div class="col-sm-4"></div>
		<div class="col-sm-4">
		<div class="alert alert-info">
		<table class="table">
	<tr>
		<th>dept-id</th>	
		<th>department-name</th>
		
	</tr>
	<?php
	
	$query="select * from dept_form";
	$record=mysql_query($query);
	while($data=mysql_fetch_array($record))
	{
		?>
<tr>
	<td><?php echo $data[0];?></td>
	<td><?php echo $data[1];?></td>
	
	
</tr>
<?php
}
	?>

</table>
</div>
			
		</div>
		
		
		
		<div class="col-sm-4">
		<div class="alert alert-info">
		<table class="table">
	<tr>
		<th>dept-id</th>	
		<th>department-name</th>
		
	</tr>
	<?php
	include("conn.php");
	$query="select * from dept_form";
	$record=mysql_query($query);
	while($data=mysql_fetch_array($record))
	{
		?>
<tr>
	<td><?php echo $data[0];?></td>
	<td><?php echo $data[1];?></td>
	
	
</tr>
<?php
}
	?>

</table>
</div>
			
		</div>
	</div>	
	</form>	
	</div>	
	</body>
</html>

<?php
include("conn.php");
 if(isset($_POST['b1']))
 {
$dept_name=$_POST['dept_name'];
$query="insert into dept_form (dept_name) values('$dept_name')";
$data=mysql_query($query);
if($data==true)
{
	
	echo"<script>alert('data inserted')</script>";
	echo"<script>window.location.href='desg_form.php' </script>";
}
else{
	echo"<script>alert('data not inserted')</script>";
	
}
}
?>



<?php
include("conn.php");
 if(isset($_POST['b3']))
 {
$desg_name=$_POST['desg_name'];
$query="insert into desg_form (desg_name) values('$desg_name')";
$data=mysql_query($query);
if($data==true)
{
	
	echo"<script>alert('data inserted')</script>";
}
else{
	
	echo"<script>alert('data not inserted')</script>";
}
}
?>