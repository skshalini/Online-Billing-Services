]<!DOCTYPE html>
<?php
include("conn.php");
include("admin_menu.php");
	$GLOBALS['con_type2']=$_REQUEST['con_type'];
	$query="select * from fixed_charge where con_type='".$GLOBALS['con_type2']."'";
	$record=mysql_query($query);
	$data=mysql_fetch_array($record);	
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
.tab{
	height:20px;
	width:20px;
	overflow-y: auto;
}
</style>
</head>

	<body style=" background-image:url(image/abstract-background-wallpaper.jpg);background-size: cover;">
	<br>
	<br>
	<br>
	<div class="container">
    <div class="col-sm-8">
		<div class="panel panel-info">
			
			<div class="panel-body" style="background-color:rgba(249, 168, 37,0.7)">
			<div class="bg-img">
			<div class="content"><font face="Gunplay"color="white" size="11">Please fill these details...</font></div>		
				</div>	
	<font face="Gunplay"color="#00897B"><h1 align="">Fixed-Charge</h1></font>
			<div class="panel panel-info">
			<div class="panel-body" >
			 <form method="post" action="">
			<div class="form-group">
				<label>Connection-Type:</label>
					<input type="text" name="ctype" required readonly class="form-control" value="<?php echo $GLOBALS['con_type2'];?>">
			</div>
			<div class="form-group">
				<label>load:</label>
				<input type="text" name="load" title="load must be a number" required pattern="[0-9]{2,}" class="form-control"value="<?php echo $data[1];?>">
				
			</div>
			<div class="form-group">
				<label>Fixed charge:</label>
				<input type="text" name="f_charge" title="fixed charge must be a number" required pattern="[0-9]{2,}" class="form-control"value="<?php echo $data[1];?>">
				
			</div>
			<button type="submit"name="b1"class="btn btn-md btn-success" value="submit">update</button>
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
</html>
<?php

if(isset($_POST['b1']))
 {
 	$con_type=$GLOBALS['con_type2'];
$load=$_POST['load'];
$fixed_charge=$_POST['f_charge'];
$query1="UPDATE `fixed_charge` SET `load`='$load',`fixed_charge_1`='$fixed_charge' WHERE`con_type`='$con_type';";
$data1=mysql_query($query1);
if($data1==true)
{
	
	echo"<script>alert('Data updated Successfully')</script>";
	echo"<script>window.location.href='admin.php' </script>";
}
else{
	echo"<script>alert('Data not updated')</script>";
	echo"<script>window.location.href='admin.php' </script>";
}
}?>


