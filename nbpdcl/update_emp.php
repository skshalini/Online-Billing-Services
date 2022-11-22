<?php
include("conn.php");
include("admin_menu.php");
	$eid=$_REQUEST['id'];
	
	$query1="select * from employee_detail where emp_id=$eid";
	$record1=mysql_query($query1);
	$data1=mysql_fetch_array($record1);	
	//echo $data1[0];
	?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>form</title>
		<link href="bootstrap\css\bootstrap.css" rel="stylesheet"/>
		<script src="bootstrap/jquery/jquery3.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>

.box{
	
	height:420px;
	width:700px;
	position: absolute;
	top:60%;
	left:24%;
	border:;
	border-radius:5px;
	background-color:rgba(250, 250, 250,0.5);
	box-shadow:7px 12px 18px #888888;
	overflow-y: auto;
}
	
.txt{
	color:black;
}

.fa
{
	position: absolute;
	left:10px;
	top:10px;
	color: blue;
	}
	
.footer {
  background-color: #252850;
  color: #ffffff;
  text-align: center;
  font-size: 15px;
  padding: 15px;
  height: 80px;
  width: 100%;
}
</style>
</head>
	<body style="background-size: cover" background="image/hh.jpeg">
	<center>
	<img src="icon/Users-Administrator-2-icon.png"  width="120" height="120" class="img-circle"style="padding-top:0px"></center>
	<center><h3><b><u>Employee Info</u></b></h3></center><br><br><br>
	<div class="box">
	<form method="post" action="" enctype="multipart/form-data">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			
			<br>
			<div class="form-group">
				<label class="txt">Employee id:</label>
				<div class="input-group">
			 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input type="text"name="emp_id" class="form-control" pattern="[0-9]{1,}" placeholder=" Enter your user id" value="<?php echo $data1[0];?>">
			</div>
			</div>
			
			<div class="form-group">
				<label class="txt">Employee Name:</label>
				<div class="input-group">
			 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input type="text"name="emp_name" title="enter your  name" class="form-control" required  pattern="[a-zA-Z]{2,70}+" value="<?php echo $data1[2];?>" pattern="[a-zA-Z]{2,70}" readonly>
			</div>
			</div>
			
			<div class="form-group">
				<label class="txt">Email:</label>
				<div class="input-group">
			 <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
				<input type="email"name="email" class="form-control"required  title="enter your email-id" placeholder=" abc@gmail.com" value="<?php echo $data1[3];?>">
			</div>
			</div>
			<div class="form-group">
				<label class="txt">Password:</label>
				<div class="input-group">
			 <span class="input-group-addon"><i class="glyphicon glyphicon-"></i></span>
				
				<input type="password"name="pass"id="myInput" class="form-control"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title=" must contain atleast one number and one uppercase and lowercase letter,and atleast 8 or more characters"  placeholder=" Enter your password "value="<?php echo $data1[4];?>"><span class=" fa glyphicon glyphicon-eye-open" onclick="myFunction()"></span>
			</div>
			</div>
			
			<div class="form-group">
			<label class="txt">Address:</label>
			<div class="input-group">
			 <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
				<input type="text"name="address" required class="form-control" placeholder=" Enter your address"value="<?php echo $data1[9];?>" required pattern="{2,}">
			
			
			</div>
			</div>
		
		<div class="form-group">
				<label class="txt">Mobile no.:</label>
				<div class="input-group">
			 <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
				<input type="text"name="ph" class="form-control" required="" pattern="[0-9]{10}" title="please insert 10 digit no.!!!" placeholder=" Enter digit only"value="<?php echo $data1[10];?>">
			</div>
			</div>
		<div class="form-group">
				<label for="image" class="txt">Photo :</label><br>
				<img src="<?php echo $data1[14];?>" height="200px" width="200px" id="output"><br><br>
				<?php
				$GLOBALS['pic']=$data1[14];
				?>
				
<input type="file"name="img"class="form-control"placeholder="change photo" value=""accept="image/*" onchange="loadfile(event)">
	<script>
					var loadfile=function(event){
						var output=document.getElementById('output');
				output.src=URL.createObjectURL(event.target.files[0]);
					};
				</script>
</div>
		</div>
	</div>
		<center><button type="submit"name="b1"class="btn btn-lg btn-primary" value="submit">update</button></center>

			
		
	</form>
		</div>
		<div class="row">
	<div class="col-sm-12"style="top: 135%; position: absolute;width: 120%;">
		<div class="footer" >
		<footer>
		<p>&copy; Copyright</p>
<p><h4 align="center" style="font-size:15px;color:white;padding-top:px"><span class="glyphicon glyphicon-earphone " style="color: red"></span> Toll free helpline no. 1912 | <span class="glyphicon  glyphicon-map-marker" style="color:red" ></span>Our official website <a href="#">www.nbpdcl.in</a></h4>
</p>
</footer>
  
</div>
</div>
</div>
		
	
	
		
	</body>
</html>

<?php
include("conn.php");
if(isset($_POST['b1']))
 {
$emp_id=$_POST['emp_id'];
$email=$_POST['email'];
$password=$_POST['pass'];
$address=$_POST['address'];
$mobile_no=$_POST['ph'];
$ft=$_FILES['img']['tmp_name'];
$fn=$_FILES['img']['name'];
$fpath="pic2/".$fn;
move_uploaded_file($ft,$fpath);
if($fn=="")
{
	$fpath=$GLOBALS['pic'];
	
$query2="update employee_detail set email='$email',password='$password',address='$address',mobile_no='$mobile_no',photo='$fpath' where emp_id=$emp_id";
$data2=mysql_query($query2);
if($data2==true)
{
	
	echo"<script>alert('Updated Successfully!!')</script>";
}
else{
	echo"<script>alert('Not Updated!')</script>";
	
}
}
else{
	
$query="update employee_detail set email='$email',password='$password',address='$address',mobile_no=$mobile_no,photo='$fpath' where emp_id=$emp_id";
$data=mysql_query($query);
if($data==true)
{
	
	echo"<script>alert('Data updated successfully!!')</script>";
}
else{
	echo"<script>alert('Data not updated!')</script>";
	
}
	}
}
?>
<script>
	function myFunction()
	{
		var  = document.getElementById("myInput");
		if (x.type==="password"){
		x.type="text";	
		}
		else{
			x.type="password";
		}
		
	}
</script>