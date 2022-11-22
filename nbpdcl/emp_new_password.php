<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
				<style>
li:hover
{
	background-color: #149f0d;
	border-right: 2px solid white;

}

.login-box{
	width: 320px;
	height:auto;
	background: rgba(0,0,0,0.8);
	color:#fff;
	top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 70px 30px;
}
.icon{
	width: 100px;
	height:100px;
	border-radius: 50%;
	position: absolute;
	top: -50px;
	left: 110px;
}
h1{
	margin: 0;
	padding: 0 0 20px;
	text-align: center;
	font-size: 22px;
}
.login-box p{
	margin: 0;
	padding: 0;
	font-weight: bold;
}
.login-box input{
	
width: 100%;
margin-bottom: 20px;
}
.login-box input[type="text"], input[type="password"]
{
	border: none ;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline:none ;
	height: 40px;
	color: ;
	font-size: 18px;
}
.login-box input[type="submit"]
{
	border: none;
	outline: ;
	height: 40px;
	background:#22ac91;
	font-size: 19px;
	border-radius:25px;
}
.login-box input[type="submit"]:hover
{
	cursor: ;
	background: red;
	

}
.login-box a{
	text-decoration: none ;
	font-size: 15px;
	color:#fff;
}
.login-box a:hover
{
color:red;
}
		</style>
	</head>
	<body style="background-size: cover" background="image/k.jpg">
		<div class="login-box">
			<img src="icon/unlock-icon (1).png" class="icon">
			<h1>Reset Password</h1>
			
			<form method="post" action="">
			<div class="inner-addon left-addon">
				<p>New Password</p>
				<input type="password" name="pass1" required placeholder=" Enter new password" required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="must contain atleast one number and one uppercase and lowercase letter,and atleast 8 or more characters" id="myInput">
				</div><br>
				
				<p>Confirm New Password</p>
				<input type="password" name="pass2" required placeholder=" Re-enter password" required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="please re-enter your password">
				<input type="submit" name="btn1" value="Reset">
				<a href="Consumer_login.php">Login</a> |<a href="#"> Signup</a>
				
			</form>
		</div>
	</body>
</html>
<?php
include("conn.php");
session_start();
$GLOBALS['emp_id']=$_SESSION['employee_id'];
if(isset($_POST['btn1']))
 {
$password=$_POST['pass1'];
$confirm_pass=$_POST['pass2'];

if(!($password==$confirm_pass))
{
	echo"<script>alert('password not matched')</script>";
	
}
else
{
	
$query1="UPDATE `employee_detail` SET `password`='$password' WHERE emp_id=".$GLOBALS['emp_id']."";
$data1=mysql_query($query1);
if($data1==true)
{
	
	echo"<script>alert('Password changed successfully!!')</script>";
	echo"<script>window.location.href='employee_login'.php' </script>";
}
else{
	echo"<script>alert('Password not changed..please check the password')</script>";
	echo"<script>window.location.href='consumer_login.php' </script>";
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
</script>