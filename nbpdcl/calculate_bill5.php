<?php
include("conn.php");
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
		<script src="bootstrap/jquery/jquery3.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
<style>
.box{ padding-top: 30px;
      padding-right:30px;
	height:1250px;
	width:650px;
	top:45%;
	margin-left:25%;
	border:solid 2px black;
	background-color:rgba(189, 189, 189,0.7);
	border-radius:5px;
}
.btn-box{
	border-radius: 50px;
	height:40px;
	width:60%;
	background: #3099af;
	font-size: 19px;
	border:none;
	font-family:Gill Sans Ultra Bold Condensed;
}

</style>
</head>
<?php
   $GLOBALS['mon_bill']="";
$GLOBALS['cons_id']=$_SESSION['con_id']; 
  $GLOBALS['con_type']=""; 
	?>
	<body style="background-size: cover;background-color:#c4c2fa" background="image/px.jpg">
	<?php
include("con_menu.php");
	?>
	<br>
	<br>
	<br>
	<form method="post" action="">
	
	<br>
	
			<?php
		
		if(isset($_POST['btn1']))
 {
 	$mon_bil=$_POST['mon'];
 	  $GLOBALS['mon_bill']=$mon_bil;
 	
 

//$month_bill=substr($bill_month,3,6);
 }
$query2="select * from new_connection where con_id= ".$GLOBALS['cons_id']."";
 $record2=mysql_query($query2);
    $data2=mysql_fetch_array($record2);
    ?>
    <div class="box">
    		<center><button type="button" class="btn-box" data-toggle="modal" data-target="#myModal" ><b>Click to Generate Bill</b></button></center><br><br>
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
   <div class="col-sm-3"></div><div class="col-sm-3"> <label>consumer id:</label></div>
	<div class="col-sm-2">	<input type="text" name="t1" readonly  value="<?php echo  $GLOBALS['cons_id'];?>"></div><div class="col-sm-4"></div>
	</div><br>
	 <div class="row">
   <div class="col-sm-3"></div><div class="col-sm-3">
			<label>Name:</label></div>
			<div class="col-sm-2"><input type="text" readonly name="t2" value="<?php echo $data2[4];?>"></div>
				<div class="col-sm-4"></div>
			</div><br>
			<div class="row">
   <div class="col-sm-3"></div><div class="col-sm-3">
			<label>connection date</label></div>
			<div class="col-sm-2"><input type="text" name="t3"readonly value="<?php echo $data2[16];?>"></div>
				<div class="col-sm-4"></div>
			</div><br>
			
			 <div class="row">
   <div class="col-sm-3"></div><div class="col-sm-3">
			<label>connection type</label></div>
		<div class="col-sm-2">	<input type="text" name="t13"  readonly value="<?php
			$GLOBALS['con_type']=$data2[1];
			 echo $data2[1];?>
			
			
			"></div>
				<div class="col-sm-4"></div>
			</div><br>
			 <div class="row">
   <div class="col-sm-3"></div><div class="col-sm-3">
			<label>city :</label></div>
		<div class="col-sm-2">	<input type="text" name="t4" readonly value="<?php echo $data2[9];?>"></div>
				<div class="col-sm-4"></div>
			</div>   
			<br>
			 <div class="row">
   <div class="col-sm-3"></div><div class="col-sm-3">
			<label>Streetno</label></div> 
			<div class="col-sm-2"><input type="text" name="t5" readonly value="<?php echo $data2[10];?>"></div>
				<div class="col-sm-4"></div>
			</div> <br>
			
			 <div class="row">
   <div class="col-sm-3"></div><div class="col-sm-3">
			<label>pin code</label></div>
			<div class="col-sm-2"><input type="text" name="t6" readonly value="<?php echo $data2[12];?>"></div>
				<div class="col-sm-4"></div>
			</div><br>
			
			 <div class="row">
   <div class="col-sm-3"></div><div class="col-sm-3">
	       <label>bill_month</label></div>
<div class="col-sm-2"><input type="text" name="t7" readonly value="<?php echo  $GLOBALS['mon_bill'];?>"></div>
	<div class="col-sm-4"></div>
