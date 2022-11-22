<?php
include("conn.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
		
		<style>


.login-box{
	width: 320px;
	height: 420px;
	background: rgba(0,0,0,0.8);
	color:#fff;
	top: 60%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 70px 30px;
}
.icon{
	width: 120px;
	height:120px;
	border-radius: 50%;
	position: absolute;
	top: -50px;
	left: 100px;
}
h2{
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
.login-box a:hover{
color:red;
}
.fa
{
	position: absolute;
	left:220px;
	top:10px;
	}
		</style>
		</head>
	<body style="background-size: cover" background="image/aa.jpeg">
		<div class="login-box">
			<img src="icon/system-users-icon.png" class="icon">
			<h2>Consumer Login!</h2>
			<form method="post" action="">
				<p>Consumer Id</p>
				<input type="text" name="con_id" pattern="[0-9]{1,}" placeholder=" Enter  your consumer-Id" >
				<p>Password</p>
				<div class="input-group">
	<input type="password"style="width: 260px" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title=" must contain atleast one number and one uppercase and lowercase letter,and atleast 8 or more characters" placeholder=" Enter your password"id="myInput"  ><span class=" fa glyphicon glyphicon-eye-open" onclick="myFunction()"></span></div>
				<input type="submit" name="b1" value="Login">
				<center><a href="#"><a href="forgot.php">Forgot Password </a>|<a href="sign_up.php"> Sign Up</a></a></center>
				
			</form>
		</div>
	</body>
</html>
<?php
session_start();

 if(isset($_POST['b1']))
 {
$consumer_id=$_POST['con_id'];
$password=$_POST['pass'];
$query="select * from consumer_reg where user_id='$consumer_id' and password='$password'";
$record=mysql_query($query);
if($data=mysql_fetch_array($record))

{
	
	$_SESSION['con_id']=$data[2];
		echo"<script>alert('Successfully Logged-in ')</script>";

echo"<script>window.location.href='con_home.php' </script>";


}
	
else{
	echo"<script>alert('Not a valid user')</script>";
	echo"<script>window.location.href='home.php' </script>";
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