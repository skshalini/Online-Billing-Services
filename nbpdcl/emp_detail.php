<?php
include("conn.php");
include("admin_menu.php");
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
	
	height:400px;
	width:700px;
	position: absolute;
	top:65%;
	left:24%;
	border:;
	border-radius:5px;
	background-color:rgba(250, 250, 250,0.5);
	box-shadow:7px 12px 18px #888888;
	overflow-y: auto;
}
.footer {
  background-color: #252850;
  color: #ffffff;
  text-align: center;
  font-size: 15px;
  padding: 15px;
  height: 80px;
  bottom:10px;
  width: 100%;
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
	
	
</style>
</head>

	<body style="background-size: cover" background="image/hh.jpeg">
	
	<center>
	<br><br>
	<img src="icon/Users-Administrator-2-icon.png"  width="120" height="120" class="img-circle"style="margin-top:-40px"></center>
	<center><h3><b><u>Employee Info</u></b></h3></center>
	<div class="box">
	<form method="post" action="" enctype="multipart/form-data">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="form-group" >
			
			<br>
				<label class="txt">Company name:</label>
				<select class="form-control" required name="comp_name">
				<option>select</option>
					<?php
					$query5="select * from company";
					$record5=mysql_query($query5);
					while($data5=mysql_fetch_array($record5))
					{
						?>
					<option><?php echo $data5[1];?></option>
					<?php
					}	?>
				</select>
			</div>
			<div class="form-group">
			<label class="txt">Employee name:</label>
			<div class="input-group">
			 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				
				<input type="text" name="user_name"  title="enter your  name" class="form-control" placeholder=" Enter user name" required  pattern="[a-zA-Z]{2,70}+">
			</div>
			</div>
			
			<div class="form-group">
				<label class="txt">Email:</label>
				<div class="input-group">
			 <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
				<input type="email"name="email" required  title="enter your email-id" class="form-control" placeholder=" abc@gmail.com">
			</div>
			</div>
			<div class="form-group">
				<label class="txt">Password:</label>
				<div class="input-group">
			 <span class="input-group-addon"><i class="glyphicon glyphicon-"></i></span>
				
<input type="password"name="pass" class="form-control" id="myInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title=" must contain atleast one number and one uppercase and lowercase letter,and atleast 8 or more characters" placeholder=" Enter your password "><span class=" fa glyphicon glyphicon-eye-open" onclick="myFunction()"></span>
			</div>
			</div>
			<div class="form-group">
				<label class="txt">Confirm password:</label>
				<div class="input-group">
			 <span class="input-group-addon"><i class="glyphicon glyphicon-"> </i></span>
				
<input type="password"name="confirm_pass" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title=" must contain atleast one number and one uppercase and lowercase letter,and atleast 8 or more characters" placeholder=" Again enter your password " id="myInput1"><span class=" fa glyphicon glyphicon-eye-open" onclick="myFunction1()"></span>
			</div>
			</div>
			
			
		</div>
		</div>
	 
		
	
	
	<div class="row">
	<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="form-group">
				
				<label class="txt">Gender: </label>
				<h4><input type="radio" name="gender" value="male">Male &nbsp;
				 <input type="radio" name="gender" value="female">Female</h4>
			</div>
			
			<div class="form-group">
				<label class="txt">Location:</label>
				<select class="form-control" required name="location">
				<option>select</option>
					<?php
					$query="select * from location";
					$record=mysql_query($query);
					while($data=mysql_fetch_array($record))
					{
						?>
					<option><?php echo $data[2];?></option>
					<?php
					}	?>
				</select>
			</div>
			<div class="form-group">
				<label class="txt">Security:</label>
				<div class="input-group" >
			 <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				<select class="form-control" required name="security">
				<option>Select</option>
					<option>Your favourite pet animal?</option> 
					<option>Your favourite book?</option>
					<option>Your nick name?</option>
				</select>
			</div>
			</div>
			<div class="form-group">
				<label class="txt">Answer :</label>
				<div class="input-group">
			 <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
				<input type="text"name="answer" required  pattern="[a-zA-Z]{2,70}" class="form-control">
			</div>
			</div>
			
			
			<div class="form-group">
			<label class="txt">Address:</label>
			<div class="input-group">
			 <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
				<input type="text"name="address" class="form-control" placeholder=" Enter your address" required pattern="{2,}">
				
			</div>
			</div>
			</div>
			</div>
			
			
			<div class="row">
			<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="form-group">
				<label class="txt">Mobile no.:</label>
				<div class="input-group">
			 <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
				<input type="number"name="num" pattern="[0-9]{10,12}" required class="form-control" title="please enter your 10 digit mobile number" placeholder=" Enter digit only">
			</div>
			</div>
			<div class="form-group">
				<label class="txt">Aaddhar no.:</label>
				<div class="input-group">
			 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input type="number" required pattern="^\d{4}\s\d{4}\s\d{4}$" name="aadhar" class="form-control" placeholder=" 0000 0000 0000">
			</div>
			</div>
			<div class="form-group">
				<label class="txt">Department:</label>
				<select class="form-control" required name="dept">
					<option>Select</option>
					<?php
					$query="select * from dept_form";
					$record=mysql_query($query);
					while($data=mysql_fetch_array($record))
					{
						?>
					<option><?php echo $data[1];?></option>
					<?php
					}	?>
				</select>
			</div>
			<div class="form-group">
				<label class="txt">Designation:</label>
				<select class="form-control" required name="desg">
					<option>Select</option>
					<?php
					$query="select * from desg_form";
					$record=mysql_query($query);
					while($data=mysql_fetch_array($record))
					{
						?>
					<option><?php echo $data[1];?></option>
					<?php
					}	?>
				</select>
			</div>
			
			<div class="form-group">
				<label for="image" class="txt">Photo :</label>
				<input type="file" accept="image/*" required name="img"class="form-control"placeholder="file not choosen" onchange="loadfile(event)">
				<img id="output" width="200px" height="200px"/>
					<script>
					var loadfile=function(event){
						var output=document.getElementById('output');
				output.src=URL.createObjectURL(event.target.files[0]);
					};
				</script>
				</div>
			
			
			<button type="submit"name="b1"class="btn btn-lg btn-primary" value="submit">Submit</button>
						<button type="button" class="btn btn-lg   btn-success" data-toggle="modal" data-target="#myModal2">view</button>
			 <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Submitted details</h4>
        </div>
        <div class="modal-body">
        <?php
        $query2="select * from employee_detail order by emp_id desc limit 1";
        $record2=mysql_query($query2);
        $data2=mysql_fetch_array($record2);
        ?>
          <table class="table tb resposive">
		<table class="table table-bordered tab">
		<tr><td colspan="2"><center><img src="<?php echo $data2[14];?>" width="100px" height="100px"style="padding-top:0;padding-left:30px;" class="img-circle"></center></td></tr>
	
<tr><td>emp-id</td><td><?php echo $data2[0];?></td></tr>
<tr><td>Company name</td><td><?php echo $data2[1];?></td></tr>
<tr><td>Employee Name</td><td><?php echo $data2[2];?></td></tr>
<tr><td>email</td><td><?php echo $data2[3];?></td></tr>
<tr><td>Gender</td><td><?php echo $data2[5];?></td></tr>
<tr><td>Location</td><td><?php echo $data2[6];?></td></tr>
<tr><td>Address</td><td><?php echo $data2[9];?></td></tr>
<tr><td>Mobile No.</td><td><?php echo $data2[10];?></td></tr>
<tr><td>Aadhar No.</td><td><?php echo $data2[11];?></td></tr>
<tr><td>Department</td><td><?php echo $data2[12];?></td></tr>
<tr><td>Designation</td><td><?php echo $data2[13];?></td></tr>
<tr><td>Status</td><td><?php echo $data2[15];?></td></tr>


	
</table></table>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
        
      
      
    </div>
  </div>
  
</div>
		</div>
			<button type="button" class="btn btn-lg  btn-info btn-warning" data-toggle="modal" data-target="#myModal">Modify</button>
			 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #7cd3b5">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color: white">Edit Employee Details</h4>
        </div>
        <div class="modal-body">
          <table class="table tb resposive">
		<table class="table table-bordered tab">
		<thead>
	<tr class="danger">
		<th>emp-id</th><th>Employee name</th><th></th><th></th>
	</tr>
	</thead>
		<?php
$query="select * from employee_detail where status='active'" ;
$record=mysql_query($query);
while($data=mysql_fetch_array($record))
{
	?>
<tbody>
<tr class="info">
	<td><?php echo $data[0];?></td>
	<td><?php echo $data[2];?></td>
	<td><a href="update_emp.php?id=<?php echo $data[0];?>" class="btn btn-md btn-primary">Edit</a></td>
	<td><a href="emp_delete.php?id=<?php echo $data[0];?>" class="btn btn-md btn-danger">delete</a></td>
</tr>
</tbody>
<?php
}?>
</table></table>
        </div>
        <div class="modal-footer" style="background-color: #7cd3b5"j>
          <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
        
      
      
    </div>
  </div>
  
</div>
		</div>
		</div>
		</div>
			
			</form>
		</div>
	
		
		<div class="row">
	<div class="col-sm-12"style="top: 135%; position: absolute;width: 103%;">
		<div class="footer" >
		<footer >
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

if(isset($_POST['b1']))
 {
$company_name=$_POST['comp_name'];
$user_name=$_POST['user_name'];
$email=$_POST['email'];
$password=$_POST['pass'];
$confirm_pass=$_POST['confirm_pass'];
$gender=$_POST['gender'];
$location=$_POST['location'];
$security=$_POST['security'];
$answer=$_POST['answer'];
$address=$_POST['address'];
$mobile_no=$_POST['num'];
$aadhar_no=$_POST['aadhar'];
$dept=$_POST['dept'];
$desg=$_POST['desg'];
$ft=$_FILES['img']['tmp_name'];
$fn=$_FILES['img']['name'];
$fpath="pic2/".$fn;
move_uploaded_file($ft,$fpath);

if(!($password==$confirm_pass))
{
	echo"<script>alert('password not matched')</script>";
	
}
else{
	


$query="insert into employee_detail (company_name,user_name,email,password,gender,location,security,answer,address,mobile_no,aadhar_no,dept,desgn,photo,status) values('$company_name','$user_name','$email','$password','$gender','$location','$security','$answer','$address','$mobile_no','$aadhar_no','$dept','$desg','$fpath','active')";

$data=mysql_query($query);
if($data==true)
{
	$_SESSION['emp_id']=$data[0];
	echo"<script>alert('Data submitted Successfully')</script>";
	echo"<script>window.location.href='emp_detail.php' </script>";
}
else{
	echo"<script>alert('Data not Submitted')</script>";
	echo"<script>window.location.href='emp_detail.php' </script>";
}

	}
}
?>

<script>
	function myFunction()
	{
		var x = document.getElementById("myInput");
		if (x.type==="password"){
		x.type="text";	
		}
		else{
			x.type="password";
		}
		
	}
	
	function myFunction1()
	{
		var x = document.getElementById("myInput1");
		if (x.type==="password"){
		x.type="text";	
		}
		else{
			x.type="password";
		}
		
	}
</script>