</div><br>
			<div class="row">
   <div class="col-sm-3"></div><div class="col-sm-3">
			<label> bill_date</label></div>
			 <?php
		$dt=date('d/M/y'); 
		?>
	<div class="col-sm-2"><input type="text" name="t8" readonly value="<?php echo $dt;?>"></div>
			<div class="col-sm-4"></div>
		</div><br>
		
			<?php
			$query4="select * from meter where con_id=".$GLOBALS['cons_id']."";
					$record4=mysql_query($query4);
					$data4=mysql_fetch_array($record4);?>
			
			<div class="row">
   <div class="col-sm-3"></div><div class="col-sm-3"><label>meter no.</label></div>
<div class="col-sm-2"><input type="text" name="t10" readonly value="<?php echo $data4[1];?>"></div>
				<div class="col-sm-4"></div>
			</div><br>
			<?php
			
			$query5="select * from fixed_charge where con_type like'%".$GLOBALS['con_type']."%'";
					$record5=mysql_query($query5);
					$data5=mysql_fetch_array($record5);
					//echo"<script>alert('".$data5[2]."')</script>";
					?>
					
					 <div class="row">
   <div class="col-sm-3"></div><div class="col-sm-3">
			<label>fixed- charge</label></div>
<div class="col-sm-2">	<input type="text" name="t11" readonly value="<?php echo $data5[2];?>" id="fc"></div>
		<div class="col-sm-4"></div>
	</div><br>
			
			<?php
			
			$query6="select * from meter_reading where consumer_id=".$GLOBALS['cons_id']." and month_bill='".$GLOBALS['mon_bill']."'";
					$record6=mysql_query($query6);
					$data6=mysql_fetch_array($record6);?>
					
					 <div class="row">
   <div class="col-sm-3"></div><div class="col-sm-3">
			<label>meter reading</label></div>
	<div class="col-sm-2">		<input type="text" name="t12" id="m_read" readonly value="<?php echo $data6[2];?>"id="m_read"></div>
				<div class="col-sm-4"></div>
			</div><br>
			<?php
			
			$query7="select sum(bill_due) from bill_2 where status_3='unpaid' and con_id=".$GLOBALS['cons_id']."";
					$record7=mysql_query($query7);
					$data7=mysql_fetch_array($record7);
					?>
	
	 <div class="row">
   <div class="col-sm-3"></div><div class="col-sm-3">				
	<label>bill due</label></div>
	<div class="col-sm-2">		<input type="text" name="t14"  readonly id="b_due" value="<?php
			if($data7[0]==NULL)
			{
				$bill_due=0;
				echo $bill_due;
			}
			else{
				echo $data7[0]; }?>"></div>
					<div class="col-sm-4"></div>
				</div><br>
			
			
 <div class="row">
   <div class="col-sm-3"></div><div class="col-sm-3">					
<label>Advance Payment</label></div>
	<div class="col-sm-2">		<input type="text" name="t15" readonly value="0"></div>
				<div class="col-sm-4"></div>
			</div><br>
			 <div class="row">
   <div class="col-sm-3"></div><div class="col-sm-3">
			<label>reading_date</label></div>
			<div class="col-sm-2"><input type="text" name="t16"  readonly value="<?php echo $data6[3];?>"></div>
				<div class="col-sm-4"></div>
			</div><br>
			 <div class="row">
   <div class="col-sm-3"></div><div class="col-sm-3">
			<label>meter charge</label></div>
		<div class="col-sm-2">	<input type="text" readonly name="t17" value="200" id="mcharge"></div>
				<div class="col-sm-4"></div>
			</div><br>
			<center><button type="button" class="btn-box"  name="b2"  onclick="cal();"><b>Calculate</b></button></center>
			<hr>
			 <div class="row">
   <div class="col-sm-3"></div><div class="col-sm-3">
			<label>current bill:</label></div>
	<div class="col-sm-2">		<input type="text" readonly name="t18" id="current" ></div>
				<div class="col-sm-4"></div>
			</div><br>
			 <div class="row">
   <div class="col-sm-3"></div><div class="col-sm-3">
			<label>total</label></div>
		<div class="col-sm-2">	<input type="text" readonly name="t19" id="total" value=""></div>
			<div class="col-sm-4"></div>	
	</div>

	<br>
	
	<center><button type="submit" name="b1"class="btn-box"><b>Submit</b></button></center>
	<br>
	<center><a href="cod_pay.php"> <b>Proceed to pay</b></a></center>
	</div>
	</form>
	
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