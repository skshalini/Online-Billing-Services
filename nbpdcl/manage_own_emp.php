<?php
include("conn.php");
	include("emp_menu.php");
	?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>profile</title>
		<link href="bootstrap\css\bootstrap.css" rel="stylesheet"/>
		<script src="bootstrap/jquery/jquery3.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>

.box{
	
	height:auto;
	width:730px;
	position: absolute;
	top:48%;
	left:24%;
	border:;
	border-radius:5px;
	background-color:rgba(250, 250, 250,0.5);
	box-shadow:7px 12px 18px #888888;
	overflow-y: hidden;
}
.bgcolor{
	background-color:#00BCD4;
}
	
.txt{
	color:black;

	
	
</style>
</head>
<?php
$GLOBALS['empl_id']=$_SESSION['emp_id'];
$query="select * from employee_detail where emp_id= ".$GLOBALS['empl_id']."";
 $record=mysql_query($query);
    $data=mysql_fetch_array($record); 
?>
	<body style="background-size: cover;background-color: #95bbbf" background="">
	<div class="box">
	<div class="container-fluid" style="background-color:#37474F;opacity:0.7;"><font face="Agency FB" color="white"><h2>Employee-id: 
	<?php echo $data[0]?></h2></font></div>
	<br>
	<form method="post" action="" enctype="multipart/form-data">
	<center><img src="<?php echo $data[14];?>" width="250px" height="250px"style="padding-top:0;padding-left:30px;" class="img-circle"></center>
	<input type="file"name="img"class="form-control"placeholder="change photo" value="<?php echo $data[14];?>">
	<div class="form-group">
	<center><font face="Comic Sans MS"><h3><b>
	<input type="text" name="name" value="<?php echo $data[2];?>" class="form-control"></b></h3></font></center><hr></div>
<div class="container">
 <font face="Comic Sans MS">
		<table class="table tab" align="center">
	
			<tr class="danger">
				<td><h3>Mobile no:</h3></td>
				<td><input type="text" name="mob_no" value="<?php echo $data[10];?>"></td>
			</tr>
			<tr class="warning">
				<td><h3>Email:</h3></td>
				<td><input type="email" name="email" value="<?php echo $data[3];?>"></td>
			</tr>
            <tr class="info">
            	<td><h3>Aadhar no:</h3></td>
            	<td><input type="text" name="aadhar_no" value="<?php echo $data[11];?>"></td>
            </tr>	
             <tr class="info">
            	<td><h3>Address:</h3></td>
            	<td><h4><textarea name="address"><?php echo $data[9];?></textarea></h4></td>
            </tr>	
            
            <tr>
 <td colspan="2"><button type="submit"name="b1"class="btn btn-lg btn-primary" value="submit">Confirm changes</button></td>
 </tr>
            </table></font>	</div></form></div>
			</body>
</html>

<?php
if(isset($_POST['b1']))
 {
 	$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$aadhar=$_POST['aadhar_no'];
$mobile_no=$_POST['mob_no'];
$ft=$_FILES['img']['tmp_name'];
$fn=$_FILES['img']['name'];
$fpath="pic2/".$fn;
move_uploaded_file($ft,$fpath);
$query1="update employee_detail set user_name='$name',email='$email',address='$address',mobile_no='$mobile_no',aadhar_no=$aadhar,photo='$fpath' where emp_id=".$GLOBALS['empl_id']."";
$data1=mysql_query($query1);
if($data1==true)
{
	
	echo"<script>alert('changed successfully !!')</script>";
	echo"<script>window.location.href='own_emp_profile.php' </script>";

}
else{
	echo"<script>alert('Not changed!')</script>";
	echo"<script>window.location.href='manage_own_emp.php' </script>";

}
}

?>