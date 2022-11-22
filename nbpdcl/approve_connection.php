<?php
include("conn.php");
include("admin_menu.php");
$cid=$_REQUEST['id'];
	
	$query1="select * from new_connection where con_id=$cid";
	$record1=mysql_query($query1);
	$data1=mysql_fetch_array($record1);	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
		<script src="bootstrap/jquery/jquery3.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<style>
		.bg-img {
	background-image: url("image/bulb2.jpg");
	min-height:200px;
	background-position: center;
	background-size: cover;
	position:relative;
	top:%;
	margin-top: -20px;
}
.content {
	position: absolute;
	bottom: 0;
	background: rgb(0,0,0);
	background: rgba(0,0,0,0.5);
	color: #f1f1f1;
	width: 100%;
	padding: 0px;
}
	</style>
	</head>
	<body>
		 <div class="bg-img">
		 	<div class="content">
		 	<h1><b>Approve Request For New Connection</b></h1>	
		 	</div>
		 </div>
		 <div class="row">
	<form method="post" action="" enctype="multipart/form-data"><br><br>
		<div class="col-sm-4"style="margin-top: -60px">
			<br>
			<img src="gifs/17-56-53-membercomm_gap-analysis.gif"   width="420" height="500" class="img-rectangle" ><br>
			<img src="gifs/17-53-25-animation-continuous.gif"   width="420" height="500" class="img-rectangle" >
		</div>
		<div class="col-sm-7">
		
		<br>
		<div class="form-group">
				<label class="txt">Consumer id :</label>
					<input type="number"name="con_id" class="form-control" value="<?php echo $data1[0];?>" readonly="">
			</div>
			<div class="form-group">
				<label class="txt">Applicant name :</label>
			<input type="text"name="appl_name" class="form-control" value="<?php echo $data1[4];?>" readonly=""></div>
		<div class="form-group">
		<div class="form-group">
				<label class="txt">Occupation :</label>
			<input type="text"name="occupation" class="form-control"pattern="[A-Za-z]{2,}" value="<?php echo $data1[8];?>" readonly=""></div>
			<div class="form-group">
				<label class="txt">City/Village name :</label>
			<input type="text"name="city" class="form-control"pattern="[A-Za-z]{2,}" value="<?php echo $data1[9];?>"readonly=""></div>
			<div class="form-group">
				<label class="txt">Street no. :</label>
			<input type="text"name="street" class="form-control" pattern="[0-9A-Za-z]{1,}"value="<?php echo $data1[10];?>" readonly=""></div>
			<div class="form-group">
				<label class="txt">Plot/Flat no. :</label>
			<input type="number"name="plot" class="form-control" pattern="[0-9A-Za-z]{1,}"value="<?php echo $data1[11];?>" readonly=""></div>
			<div class="form-group">
				<label class="txt">Pin code :</label>
			<input type="number"name="pin" class="form-control" pattern="[0-9]{6}" value="<?php echo $data1[12];?>" readonly=""></div>
			
			<div class="form-group">
				<label class="txt">mobile no. :</label>
			<input type="number"name="num" class="form-control" pattern="[0-9]{10,12}"value="<?php echo $data1[14];?>" readonly=""></div>

				<label class="txt">Email :</label>
			<input type="email"name="email" class="form-control"  value="<?php echo $data1[13];?>" readonly=""></div>
			
		<div class="form-group">
				<label class="txt">Connection type :</label>
				<input type=""name="type" class="form-control"  value="<?php echo $data1[1];?>" readonly=""></div>
				
				<div class="form-group">
				<label class="txt">Unit :</label>
				<input type="number"name="unit" class="form-control" value="<?php echo $data1[2];?>" readonly=""></div>
				<div class="form-group">
				<label class="txt">Division :</label>
					<input type="text"name="division" class="form-control" value="<?php echo $data1[3];?>">
				
				</div>
			
			
						<div class="form-group">
				<label for="image" class="txt">Photo :</label><br>
				<img src="<?php echo $data1[15];?>" id="output" height="200px" width="200px"><br><br>
				<?php
				$GLOBALS['pic']=$data1[15]
				?>
				</div>
			<div class="form-group">
				<label class="txt">District :</label>
					<input type="number"name="district" class="form-control" value="<?php echo $data1[2];?>" readonly="">
			</div>
			<left><button type="submit"name="b1"class="btn btn-lg btn-success" value="submit">Approve</button></left>&nbsp;<button type="submit"name="b2"class="btn btn-lg btn-danger" value="submit">Dismiss</button>
			
			</div>
			</form>
			</div>
			<?php
			include("footer.php");
			?>
	</body>
	
</html>
<?php

if(isset($_POST['b1']))
 {
 $conid=$_POST['con_id'];


	$query2="update new_connection set status_2='active' where con_id=$conid" ;
$data2=mysql_query($query2);
if($data2==true)
{
	
	echo"<script>alert('Request Approved!!')</script>";
	echo"<script>window.location.href='' </script>";
}
else{
	echo"<script>alert('Request not Approved!')</script>";
	echo"<script>window.location.href='' </script>";
	
}
}

if(isset($_POST['b2']))
 {

$conid=$_POST['$con_id'];
$query2="update new_connection set status_2='inactive' where con_id=$conid";$data2=mysql_query($query2);
if($data2==true)
{
	
	echo"<script>alert('Updated successfully!!')</script>";
	echo"<script>window.location.href='' </script>";
}
else{
	echo"<script>alert('Not Updated!')</script>";
	echo"<script>window.location.href='' </script>";
	
}
}

?>