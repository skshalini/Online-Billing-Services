<?php
include("conn.php");

include("menu11.php");
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



.sidenav {
  height: 80%;
  width: 0;
  position: ;
  z-index: 1;
  left: 0;
  background-color: #111;
  height: 520px;
  width: 250px;
  overflow-x:;
  transition: 0.7s;
  padding-top: 2px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  transition: 0.3s;
  
}

.sidenav a:hover {
  color: #f1f1f1;
}
.box{
	
	height:500px;
	width:700px;
	position: absolute;
	top:48%;
	left:24%;
	border:;
	border-radius:5px;
	background-color:rgba(250, 250, 250,0.5);
	box-shadow:7px 12px 18px #888888;
	overflow-y: auto;
}
	
.txt{
	color:black;

	
	
</style>
</head>

	<body style="background-size: cover" background="image/hh.jpeg">
	
	<center>
	<br><br><br>
	<img src="icon/Users-Administrator-2-icon.png"  width="150" height="150" class="img-circle"style="padding-top:0"></center>
	<center><h3><b><u>Employee Info</u></b></h3></center>
	<div class="box">
	<form method="post" action="" enctype="multipart/form-data">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="form-group">
			
			<br>
				<label class="txt">Company name:</label>
				<input type="text"name="com_name" class="form-control" pattern="[A-Za-z]{2,}"placeholder=" Enter company name">
			</div>
			<div class="form-group">
			<label class="txt">User name:</label>
			<div class="input-group">
			 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				
				<input type="text" name="user_name" class="form-control"pattern="[A-Za-z]{2,}" placeholder=" Enter user name">
			</div>
			</div>
			<div class="form-group">
				<label class="txt">User id:</label>
				<div class="input-group">
			 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input type="text"name="user_id" class="form-control" pattern="[0-9]{1,}" placeholder=" Enter your user id">
			</div>
			</div>
			<div class="form-group">
				<label class="txt">Email:</label>
				<div class="input-group">
			 <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
				<input type="email"name="email" class="form-control" placeholder=" abc@gmail.com">
			</div>
			</div>
			<div class="form-group">
				<label class="txt">Password:</label>
				<div class="input-group">
			 <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				
				<input type="password"name="pass" class="form-control" pattern="(?=,*\d)(?= *[a-z])(?= [A-Z]){8,}" placeholder=" Enter your password ">
			</div>
			</div>
			<div class="form-group">
				<label class="txt">Confirm password:</label>
				<div class="input-group">
			 <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				
				<input type="password"name="confirm_pass" class="form-control" pattern="(?=,*\d)(?= *[a-z])(?= [A-Z]){8,}" placeholder=" Again enter your password ">
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
				<select class="form-control" name="location">
					<option>Select</option>
					<option>Patna</option>
					<option>Aara</option>
					<option>Muzaffarpur</option>
				</select>
			</div>
			<div class="form-group">
				<label class="txt">Security:</label>
				<div class="input-group" >
			 <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				<select class="form-control" name="security">
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
			 <span class="input-group-addon"><i class="glyphicon glyphicon-king"></i></span>
				<input type="text"name="answer"  pattern="[A-Za-z]{2,}" class="form-control">
			</div>
			</div>
			
			
			<div class="form-group">
			<label class="txt">Address:</label>
			<div class="input-group">
			 <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
				<input type="text"name="address" class="form-control"  pattern="[A-Za-z]{2,}" placeholder=" Enter your address">
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
				<input type="number"name="num" class="form-control" pattern="[0-9]{10,12}" placeholder=" Enter digit only">
			</div>
			</div>
			<div class="form-group">
				<label class="txt">Aaddhar no.:</label>
				<div class="input-group">
			 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input type="number" name="aadhar" class="form-control"pattern="^\d{4}\s\d{4}\s\d{4}$" placeholder=" 0000 0000 0000">
			</div>
			</div>
			<div class="form-group">
				<label class="txt">Department:</label>
				<select class="form-control" name="dept">
					<option>Select</option>
					<option>Department Detail</option>
					<option>ft</option>
				</select>
			</div>
			<div class="form-group">
				<label class="txt">Designation:</label>
				<select class="form-control" name="desg">
					<option>Select</option>
					<option>Designation Detail</option>
					<option>hr</option>
				</select>
			</div>
			
			<div class="form-group">
				<label class="txt">Photo :</label>
				<input type="file"name="img"class="form-control"placeholder="file not choosen"></div>
			
			
			<button type="submit"name="b1"class="btn btn-lg btn-primary" value="submit">Submit</button>
		<button type="button" class="btn btn-lg   btn-success" data-toggle="modal"  data-target="#myModal2">view</button>
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
		<tr><td colspan="2"><center><img src="<?php echo $data2[16]?>" width="100px" height="100px"style="padding-top:0;padding-left:30px;" class="img-circle"></center></td></tr>
	
<tr><td>emp-id</td><td><?php echo $data2[0];?></td></tr>
<tr><td>Company name</td><td><?php echo $data2[1];?></td></tr>
<tr><td>Employee Name</td><td><?php echo $data2[2];?></td></tr>
<tr><td>email</td><td><?php echo $data2[4];?></td></tr>
<tr><td>Gender</td><td><?php echo $data2[6];?></td></tr>
<tr><td>Location</td><td><?php echo $data2[7];?></td></tr>
<tr><td>Address</td><td><?php echo $data2[10];?></td></tr>
<tr><td>Registered Id</td><td><?php echo $data2[11];?></td></tr>
<tr><td>Mobile No.</td><td><?php echo $data2[12];?></td></tr>
<tr><td>Aadhar No.</td><td><?php echo $data2[13];?></td></tr>
<tr><td>Department</td><td><?php echo $data2[14];?></td></tr>
<tr><td>Designation</td><td><?php echo $data2[15];?></td></tr>
<tr><td>Status</td><td><?php echo $data2[17];?></td></tr>


	
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
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">For Modification</h4>
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
	<td><?php echo $data[1];?></td>
	<td><a href="update_emp.php?id=<?php echo $data[0];?>" class="btn btn-md btn-primary">Edit</a></td>
	<td><a href="emp_delete.php?id=<?php echo $data[0];?>" class="btn btn-md btn-danger">delete</a></td>
</tr>
</tbody>
<?php
}?>
</table></table>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
        
      
      
    </div>
  </div>
  
</div>
		</div>
		</div>
		</div>
			
			</form>
		</div>
	
		
	
	
		
	</body>
</html>
<?php
if(isset($_POST['b1']))
 {
$company_name=$_POST['com_name'];
$user_name=$_POST['user_name'];
$user_id=$_POST['user_id'];
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
$query="insert into employee_detail (company_name,user_name,user_id,email,password,gender,location,security,answer,address,mobile_no,aadhar_no,dept,desgn,photo,status) values('$company_name','$user_name','$user_id','$email','$password','$gender','$location','$security','$answer','$address','$mobile_no','$aadhar_no','$dept','$desg','$fpath','active')";

$data=mysql_query($query);
if($data==true)
{
	
	echo"<script>alert('data inserted')</script>";
	echo"<script>window.location.href='emp_detail.php' </script>";
}
else{
	echo"<script>alert('data not inserted')</script>";
	
}
}
?>