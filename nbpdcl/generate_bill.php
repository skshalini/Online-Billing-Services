<?php
include("conn.php");
include("emp_menu.php");

$query2="select * from bill_2 order by bill_no desc limit 1";
        $record2=mysql_query($query2);
        $data2=mysql_fetch_array($record2);

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>bill_report</title>
		<link href="bootstrap\css\bootstrap.css" rel="stylesheet"/>
		<script src="bootstrap/jquery/jquery3.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  <script type="text/javascript">
         function print_page() {
            var ButtonControl = document.getElementById("btnprint");
            var ButtonControl1 = document.getElementById("btngoback");
                       
            ButtonControl.style.visibility = "hidden";
             ButtonControl1.style.visibility = "hidden";
             
              
            window.print();
            ButtonControl.style.visibility = 'visible';
             ButtonControl1.style.visibility = 'visible';
             
            
        }
    </script>
<style>
.bg-img {
	background-image: url("image/abss2.png");
	min-height:50px;
	width:100%;
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
</style>
</head>
<body style="background-size: cover;background-color:#c4c2fa" background="image/.png">
<form method="post" action="">
<br>

		<div style="float: left; padding-left: 10px">
		<a href="calculate_bill.php"style="text-decoration: none;color: black">		<button type="button" class="btn  btn1"   id="btngoback"  ><span class=" glyphicon glyphicon-circle-arrow-left" style="font-size:16px"><b> GoBack</b></span></button></a>	
		</div>
		<div style="float: right; padding-right: 10px">
  <button type = "button" class="btn  btn1"  id = "btnprint"  onclick = "print_page()"><span class=" glyphicon glyphicon-print" style="font-size:16px "><b> Print</b></span></button>
	</div><br>


<div class="row">

	<table height="650px" width="600px" border="1px"align="center"style="background-color:#ffffff;">
	<td colspan="3" style="background-color:#ffffff"><img src="image/abss2.png"style="padding-left:10px;padding-right: 10px"></td>
		<tr height="100px">
		
		<td><label style="padding-left: 10px"><u>Name and Address</u></label><br>
			<label style="padding-left: 10px">Name: <?php echo $data2[1]; ?> </label><hr>
			<label style="padding-left: 10px">Address:<br>
			vill/city: <?php echo $data2[2]; ?><br>
			 street no: <?php echo $data2[3]; ?><br>
			 pin code: <?php echo $data2[4]; ?><br>
			 </label>
		</td>
		<td><label style="padding-left: 10px">Consumer-Id: <?php echo $data2[0]; ?></label><br>
			<label style="padding-left: 10px">Bill No: <?php echo $data2[5]; ?>    </label><br>
			<label style="padding-left: 10px">Date: <?php echo $data2[6]; ?>  </label></td>
		<td><label style="padding-left: 10px">Bill Month: <?php echo $data2[7]; ?></label><br>
		
		
			<label style="padding-left: 10px">Payment:  <?php echo $data2[19]; ?>    </label><br></td>
			</tr>
		<tr >
		<td colspan="3" height="100px">
		<label style="padding-left: 10px">Connection-Date: <?php echo $data2[10]; ?></label> <br>
			<br>
			<h6 align="right"><label style="padding-right: 20px"><h5><b>Advance Payment: <?php echo $data2[9]; ?></b></h5></label></h6><br>
			<h6 align="right"><label style="padding-right: 20px"><h5><b>Previous Bill Due: <?php echo $data2[8]; ?></b></h5></label></h6> <br>
		</td></tr>
		<tr height="200px">
		<td colspan="2">
			<table class="table">
			<tr>
			<th>meter-no</th><th>Date</th><th>Reading</th><th>Month
			</th>
			</tr>
			<tr><td><?php echo $data2[12]; ?></td><td><?php echo $data2[13]; ?></td>
			<td><?php echo $data2[14]; ?></td><td><?php echo $data2[7]; ?></td></tr>
			</table>
		</td>
		<td>
<label style="padding-left: 10px">Fixed-Charge:<?php echo $data2[15]; ?></label><br>
<label style="padding-left: 10px">Meter Charge:<?php echo $data2[16]; ?></label><br>
<label style="padding-left: 10px">Due Bill:<?php echo $data2[8]; ?></label><br>
<label style="padding-left: 10px">Current Bill:<?php echo $data2[17]; ?></label><br>
<label style="padding-left: 10px">Total Bill:<?php echo $data2[18]; ?></label>
		</td>
		</tr>
	</table>
	</div>
	
	<br>
	
</form>		
	<br>
	
	</body>
</html>
