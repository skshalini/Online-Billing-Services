<?php
include("conn.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
		<script src="bootstrap/jquery/jquery3.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
<style>


</style>
</head>
<?php
   $GLOBALS['mon_bill']="";
 $GLOBALS['cons_id']=0; 
  $GLOBALS['con_type']=""; 
	include("menu.php");
	?>
	<body style="background-size: cover;background-color:#c4c2fa" background="image/.jpg">
	<br>
	<br>
	<br>
	
	<div class=row>
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
	<form method="post" action="">
	<select name="id">
		<option>Consumer_id</option>
		<?php
					$query1="select * from new_connection";
					$record1=mysql_query($query1);
					while($data1=mysql_fetch_array($record1))
					{
						?>
					<option><?php echo $data1[0];?></option>
					<?php
					}	?>
	</select>
	<select name="mon">
		<option>month</option>
		<?php
	
					$query3="SELECT distinct(month_bill) FROM meter_reading";
					$record3=mysql_query($query3);
					while($data3=mysql_fetch_array($record3))
					{
						?>
					<option><?php 
					
					  //  $GLOBALS['mon_bill']=$data3[0];
					echo $data3[0];
					
					?></option>
					<?php
					}	?>
	</select>
	<button type="submit" class="btn btn-md btn-success" name="btn1">OK</button><br>
	
	<br>
	<div class="container">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
			<?php
		$con_id=0;
		if(isset($_POST['btn1']))
 {
 	$mon_bil=$_POST['mon'];
 	  $GLOBALS['mon_bill']=$mon_bil;
 	
$con_id=$_POST['id'];
 $GLOBALS['cons_id']=$con_id;
//$month_bill=substr($bill_month,3,6);
 }
$query2="select * from new_connection where con_id=$con_id";
 $record2=mysql_query($query2);
    $data2=mysql_fetch_array($record2);
    ?>
    <label>consumer id:</label>
			<input type="text" name="t1" value="<?php echo $data2[0];?>"><br>
			<label>Name:</label>
			<input type="text" name="t2" value="<?php echo $data2[4];?>"><br>
			<label>connection date</label>
			<input type="text" name="t3" value="<?php echo $data2[16];?>"><br>
			
			<label>connection type</label>
			<input type="text" name="t13" value="<?php
			$GLOBALS['con_type']=$data2[1];
			 echo $data2[1];?>
			
			
			"><br>
			<label>city :</label>
			<input type="text" name="t4" value="<?php echo $data2[9];?>"><br>    
			<label>Streetno</label> 
			<input type="text" name="t5" value="<?php echo $data2[10];?>"><br> 
			<label>pin code</label>
			<input type="text" name="t6" value="<?php echo $data2[12];?>"><br>
			
			
	       <label>bill_month</label>
<input type="text" name="t7" value="<?php echo  $GLOBALS['mon_bill'];?>"><br>
			<label> bill_date</label>
			 <?php
		$dt=date('d/M/y'); 
		?>
		<input type="text" name="t8" value="<?php echo $dt;?>"><br>
		
			<?php
			$query4="select * from meter where con_id=".$GLOBALS['cons_id']."";
					$record4=mysql_query($query4);
					$data4=mysql_fetch_array($record4);?>
			<label>meter no.</label>
			<input type="text" name="t10" value="<?php echo $data4[1];?>"><br>
			<?php
			
			$query5="select * from fixed_charge where con_type like'%".$GLOBALS['con_type']."%'";
					$record5=mysql_query($query5);
					$data5=mysql_fetch_array($record5);
					//echo"<script>alert('".$data5[2]."')</script>";
					?>
			<label>fixed- charge</label>
	<input type="text" name="t11" value="<?php echo $data5[2];?>" id="fc"><br>
			
			<?php
			
			$query6="select * from meter_reading where consumer_id=".$GLOBALS['cons_id']."";
					$record6=mysql_query($query6);
					$data6=mysql_fetch_array($record6);?>
			<label>meter reading</label>
			<input type="text" name="t12" id="m_read" value="<?php echo $data6[2];?>"id="m_read"><br>
			<?php
			
			$query7="select sum(bill_due) from bill_2 where status_3='unpaid' and con_id=$con_id";
					$record7=mysql_query($query7);
					$data7=mysql_fetch_array($record7);
					?>
					
	<label>bill due</label>
			<input type="text" name="t14" id="b_due" value="<?php
			if($data7[0]==NULL)
			{
				$bill_due=0;
				echo $bill_due;
			}
			else{
				echo $data7[0]; }?>"><br>
			
			
					
<label>Advance Payment</label>
			<input type="text" name="t15" value="0"><br>
			<label>reading_date</label>
			<input type="text" name="t16" value="<?php echo $data6[3];?>"><br>
			<label>meter charge</label>
			<input type="text" name="t17" value="200" id="mcharge"><br>
			<label>current bill:</label>
			<input type="text" name="t18" id="current" ><br>	
			
			<label>total</label>
			<input type="text" name="t19" id="total" value=""><br>		
	
	</div></div>
	<br>
	<button type="button" class="btn btn-lg btn-warning"  name="b2"  onclick="cal();">calculate</button>
	<button type="submit" name="b1"class="btn btn-lg btn-warning">submit</button>
	<a href="cod_pay.php?c_id=<?php echo $GLOBALS['cons_id'];?>" class="btn btn-lg btn-warning"> proceed to pay</a>
	
	</form>
	</div></div>
	<script>
function cal()
{

var m=document.getElementById("mcharge").value;

var f=document.getElementById("fc").value;

var m_r=document.getElementById("m_read").value;
var bill_d=document.getElementById("b_due").value;
	var current_b=parseInt(m)+parseInt(f)+(parseInt(m_r)*7);
	var tot=current_b+100;
document.getElementById("total").value=tot;
		document.getElementById("current").value=current_b;
}


</script>
	<br>
	</body>
</html>
<?php
if(isset($_POST['b1']))
 {
$con_id=$_POST['t1'];
$name=$_POST['t2'];
$vill_name=$_POST['t4'];
$st_no=$_POST['t5'];
$pin_code=$_POST['t6'];
$bill_date=$_POST['t8'];
$bill_month=$_POST['t7'];
$bill_due="0";
$ad_pay="0";
$con_date=$_POST['t3'];
$con_type=$_POST['t13'];
$meter_no=$_POST['t10'];
$read_date=$_POST['t16'];
$m_read=$_POST['t12'];
$fixed_charge=$_POST['t11'];
$meter_charge=20;
$current_bill=$_POST['t18'];
$total=$_POST['t19'];
$status_3='unpaid';
$query="INSERT INTO `employee`.`bill_2` (`con_id`, `name`, `vill`, `street_no`, `pin_code`, `bill_date`, `bill_month`, `bill_due`, `ad_pay`, `con_date`, `con_type`, `meter_no`, `read_date`, `m_read`, `fixed_charge`, `meter_charge`, `current_bill`, `total`, `status_3`) VALUES ('$con_id', '$name', '$vill_name', '$st_no', '$pin_code', '$bill_date', '$bill_month', '$bill_due', '$ad_pay', '$con_date','$con_type', '$meter_no', '$read_date','$m_read', '$fixed_charge', '$meter_charge', '$current_bill', '$total', '$status_3');";

$data=mysql_query($query);
if($data==true)
{
	
	echo"<script>alert('data inserted')</script>";
	echo"<script></script>";
	}
else{
	echo"<script>alert('data not inserted')</script>";
	
}
}
?>