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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>

.box{
	
	height:auto;
	width:700px;
	position: absolute;
	top:48%;
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
  background-color:  #252850;
  color: #ffffff;
  text-align: center;
  font-size: 15px;
  padding: 15px;
  height: 80px;
  bottom:10px;
  width: 90%;
  margin-top: 1%;
}
	
</style>
</head>
<?php
	include("con_menu2.php");
	$GLOBALS['con_id']=$_SESSION['con_id'];
$query="select * from new_connection where con_id=".$GLOBALS['con_id']."";
 $record=mysql_query($query);
    $data=mysql_fetch_array($record);
	?>
	<body  background="image/close-up-blank-notepad-pencil-cup-keyboard-turquoise-background-with-space-text_23-2147916085.jpg" style="background-size: cover;">
	<div class="box">
	<div class="container-fluid" style="background-color:#37474F;opacity:0.7;"><font face="Agency FB" color="white"><h2>Consumer-id: <?php echo $data[0]?></h2></font></div>
	<br>
	<center><img src="<?php echo $data[15];?>"  width="200px" height="200px"style="margin-top: 20px;padding-left:10px;"></center>
	
  <table class="table">
		<table class="table table-bordered">
	<tr class="info">		
				<td><h4><label>Name:</label></h4></td>
			   <td><h4><label><?php echo $data[4];?></label></h4></td>
   </tr>
			<tr class="warning">
				<td><h4><label>Father's Name:</label></h4></td>
				<td><h4><label><?php echo $data[5];?></label></h4></td>
			</tr>
			<tr class="success">
				<td><h4><label>Date-of-Birth:</label></h4></td>
				<td><h4><label><?php echo $data[6];?></label></h4></td>
			</tr>
			
			<tr class="danger">
				<td><h4><label>gender:</label></h4></td>
				<td><h4><label><?php echo $data[7];?></label></h4></td>
			</tr>
			<tr class="warning">
				<td><h4><label>Mob\Phone no:</label></h4></td>
				<td><h4><label><?php echo $data[14];?></label></h4></td>
			</tr>
            <tr class="info">
            	<td><h4><label>Email:</label></h4></td>
            	<td><h4><label><?php echo $data[13];?></label></h4></td>
            </tr>
            <tr class="info">
            	<td><h4><label>Address:</label></h4></td>
            	<td><h4><label>city\village-<?php echo $data[9];?>, street no-<?php echo $data[10];?><br> plot\flat no-<?php echo $data[11];?>, district-<?php echo $data[20];?><br>pin code-<?php echo $data[12];?></label></h4></td>
            </tr>
            <tr class="info">
            	<td><h4><label>Division:</label></h4></td>
            	<td><h4><label><?php echo $data[3];?></label></h4></td>
            </tr>
            <tr class="info">
            	<td><h4><label>Connection Type:</label></h4></td>
            	<td><h4><label><?php echo $data[1];?></label></h4></td>
            </tr>	
            <tr class="info">
            	<td><h4><label>Connection Date:</label></h4></td>
            	<td><h4><label><?php echo $data[16];?></label></h4></td>
            </tr>
            </table></table>
</div>
 <div class="row">
	<div class="col-sm-12"style="top: 240%; position: absolute;width: 115%;">
		<div class="footer" >
		<footer >
		<p>&copy; Copyright</p>
<p><h4 align="center" style="font-size:15px;color:white"><span class="glyphicon glyphicon-earphone " style="color: red"></span> Toll free helpline no. 1912 | <span class="glyphicon  glyphicon-map-marker" style="color:red" ></span>Our official website <a href="#">www.nbpdcl.in</a></h4>
</p>
</footer>
  
</div>
</div>
</div>           
			</body>
</html>

