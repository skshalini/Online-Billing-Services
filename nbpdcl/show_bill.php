<?php
include("conn.php");
//include("con_menu.php");

?>
<?php
$GLOBALS['mon_bill']="";
		
		if(isset($_POST['btn1']))
 {
 	$mon_bil=$_POST['mon'];
 	  $GLOBALS['mon_bill']=$mon_bil;
 	
 

//$month_bill=substr($bill_month,3,6);
 }



session_start();
$conid=$_SESSION['con_id'];
$query2="select * from bill_2 where con_id=$conid and status_3='unpaid'and bill_month='".  $GLOBALS['mon_bill']."' order by bill_no desc   ";
 $record2=mysql_query($query2);
    $data=mysql_fetch_array($record2);

$query3="select * from payment where con_id=$conid order by con_id desc  ";
 $record3=mysql_query($query3);
    $data3=mysql_fetch_array($record3);

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
            
            var ButtonControl1 = document.getElementById("btngoback");
            var ButtonControl2 = document.getElementById("showbill");
            
           
             ButtonControl1.style.visibility = "hidden";
             ButtonControl2.style.visibility = "hidden";
              
            window.print();
           
             ButtonControl1.style.visibility = 'visible';
             ButtonControl2.style.visibility = 'visible';
            
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
	.btn1:hover
{
background-color:#afbfc5;	
}
</style>
</head>
<body style="background-size: cover;background-color:#c4c2fa" background="image/.png">
<form method="post" action="">
<div class="conatainer">
<center><button type="button" class="btn-box" data-toggle="modal" data-target="#myModal" id="showbill" ><b>Click to Show Bill</b></button></center>
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
         <form method="post" action="">
	<div class=row>
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
	<select name="mon" class="form-control">
		<option>month</option>
		<?php
	
					$query3="SELECT distinct(month_bill) FROM meter_reading";
					$record3=mysql_query($query3);
					while($data3=mysql_fetch_array($record3))
					{
						?>
					<option value="<?php echo $data3[0];?>"><?php echo $data3[0];?></option>
					<?php
					}	?>
	</select><br>
	<button type="submit" class="btn btn-md btn-success" name="btn1">OK</button><br>
	</div></div>        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
        
      
      
    </div>
  </div>
</div>
</div>

<div class="row">
<div class="col-sm-4">
</div>
<div class="col-sm-8">
<br>
	<div style="float: ; padding-right: 10px">
<a href="con_home.php" style="text-decoration: none;">		<button type="button" class="btn  btn1"   id="btngoback" ><font color="black"><span class=" glyphicon glyphicon-circle-arrow-left " style="font-size: 16px"><b> GoBack</b></span></font></button></a></div><br>
</div>
</div>

<div class="row">

	<table height="650px" width="600px" border="1px"align="center"style="background-color:#ffffff;">
	<td colspan="3" style="background-color:#ffffff"><img src="image/abss2.png"style="padding-left:10px;padding-right: 10px"></td>
		<tr height="100px">
		
		<td><label style="padding-left: 10px"><u>Name and Address</u></label><br>
			<label style="padding-left: 10px">Name:<?php echo $data[1]; ?> </label><br>
			<label style="padding-left: 10px"><center>Address</center><br>
			vill. name:<?php echo $data[2]; ?><br>
			 street no:<?php echo $data[3]; ?><br>
			 pin code:<?php echo $data[4]; ?><br>
			 </label>
		</td>
		<td><label style="padding-left: 10px">Consumer-Id: <?php echo $data[0]; ?></label><br>
			<label style="padding-left: 10px">Bill No:<?php echo $data[5]; ?>    </label><br>
			<label style="padding-left: 10px">Date:<?php echo $data[6]; ?>  </label></td>
		<td><label style="padding-left: 10px">Bill Month:<?php echo $data[7]; ?></label><br>
		
		
			<label style="padding-left: 10px">Payment Date:<?php echo $data3[5]; ?>    </label><br></td>
			</tr>
		<tr >
		<td colspan="3" height="100px">
		<label style="padding-left: 10px">Connection-Date:<?php echo $data[10]; ?></label> <br>
			<br>
			<h6 align="right"><label style="padding-right: 20px"><h5><b>Advance Payment:<?php echo $data[9]; ?></b></h5></label></h6><br>
			<h6 align="right"><label style="padding-right: 20px"><h5><b>Previous Bill Due:<?php echo $data[8]; ?></b></h5></label></h6> <br>
		</td></tr>
		<tr height="200px">
		<td colspan="2">
			<table class="table">
			<tr>
			<th>meter-no</th><th>Date</th><th>Reading</th><th>Month
			</th>
			</tr>
			<tr><td><?php echo $data[12]; ?></td><td><?php echo $data[13]; ?></td>
			<td><?php echo $data[14]; ?></td><td><?php echo $data[7]; ?></td></tr>
			</table>
		</td>
		<td>
<label style="padding-left: 10px">Fixed-Charge:<?php echo $data[15]; ?></label><br>
<label style="padding-left: 10px">Meter Charge:<?php echo $data[16]; ?></label><br>
<label style="padding-left: 10px">Due Bill:<?php echo $data[8]; ?></label><br>
<label style="padding-left: 10px">Current Bill:<?php echo $data[17]; ?></label><br>
<label style="padding-left: 10px">Total Bill:<?php echo $data[18]; ?></label>
		</td>
		</tr>
	</table>
	</div>
	</div>
	<br>
	
</form>		
	<br>
	</body>
</html>
