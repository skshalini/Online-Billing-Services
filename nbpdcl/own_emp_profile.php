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
	overflow-y: auto;
}
.bgcolor{
	background-color:#00BCD4;
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
  width: 100%;
}
	
</style>
</head>
<?php
$GLOBALS['emp_id']=$_SESSION['emp_id'];
$query="select * from employee_detail where emp_id= ".$GLOBALS['emp_id']."";
 $record=mysql_query($query);
    $data=mysql_fetch_array($record); 
?>
	<body style="background-size: cover;background-color: #95bbbf" background="">
	<div class="box">
	<div class="container-fluid" style="background-color:#37474F;opacity:0.7;"><font face="Agency FB" color="white"><h2>Employee-id: <?php echo $data[0]?></h2></font></div>
	<br>
	<center><img src="<?php echo $data[14];?>" width="250px" height="250px"style="padding-top:0;padding-left:30px;" class="img-circle"></center>
	<center><font face="Comic Sans MS"><h3><b><?php echo $data[2];?></b></h3></font></center><hr>
<div class="container">
 <font face="Comic Sans MS"> <table class="bgcolor" >
		<table class="table tab" align="center">
	<tr class="primay">		
				<td><h3>company:</h3></td>
			   <td><h4><?php echo $data[1];?></h4></td>
   </tr>
			<tr class="secondary">
				<td><h3>Department:</h3></td>
				<td><h4><?php echo $data[12];?></h4></td>
			</tr>
			<tr class="success">
				<td><h3>Designation</h3></td>
				<td><h4><?php echo $data[13];?></h4></td>
			</tr>
			<tr>
				<td><h3>Gender</h3></td>
				<td><h4><?php echo $data[5];?></h4></td>
			</tr>
			<tr class="danger">
				<td><h3>Mobile no:</h3></td>
				<td><h4><?php echo $data[10];?></h4></td>
			</tr>
			<tr class="warning">
				<td><h3>Email:</h3></td>
				<td><h4><?php echo $data[3];?></h4></td>
			</tr>
            <tr class="info">
            	<td><h3>Aadhar no:</h3></td>
            	<td><h4><?php echo $data[11];?></h4></td>
            </tr>	
             <tr class="info">
            	<td><h3>Address:</h3></td>
            	<td><h4><?php echo $data[9];?></h4></td>
            </tr>
           
            </table></table></font>	</div></div>
           <div class="row">
	<div class="col-sm-12"style="top: 240%; position: absolute;width: 103%;">
		<div class="footer" >
		<footer>
		<p>&copy; Copyright</p>
<p><h4 align="center" style="font-size:15px;color:white;padding-top:px"><span class="glyphicon glyphicon-earphone " style="color: red"></span> Toll free helpline no. 1912 | <span class="glyphicon  glyphicon-map-marker" style="color:red" ></span>Our official website <a href="#">www.nbpdcl.in</a></h4>
</p>
</footer>
  
</div>
</div>
</div>
			</body>
</html>

