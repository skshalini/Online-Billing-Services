<?php
include("conn.php");

include("con_menu2.php");
$GLOBALS['consumer_id']=$_SESSION['con_id'];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link href="bootstrap\css\bootstrap.css" rel="stylesheet"/>
		<script src="bootstrap/jquery/jquery3.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	</head>
	<body style="background-size: cover; background-color:white ;">
	

	<div class="col-sm-4"style="margin-top: 10px">
		<center><img src="gifs/17-41-18-lightbulb-desk.gif"width="600" height="410" class="img-rounded"></center>
	</div>
	<div class="col-sm-2"></div>
	<div class="col-sm-4"style="margin-top: 30px">
	
	<br>
	<form method="post" action="">
		<div class="form-group">
				<label class="txt">Category:</label>
				<select class="form-control" name="category">
					<option>Select</option>
					<option>Irregular Power suppy</option>
					<option>Transformer Failure</option>
					<option>Conversion of Connection type</option>
					<option>Billing Complaints</option>
					<option>Address Correction</option>
					<option>Name Correction</option>
					<option>Change Mobile number</option>
				</select>
				</div>
				
				<div class="form-group">
			<label class="txt">Consumer Id:</label>
			 <input type="text" name="con_id" class="form-control" pattern="[0-9]{1,}" value="<?php echo $GLOBALS['consumer_id']?>">
			</div>
			
			<div class="form-group">
			<label class="txt">Date:</label>
			<?php
			$dt=date('d/M/y');
			?>
			 <input type="text" name="c_date" class="form-control" readonly value="<?php echo $dt;?>">
			</div>
			<div class="form-group">
			<label class="txt">Description:</label>
			 <textarea name="desp" class="form-control" placeholder=" Complaint description"></textarea>
			</div>
			<br>
			<button type="submit"name="b1"class="btn btn-lg btn-success" value="submit">Submit</button>
			<button type="button"name="b2"class="btn btn-lg btn-danger">Cancel</button>
			<br><br>
			</form>
			</div>
			
			<div class="col-sm-2"></div>
			
			
	<?php
	include("footer.php");
	?>
		
	</body>
</html>
<?php

	
if(isset($_POST['b1']))
 {
$category=$_POST['category'];
$con_id=$_POST['con_id'];
$comp_date=$_POST['c_date'];
$description=$_POST['desp'];
$status_4='pending';	
$query1="insert into complaint (category,con_id,comp_date,description,status_4) values('$category','$con_id','$comp_date','$description','$status_4')";
$data=mysql_query($query1);
if($data==true)
{
	
	echo"<script>alert('Your complaint has been submitted successfully')</script>";
	echo"<script>window.location.href='complaint.php' </script>";
}
else{
	echo"<script>alert('Your complaint has not been submitted successfully')</script>";
	
}
}

?>