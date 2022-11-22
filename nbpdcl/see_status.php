<?php

include("conn.php");
include("con_menu2.php");
	
 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link href="bootstrap\css\bootstrap.css" rel="stylesheet"/>
		<script src="bootstrap/jquery/jquery3.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<style>
.box{
	
	height:auto;
	width:900px;
	position:relative;
	top:70%;
	left:;
	border:;
	border-radius:7px;
	background-color:;
	box-shadow:7px 12px 18px white;
	margin-right: ;
	
}
.txt{
	color:white;
}
	</style>
	</head>
	<body style="background-image:url(image/Simple-Background-Images-53.png);background-size:cover;">
	
	<div class="container">
	<h2><font color="white">Complaint status</font></h2>
	<div class="col-sm-8 box">
	
	<table class="table txt">
		<tr>
			<th>complaint-id</th><th>consumer id</th><th>complaint date</th>
			<th>category</th><th>description</th><th>status</th>
		</tr>
		<?php
		$con_id=$_SESSION['con_id'];
	
 $query3="select * from complaint where con_id=$con_id";
	$record3=mysql_query($query3);
	while($data3=mysql_fetch_array($record3))

		{?>
		<tr>
		    <td><?php echo $data3[0];?></td>
			<td><?php echo $data3[3];?></td>
			<td><?php echo $data3[1];?></td>
			<td><?php echo $data3[2];?></td>
			<td><?php echo $data3[4];?></td>
			<td><?php echo $data3[5];?></td>
		</tr>
		<?php }?>
	</table>		
			
			
			
			
			</div>
			<div class="col-sm-4"></div>
			</div>
			
	</body>
</html>
<?php
if(isset($_POST['b1']))
 {
$category=$_POST['category'];
$complain_id=$_POST['complain_id'];
$con_id=$_POST['con_id'];
$description=$_POST['desp'];
$status_4=$_POST['status_4'];

$query="update complaint set  category='$category',con_id='$con_id',description='$description',status_4='$status_4' where comp_id=$complain_id";
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