<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
				<style>
li:hover
{
	background-color: #149f0d;
	border-right: 2px solid white;

}

.login-box{
	width: 320px;
	height: 420px;
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
	<body style="background-size: cover" background="aa.jpeg">
		<div class="login-box">
			<img src="icon/unlock-icon (1).png" class="icon">
			<h1>Reset Password</h1>
			
			<form>
				<p>New Password</p>
				<input type="password" name="pass1" placeholder=" Enter new password" required>
				<p>Confirm New Password</p>
				<input type="password" name="pass2" placeholder=" Re-enter password" required>
				<input type="submit" name="btn1" value="login">
				<a href="employee_login.php">Login</a> |<a href="#"> Signup</a>
				
			</form>
		</div>
	</body>
</html>