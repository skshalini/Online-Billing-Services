<?php
include("conn.php");
include("admin_menu.php");
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
	top:60%;
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

	<body style="background-size: cover" background="image/gas-and-power.jpeg">
	
	<center>
	<img src="icon/Users-Administrator-2-icon.png"  width="120" height="120" class="img-circle"style="padding-top: 0"></center>
	<div class="box">
	<form method="post" action="">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="form-group">
			
			<h3 class="txt"><center><u><b>Department Detail</b></u></center></h3><br>
				
			
			<div class="form-group">
				<label class="txt">Department name:</label>
				<input type="text" name="dept_name" class="form-control" placeholder="Enter your department name" pattern="[a-zA-Z]{2,}+">
			</div>
			
				
			
			<button type="submit"name="b1"class="btn btn-lg btn-primary">Submit</button>&nbsp;
			<button type="reset"name="b2"class="btn btn-lg btn-primary" value="reset">Reset</button>
		
		<div class="form-group"><br>
			<h3 class="txt"><center><u><b>Designation Detail</b></u></center></h3>
				</div>
			<div class="form-group">
				<label class="txt">Designation name:</label>
				<input type="text" name="desg_name" class="form-control" placeholder=" Enter your designation name" pattern="[a-zA-Z]{2,}+">
			</div>
			<div class="form-group">
				<label class="txt">Department Name:</label>
				<select class="form-control" name="t3">
				<option>select</option>
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
				<button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#myModal">View</button>
				
			 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
         <div class="row">
		<div class="col-sm-4"><br>
		<div class="alert alert-info">
		<table class="table">
		<h3>Department Form</h3>
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
		<div class="col-sm-4"><br><br>
		<div class="alert alert-info">
		<table class="table">
		<h3> Designation Form</h3>
	<tr>
		<th>Designation-id</th>	
		<th>Designation-name</th>
		<th>Department Name</th>
		
	</tr>
	<?php
	include("conn.php");
	$query="select * from desg_form";
	$record=mysql_query($query);
	while($data=mysql_fetch_array($record))
	{
		?>
<tr>
	<td><?php echo $data[0];?></td>
	<td><?php echo $data[1];?></td>
	<td><?php echo $data[2];?></td>
	
</tr>
<?php
}
	?>

</table>
</div>
			
		</div>
	</div>	 
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
        
      
      
    </div>
  </div>
  
</div>
		</div>	
		</div>
	
	</div>
	</div>
	
	</form>	
	</div>
	
	
	
	<div class="row">
	<div class="col-sm-12"style="top: 155%; position: absolute;width: 120%;">
		<div class="footer" >
		<footer >
		<p>&copy; Copyright</p>
<p><h4 align="center" style="font-size:15px;color:white;padding-top:px"><span class="glyphicon glyphicon-earphone " style="color: red"></span> Toll free helpline no. 1912 | <span class="glyphicon  glyphicon-map-marker" style="color:red" ></span>Our official website <a href="#">www.nbpdcl.in</a></h4>
</p>
</footer>
  
</div>
</div>
</div>
	
	<br><h1 ></h1>
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
	
	echo"<script>alert('Data Submitted Successfully')</script>";
	echo"<script>window.location.href='desg_form.php' </script>";
}
else{
	echo"<script>alert('Data Not Submitted')</script>";
	echo"<script>window.location.href='desg_form.php' </script>";
}
}
?>



<?php
include("conn.php");
 if(isset($_POST['b3']))
 {
$desg_name=$_POST['desg_name'];
$dept_name=$_POST['t3'];
$query="insert into desg_form (desg_name,dept_name) values('$desg_name','$dept_name')";
$data=mysql_query($query);
if($data==true)
{
	
	echo"<script>alert('Data submitted successfully')</script>";
}
else{
	
	echo"<script>alert('Data not submitted')</script>";
}
}
?>