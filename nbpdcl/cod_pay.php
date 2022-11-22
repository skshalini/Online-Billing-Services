<?php
include("conn.php");
include("con_menu2.php");

?>
<?php

$conid=$_SESSION['con_id'];	

?>




<html>
<head>
	<title>report_form</title>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
		<script src="bootstrap/jquery/jquery3.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<style>
.box{ padding-top: 20px;
      padding-right:30px;
      padding-left:30px;
	height:930px;
	width:650px;
	top:10px;
	margin-left:5%;
	border:solid 5px #d0802f;
	background-color:rgba(189, 189, 189,0.7);
	border-radius:5px;
	margin-top: 20px;
	font-size: 15px;
	margin-bottom: 40px;
	
}
	</style>
</head>
<body style="background-image:url(image/ghgkk.jpg);background-size:cover;">

<br>
<br>
<br>
<div class="col-sm-3"></div>
<div class="col-sm-6">
<div class="box">
<center><img src="icon/compose-icon (1).png" height="150px" width="150px"></center>
<h2><font face="Comic Sans MS" color="#37474F"><center><b>PAY BILL</b></center></font></h2><hr>

<form method="post" action=""> 


<select name="bill" class="form-control" required pattern="[0-9]{2,10}">
		<option>Choose bill No:</option>
		<?php
	
					$query3="SELECT bill_no from bill_2 where con_id=".$_SESSION['con_id']." and status_3='unpaid'";
					$record3=mysql_query($query3);
					while($data3=mysql_fetch_array($record3))
					{
						?>
					<option value="<?php echo $data3[0];?>"><?php echo $data3[0];?></option>
					<?php
					}	?>
	</select>
<input  type="submit" value="search" name="s" onclick="myFunction()"/>

<?php
$bill=0;

if(isset($_POST['s']))
{
	$bill=$_POST['bill'];
	if($bill=='Choose bill No')
	{
		echo"<script>alert('Please choose bill no')</script>";
		$bill=0;
			
	}
	
}

$query2="select * from bill_2 where bill_no= $bill ";
 $record2=mysql_query($query2);
    $data2=mysql_fetch_array($record2);


?>






<div class="form-group"><label>Consumer Id:</label>
	<input  type="text" name="t1" class="form-control" value="<?php echo $_SESSION['con_id'];
	$GLOBALS['con_id']=	$_SESSION['con_id'];
	?> "/>
	
</div>


	
<div class="form-group">
<label>Bill No:</label>
<?php 


$GLOBALS["bill"]= $data2[5];


?>

	<input  type="text" name="t2"placeholder=" Your bill number" readonly class="form-control" value="<?php echo $GLOBALS["bill"]?>"/>
	
</div>	
<div class="form-group">
<label>Payment mode:</label>
	<input  type="text" name="t3" readonly class="form-control" Value="Online"/>
	
</div>	
<div class="form-group">
<label>Total ammount:</label>
	<input  type="text" name="t4"readonly class="form-control" value="<?php echo $data2[18];?>"/>
	
</div>	
<div class="form-group">
<?php
		$dt=date('d/M/y'); 
		?>
<label>Payment date:</label>
	<input  type="text" name="t5"readonly class="form-control"value="<?php echo $dt;?>"/>
	
</div>
<div class="form-group">
<label>Card No:</label>
	<input  type="text" name="t6" placeholder=" Please enter your card number" pattern="[0-9]{16}" class="form-control" />
	
</div>
<div class="form-group">
<label>CVV Code:</label>
	<input  type="text" name="t7" placeholder="000"  pattern="[0-9]{3}" class="form-control" />
	
</div>
<button type="submit" class="btn btn-lg btn-warning"  name="b1" value="submi id="myLink" class="disabled"onload="">Pay bill</button>
<a href="bill_report.php" class="btn btn-lg btn-success">Generate bill</a>
</form>
</div>	
</div>

<?php
include("footer.php");
?>
</body>
</html>
<script>
function myFunction() {
  document.getElementById("myLink").disabled = true;
}</script>
<script>
function myFunction1() {
  document.getElementById("myLink").disabled = false;
}</script>
<?php
if(isset($_POST['b1']))
 {
$con_id=$_POST['t1'];
$bill_no=$_POST['t2'];
$p_mode=$_POST['t3'];
$t_amount=$_POST['t4'];
$pay_date=$_POST['t5'];
$card_no=$_POST['t6'];
$cvv_code=$_POST['t7'];
//$con_id=$GLOBALS['con_id'];
$_SESSION['billno']=$bill_no;
//echo"<script>alert('".$_SESSION['billno']."')</script>";
$query2="update bill_2 set status_3='paid' where con_id=$con_id and bill_no=$bill_no";
mysql_query($query2);

$query="INSERT INTO `employee`.`payment` ( `con_id`, `bill_no`, `total_amount`, `p_mode`, `pay_date`,`card_no`, `cvv_code`) VALUES ( '$con_id', '$bill_no', '$t_amount', '$p_mode', '$pay_date','$card_no','$cvv_code');";
$data=mysql_query($query);
if($data==true)
{
	
	echo"<script>alert('Paid successfully')<br>alert('Click on generate button to print your bill')</script>";
	
	
	}
else{
	echo"<script>alert('data not inserted')</script>";
	
}
}

?>