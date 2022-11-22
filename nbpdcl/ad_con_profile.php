<?php
include("conn.php");
include("admin_menu.php");
$aid=$_REQUEST['id'];
	$query1="select * from new_connection where con_id=$aid";
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
	
	height:500px;
	width:700px;
	position: absolute;
	top:%;
	left:20%;
	border:;
	border-radius:5px;
	background-color:rgba(250, 250, 250,0.5);
	box-shadow:7px 12px 18px #888888;
}
	
.txt{
	color:black;
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
		<a href="ad_con_list.php"style="text-decoration: none;color: black">		<button type="button" class="btn  btn1"   id="btngoback"  ><span class=" glyphicon glyphicon-circle-arrow-left" style="font-size:16px"><b> GoBack</b></span></button></a>	
		</div>
		<div style="float: right; padding-right: 10px">
  <button type = "button" class="btn  btn1"  id = "btnprint"  onclick = "PrintDiv()"><span class=" glyphicon glyphicon-print" style="font-size:16px "><b> Print</b></span></button>
	</div><br>
	<div id="printarea">
	<div class="box">
	<div class="container-fluid" style="background-color:#37474F;opacity:0.7;"><font face="Agency FB" color="white"><h2>Consumer-id: <?php echo $data1[0]?></h2></font></div>
	<br>
	<center><img src="<?php echo $data1[15];?>"  width="200px" height="200px"style="margin-top: 20px;padding-left:10px;"></center>
	
  <table class="table">
		<table class="table table-bordered">
	<tr class="info">		
				<td><h4><label>Name:</label></h4></td>
			   <td><h4><label><?php echo $data1[4];?></label></h4></td>
   </tr>
			<tr class="warning">
				<td><h4><label>Father's Name:</label></h4></td>
				<td><h4><label><?php echo $data1[5];?></label></h4></td>
			</tr>
			<tr class="success">
				<td><h4><label>Date-of-Birth:</label></h4></td>
				<td><h4><label><?php echo $data1[6];?></label></h4></td>
			</tr>
			
			<tr class="danger">
				<td><h4><label>gender:</label></h4></td>
				<td><h4><label><?php echo $data1[7];?></label></h4></td>
			</tr>
			<tr class="warning">
				<td><h4><label>Mob\Phone no:</label></h4></td>
				<td><h4><label><?php echo $data1[14];?></label></h4></td>
			</tr>
            <tr class="info">
            	<td><h4><label>Email:</label></h4></td>
            	<td><h4><label><?php echo $data1[13];?></label></h4></td>
            </tr>
            <tr class="info">
            	<td><h4><label>Address:</label></h4></td>
            	<td><h4><label>city\village-<?php echo $data1[9];?>, street no-<?php echo $data1[10];?><br> plot\flat no-<?php echo $data1[11];?>, district-<?php echo $data1[20];?><br>pin code-<?php echo $data1[12];?></label></h4></td>
            </tr>
            <tr class="info">
            	<td><h4><label>Division:</label></h4></td>
            	<td><h4><label><?php echo $data1[3];?></label></h4></td>
            </tr>
            <tr class="info">
            	<td><h4><label>Connection Type:</label></h4></td>
            	<td><h4><label><?php echo $data1[1];?></label></h4></td>
            </tr>	
            <tr class="info">
            	<td><h4><label>Connection Date:</label></h4></td>
            	<td><h4><label><?php echo $data1[16];?></label></h4></td>
            </tr>
            </table></table></div></div>
</div>			</body>
</html>

