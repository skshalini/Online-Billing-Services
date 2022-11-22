<?php
include("conn.php");
include("admin_menu.php")
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

.bg-img {
	background-image: url("image/12.jpg");
	min-height:150px;
	width:70%;
	background-position: center;
	background-size:cover;
	position: relative;
	padding:0;
	
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
.th1{
 
 	font-size: 20px;
 	color:#1b3d63;
 	
 }


.box{
	
	height:auto;
	width:900px;
	position:absolute;
	top:50%;
	left:-10%;
	border:2px solid black;
	border-radius:5px;
	background-color: white;
}
</style>
</head>

	<body style="background-color:#a9c9ef;">
	
		
		<br>
		<div style="float: left; padding-left: 10px">
		<a href="admin.php"style="text-decoration: none;color: black">		<button type="button" class="btn  btn1"   id="btngoback"  ><span class=" glyphicon glyphicon-circle-arrow-left" style="font-size:16px"><b> GoBack</b></span></button></a>	
		</div>
		<div style="float: right; padding-right: 10px">
  <button type = "button" class="btn  btn1"  id = "btnprint"  onclick = "PrintDiv()"><span class=" glyphicon glyphicon-print" style="font-size:16px "><b> Print</b></span></button>
	</div><br>
	<div class="container" style="padding: 20px">
	<br>
	<div class="col-sm-2"></div>
	<div id="printarea">
	<div class="col-sm-8">
	<div class="box">
	 <div class="container-fluid "  style="background-color:#468fa2; padding-top:0px">
		<font face="stencil" color="white" ><h1 align="center">Meter Allocation Report</h1> </font>
		
		</div>
		<table class="table  table-responsive" align="center" cellpadding="10px" cellspacing="50px" style="width:500px">
	
	
		<thead>
	<tr class=" th1">
		<th  height="50px"><center>Consumer id</center></th><th><center>Applicant_name</center></th><th><center>Email</center></th><th><center>Mobile no.</center></th><th><center>Meter no.</center></th>
	</tr>
	</thead>

<?php
$query1="select new_connection.con_id,new_connection.applicant_name,new_connection.email,new_connection.mob_no,meter.meter_no from
new_connection,meter where new_connection.con_id=meter.con_id";
$record1=mysql_query($query1);
while($data1=mysql_fetch_array($record1))
{
	?>
<tbody>
<tr class="bg-img">

	<td  align="center" style="padding: 10px" ><font color="#1b3d63" size="4"><?php echo $data1[0];?></font></td>
	<td align="center" style="padding: 10px"><font color="#1b3d63" size="4"  ><?php echo $data1[1];?></font></td>
	<td align="center" style="padding: 10px"><font color="#1b3d63" size="4" ><?php echo $data1[2];?></font></td>
	<td align="center" style="padding: 10px"><font color="#1b3d63" size="4" ><?php echo $data1[3];?></font></td>
	<td align="center" style="padding: 10px"><font color="#1b3d63" size="4"  ><?php echo $data1[4];?></font></td>
	
</tr>
</tbody>
<?php
}?>
</table></div></div></div>
        	

		
		</div>
	
		
		
	</body>
</html>
