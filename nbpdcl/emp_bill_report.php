<?php
include("conn.php");
include("emp_menu.php");
//include("con_menu.php");

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
<div class="conatainer">

	<center><button type="button" name="s" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" id="search">search</button></center>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header"style="background-color:#ff9999">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body"><div class="row">


<div class="col-sm-4">
	<label>consumer-id:</label>
</div>
	<div class="col-sm-4">
	<select name="con_id" class="form-control">
		<option>select</option>
		<?php
	
					$query="SELECT * from new_connection where status_2='active'";
					$record=mysql_query($query);
					while($data=mysql_fetch_array($record))
					{
						?>
					<option value="<?php echo $data[0];?>"><?php echo $data[0];?></option>
					<?php
					}	?>
	</select><br>
	</div>
	</div>
    
<div class="row">
<div class="col-sm-4">
	<label>Bill-month:</label>
</div>     
	<div class="col-sm-4">
	<select name="bill" class="form-control">
		<option>select</option>
		<?php
	
					$query1="SELECT * FROM meter_reading";
					$record1=mysql_query($query1);
					while($data1=mysql_fetch_array($record1))
					{
						?>
					<option value="<?php echo $data1[1];?>"><?php echo $data1[1];?></option>
					<?php
					}	?>
	</select><br>
	</div></div>
	<br>
	<center><button type="submit" class="btn btn-md btn-success" name="btn1">OK</button></center><br>
</div>
        <div class="modal-footer" style="background-color:#ff9999">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>	
<br>
<?php
	
$GLOBALS['con_id']=0;
 
   $GLOBALS['bill_mon']="";		
		if(isset($_POST['btn1']))
 {
 	$con_id=$_POST['con_id'];
 	  $GLOBALS['con_id']=$con_id;
 	
 $bill_mon=$_POST['bill'];
 	  $GLOBALS['bill_mon']=$bill_mon;
 	  
 	 
 	  
 }
 
 $query2="select * from bill_2 where con_id='$con_id' and  bill_month='$bill_mon' order by bill_no desc limit 1";
 $record2=mysql_query($query2);
$data2=mysql_fetch_array($record2);
    		

?>

		<div style="float: left; padding-left: 10px">
		<a href="emp_home.php"style="text-decoration: none;color: black">		<button type="button" class="btn  btn1"   id="btngoback"  ><span class=" glyphicon glyphicon-circle-arrow-left" style="font-size:16px"><b> GoBack</b></span></button></a>	
		</div>
		<div style="float: right; padding-right: 10px">
  <button type = "button" class="btn  btn1"  id = "btnprint"  onclick = "PrintDiv()"><span class=" glyphicon glyphicon-print" style="font-size:16px "><b> Print</b></span></button>
	</div><br>

<div id="printarea">
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
	</div>
	<br>
	
</form>		
	</body>
</html>
