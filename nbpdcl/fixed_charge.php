<!DOCTYPE html>
<?php
include("conn.php");
include("admin_menu.php");
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>form</title>
		<link href="bootstrap\css\bootstrap.css" rel="stylesheet"/>
		<script src="bootstrap/jquery/jquery3.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
<style>

.bg-img {
	background-image: url("image/ghhjh.jpg");
	min-height:150px;
	width:100%;
	background-position: center;
	background-size:cover;
	position: relative;
	padding:0;
	}
	
	.content {
	position: absolute;
	bottom: 0;
	background:rgb(0,0,0);
	background: rgba(0,0,0,0.5);
	color: #f1f1f1;
	width: 100%;
	height:150px;
	padding: 50px;
}
.txt{
	color:white;
}	
.tab{
	height:20px;
	width:20px;
	overflow-y: auto;
}
.icon{
	
 height:100px;
  width:100px;
  padding-top: 20px;
}
</style>
</head>

	<body style=" background-image:url(image/gas-and-power.jpeg);background-size: cover;">
	<br>
	<center><img src="icon/User-Administrator-Blue-icon.png" class="icon"></center><br>
	<div class="container">
	<div class="col-sm-2"></div>
    <div class="col-sm-8">
		<div class="panel panel-info">
			
			<div class="panel-body" style="background-color:rgba(249, 168, 37,0.7)">
			<div class="bg-img">
			<div class="content"><font face="Gunplay"color="white" size="11">Please fill these details...</font></div>		
				</div>	

		
		
	<font face="Gunplay"color="#00897B"><h1 align="">Fixed Charge</h1></font>
	<div class="panel panel-info">
			<div class="panel-body">

	
	
	    <form method="post" action="">
			<div class="form-group">
				<label>Connection-Type:</label>
				<select class="form-control" name="con_type1"  required pattern="[A-Za-z]{2,}">
				<option>select</option>
					<?php
					$query="select * from unit";
					$record=mysql_query($query);
					while($data=mysql_fetch_array($record))
					{
						?>
					<option><?php echo $data[0];?></option>
					<?php
					}	
					?>
				</select>
			</div>
			<div class="form-group">
				<label>Load:</label>
				<input type="text" name="load" required title="unit must be a number" reqiured pattern="[0-9]{1,10}"  class="form-control">
			</div>
			<div class="form-group">
				<label>Fixed-Charge:</label>
				<input type="text" required title="unit must be a number" reqiured pattern="[0-9]{1,10}"  name="fixed_charge_1" class="form-control">
			</div>
			<button type="submit"name="b2"class="btn btn-md btn-success" value="submit">Save</button>
					<button type="button" class="btn btn-md  btn-info" data-toggle="modal" data-target="#myModal">Modify</button>
			 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color:#6cabb0">
          <button type="button" class="close" color="white" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><font color="white">Modify fixed charge</font></h4>
        </div>
        <div class="modal-body">
          <table class="table tb resposive" align="center">
		<table class="table table-bordered tab" align="center">
		<thead>
	<tr class="danger">
		<th>connection-type</th><th>Load</th><th>Fixed-charge</th><th></th>
	</tr>
	</thead>
		<?php
$query="select * from fixed_charge" ;
$record=mysql_query($query);
while($data=mysql_fetch_array($record))
{
	?>
<tbody>
<tr class="info">
	<td><?php echo $data[0];?></td>
	<td><?php echo $data[1];?></td>
	<td><?php echo $data[1];?></td>
	<td><a href="update_fixed_charge.php?con_type=<?php echo $data[0];?>" class="btn btn-md btn-primary">Edit</a></td>
</tr>
</tbody>
<?php
}?>
</table></table>
        </div>
        <div class="modal-footer" style="background-color:#6cabb0">
          <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
        
      
      
    </div>
  </div>
  
</div>
		</div>
			<button type="submit"name=""class="btn btn-md btn-warning" value="submit">Reset</button>
			</form>
			</div>
		</div>	
	</div>
	</div>
	</div>
	
	</div>
<?php
include("footer.php");
?>
	</body>
</html>



<?php
if(isset($_POST['b2']))
 {
$con_type1=$_POST['con_type1'];
$load=$_POST['load'];
$fixed_charge_1=$_POST['fixed_charge_1'];
$query="INSERT INTO `employee`.`fixed_charge` (`con_type`, `load`, `fixed_charge_1`) VALUES ('$con_type1', '$load', '$fixed_charge_1');";
$data=mysql_query($query);
if($data==true)
{
	
	echo"<script>alert('Data Submitted Successfully')</script>";
	echo"<script>window.location.href='fixed_charge.php' </script>";
}
else
{
	echo"<script>alert('Data not Submitted')</script>";
	echo"<script>window.location.href='fixed_charge.php' </script>";
}
}
?>


