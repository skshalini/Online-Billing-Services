<?php

include("conn.php");
	$comp_id=0;
  if(isset($_POST['s1']))
{
	$comp_id=$_POST['comp_id'];
	}
	
 $query3="select * from complaint where comp_id=$comp_id";
	$record3=mysql_query($query3);
	$data3=mysql_fetch_array($record3);

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link href="bootstrap\css\bootstrap.css" rel="stylesheet"/>
		<script src="bootstrap/jquery/jquery3.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<style>
.box{
	
	height:auto;
	width:700px;
	position: absolute;
	top:70%;
	left:24%;
	border:;
	border-radius:7px;
	background-color:;
	box-shadow:7px 12px 18px white;
	margin-bottom:40px ;
	
}
	</style>
	</head>
	<body style="background-color: black;padding-top:px">
	<?php
	include("admin_menu.php");
	?>
	<div class="col-sm-4">
		<center><img src="gifs/17-45-41-chat-bot.gif"style="height: 550px;width:450px;margin-top: 10px;margin-left: 50px	"class="img-circle"></center>
	</div>
	<div class="col-sm-4 box">
	<center><img src="image/Free-Professional-Background-Image-for-Websites-1.jpeg"width="400" height="150" class="img-rounded"style="padding-top:60px"></center>
	<br>
	
	<form method="post" action="">
	<div class="form-group">
				<label class="txt"><font color="white" size="3">Complaint-Id:</font></label>
				<select class="form-control" name="comp_id">
				<option>select</option>
					<?php
					$query2="select * from complaint where status_4='pending'";
					$record2=mysql_query($query2);
					while($data2=mysql_fetch_array($record2))
					{
						?>
					<option><?php echo $data2[0];?></option>
					<?php
					}	?>
				</select>
				</div>
				<button type="submit"name="s1"class="btn btn-lg btn-primary" value="submit">search</button>
				
		<div class="form-group">
				<label class="txt"><font color="white" size="3">Category:</font></label>
<input type="text" name="category" readonly class="form-control" value="<?php $GLOBALS['category']=$data3[2];echo $data3[2];?>">
				</div>
				<div class="form-group">
				<label class="txt"><font color="white" size="3">Complain-Id:</font></label>
<input type="text" name="complain_id" readonly class="form-control" value="<?php echo $data3[0];?>">
				</div>
				<div class="form-group">
			<label class="txt"><font color="white" size="3">Consumer Id:</font></label>
			 <input type="text" readonly name="con_id" class="form-control" value="<?php echo $data3[3];?>">
			</div>
			
			<div class="form-group">
			<label class="txt"><font color="white" size="3">Complaint Date:</font></label>
			 <input type="text" readonly name="c_date" class="form-control" value="<?php echo $data3[1];?>">
			</div>
			
			<div class="form-group">
			<label class="txt"><font color="white" size="3">Description:</font></label>
			 <textarea name="desp" readonly class="form-control"><?php echo $data3[4];?></textarea>
			</div>
			<div class="form-group">
			<label class="txt"><font color="white" size="3">Status:</font></label>
<input type="text" name="status_4" class="form-control" value="<?php echo $data3[5];?>">
			</div>
			
			<br>
			<button type="submit"name="b1"class="btn btn-lg btn-success" value="submit">Submit</button>
			<br><br>
			</form>
			</div>
			
			<div class="col-sm-4"></div>
			
		<?php
		include("footer.php");
		?>	
	</body>
</html>
<?php
if(isset($_POST['b1']))
 {
$category=$_POST['category'];
$comp_date=$_POST['c_date'];
$complain_id=$_POST['complain_id'];
$con_id=$_POST['con_id'];
$description=$_POST['desp'];
$status_4=$_POST['status_4'];

$query="update complaint set  category='$category',comp_date='$comp_date', con_id='$con_id',description='$description',status_4='$status_4' where comp_id=$complain_id";
$data=mysql_query($query);
if($data==true)
{
	
	echo"<script>alert('data updated')</script>";
}
else{
	echo"<script>alert('data not updated')</script>";
	
}
}
?>