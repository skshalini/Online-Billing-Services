<?php
include("conn.php");
	include("admin_menu.php");
	$eid=$_REQUEST['id'];
	
	$query1="select * from employee_detail where emp_id=$eid";
	$record1=mysql_query($query1);
	$data1=mysql_fetch_array($record1);	
	//echo $data1[0];
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
  <script type="text/javascript">
     
        
        
         function PrintDiv() {
         var divToPrint = document.getElementById('printarea');
         var popupWin = window.open('', '_blank', 'width=800px,height=900px,location=no,left=200px');
         popupWin.document.open();
         popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
         popupWin.document.close();
     }

        
    </script>

<style>

.box{
	
	height:auto;
	width:730px;
	position: relative;
	top:%;
	left:10%;
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
	.btn1
{
	width: 120px;
	height: 40px;
	background-color:#818398;
	border:black;
	border-radius:5px;
	font-color:white;
	margin-left: 10px;
}
.btn1:hover
{
background-color:#afbfc5;	
}
	
</style>
</head>
	<body style="background-size: cover;background-color: #95bbbf;" >
	<br>
	<div style="float: left; padding-left: 10px">
		<a href="emp_display.php"style="text-decoration: none;color: black">		<button type="button" class="btn  btn1"   id="btngoback"  ><span class=" glyphicon glyphicon-circle-arrow-left" style="font-size:16px"><b> GoBack</b></span></button></a>	
		</div>
		<div style="float: right; padding-right: 10px">
  <button type = "button" class="btn  btn1"  id = "btnprint"  onclick = "PrintDiv()"><span class=" glyphicon glyphicon-print" style="font-size:16px "><b> Print</b></span></button>
	</div><br><div id="printarea">
	<div class="box">	<div class="container-fluid" style="background-color:#37474F;"><font face="Agency FB" color="white"><h2>Employee-id: <?php echo $data1[0]?></h2></font></div>
	<br>
	<center><img src="<?php echo $data1[14];?>" width="250px" height="250px"style="padding-top:0;padding-left:30px;" class="img-circle"></center>
	<center><font face="Comic Sans MS"><h3><b><?php echo $data1[2];?></b></h3></font></center><hr>
<div class="container">
 <font face="Comic Sans MS"> <table class="bgcolor" >
		<table class="table tab" align="center">
	<tr class="primay">		
				<td><h3>company:</h3></td>
			   <td><h4><?php echo $data1[1];?></h4></td>
   </tr>
			<tr class="secondary">
				<td><h3>Department:</h3></td>
				<td><h4><?php echo $data1[12];?></h4></td>
			</tr>
			<tr class="success">
				<td><h3>Designation</h3></td>
				<td><h4><?php echo $data1[13];?></h4></td>
			</tr>
			<tr>
				<td><h3>Gender</h3></td>
				<td><h4><?php echo $data1[5];?></h4></td>
			</tr>
			<tr class="danger">
				<td><h3>Mobile no:</h3></td>
				<td><h4><?php echo $data1[10];?></h4></td>
			</tr>
			<tr class="warning">
				<td><h3>Email:</h3></td>
				<td><h4><?php echo $data1[3];?></h4></td>
			</tr>
            <tr class="info">
            	<td><h3>Aadhar no:</h3></td>
            	<td><h4><?php echo $data1[11];?></h4></td>
            </tr>	
             <tr class="info">
            	<td><h3>Address:</h3></td>
            	<td><h4><?php echo $data1[9];?></h4></td>
            </tr>	
            </table></table></font>	</div>
            </div></div>
            <div class="row">
	<div class="col-sm-12"style="top: 220%; position: absolute;width: 120%;">
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

