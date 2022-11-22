
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
	width: 100px;
	height:100px;
	border-radius: 50%;
	position: absolute;
	top: -50px;
	left: 110px;
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
	background:#3099af;
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
			<img src="icon/User-Administrator-Blue-icon.png" class="icon">
			<h2> Admin Login!</h2>
			<form method="post" action="">
				<p>Admin id</p>
				<input type="text" name="id" pattern="[A-Za-z]{6}" placeholder=" Enter your id" required="">
				<p>Password</p>
					<div class="input-group">
				<input type="password" name="pass"style="width: 260px"   required placeholder=" Enter your password" id="myInput"  ><span class=" fa glyphicon glyphicon-eye-open" onclick="myFunction()"></span></div>
				<input type="submit" name="b1" value="Login">
				
				
			</form>
		</div>
	</body>
</html>
<?php
include("conn.php");
session_start();
$GLOBALS['id']='nbpdcl';
$GLOBALS['pass']='123';
 if(isset($_POST['b1']))
 {
$admin_id=$_POST['id'];
$password=$_POST['pass'];
if($GLOBALS['id']=='nbpdcl' && $GLOBALS['pass']=='123')

{
	
	$_SESSION['adminid']=$GLOBALS['id'];
		echo"<script>alert('Successfully Logged-in')</script>";
	echo"<script>window.location.href='admin.php' </script>";
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