
<?php include("conn2.php");
?>


<?php
	$dept_id=0;
	if(isset($_POST['s']))
 {
$dept_id=$_POST['dept_id'];
}	
	$query1="select * from dept_form where dept_id=$dept_id";
	$record1=mysql_query($query1);
	$data1=mysql_fetch_array($record1);	
	//echo $data1[0];	
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
	height:400px;
	width:700px;
	position: absolute;
	top:55%;
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
	
	
	
	<body style="background-size: cover" background="hh.jpeg">
	
	<center>
	<img src="icon/Users-Administrator-2-icon.png"  width="200" height="200" class="img-circle"style="padding-top: 0"></center>
	<div class="box">
	<form enctype="multipart/form-data" method="post" action="">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="form-group"><br><br>
			
				<h3 class="txt"><center><u><b>Manage Department Detail</b></u></center></h3><br>
				
			<div class="form-group">
				<label class="txt"><h4>Enter Id</h4></label>
					<input type="text"name="dept_id" class="form-control"placeholder="enter Department Id*" value="<?php echo $data1[0];?>">
				<button type="submit"name="s"class="btn btn-lg btn-success">Search</button>
				
				
				
			</div>
			
				
			<div class="form-group">
				<label class="txt"><h4>name</h4></label>
					<input type="text"name="d_name" class="form-control"placeholder="enter name" value="<?php echo $data1[1];?>">
				
			</div>
			
			<button type="submit"name="b1"class="btn btn-lg btn-success">Update</button>
			<button type="submit"name="b1"class="btn btn-lg btn-success">Delete</button>
			
			
		</div>
		
		</div>
	
	
	</div>
	</form>	
	</div>
		
	</body>
</html>


<?php




 if(isset($_POST['b1']))
 {
$d_name=$_POST['d_name'];



$query="update dept_form set dept_name='$d_name'";
$data=mysql_query($query);
if($data==true)
{
	
	echo"<script>alert('data updated')</script>";
}
else{
	echo"<script>alert('data not updated')</script>";
	
}
}
?>