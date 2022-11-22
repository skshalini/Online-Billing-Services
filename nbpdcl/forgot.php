<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
		
		<style>

.login-box{
	width: 340px;
	height:auto;
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
	width: 130px;
	height:130px;
	border-radius: 50%;
	position: absolute;
	top: -60px;
	left: 110px;
}

h2{
	margin: 0;
	padding: 0 0 20px;
	text-align: center;
	font-size: 20px;
}
.login-box p{
	margin: 0;
	padding: 0;
	font-weight: bold;
}
.login-box input{
	
width: 100%;
margin-bottom: 5px;
}
.login-box input[type="email"], input[type="number"],select, input[type="text"]
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
	background:red;
	font-size: 19px;
	border-radius:25px;
}
.login-box input[type="submit"]:hover
{
	cursor: ;
	background: #fb0f2d;
	

}
.login-box a{
	text-decoration: none ;
	font-size: 15px;
	color:#fff;
}
.login-box a:hover{
color:red;
}
.txt1{
	color: white;
}

		</style>
		</head>
	<body style="background-size: cover" background="image/k.jpg">
	
		<div class="login-box">
		<img src="icon/secrecy-icon.png" class="icon">
			<h2>Forgot Password!!</h2>
			<form method="post" action="">
				<p>Email id:</p>
				<input type="email" name="email" placeholder=" abc@gmail.com">
				<p>Mobile no.</p>
				<input type="text" name="num" placeholder=" Enter 10 digit only">
				<p>Security question:</p>
				<select name="s_ques" class="txt1" placeholder="select a secuirity question">
				<option style="color: black">Select</option>
					<option style="color: black">Your favourite pet animal?</option> 
					<option  style="color: black">Your favourite book?</option>
					<option style="color: black">Your nick name?</option>
				
				</select>
				<p>Sequrity Answer:</p>
				<input type="text" name="s_ans" placeholder="">
				
				<input type="submit" name="b1" value="submit">
				<center><a href="#"><a href="consumer_login.php">Consumer Login</a> | <a href="sign_up.php">Sign up</a></a></center>
				
			</form>
		</div>
	</body>
</html>
<?php
include("conn.php");
 if(isset($_POST['b1']))
 {
 	session_start();
$email=$_POST['email'];
$mob_no=$_POST['num'];
$s_ques=$_POST['s_ques'];
$s_ans=$_POST['s_ans'];
$query="select * from consumer_reg where email='$email' and mob_no='$mob_no' and s_ques='$s_ques' and s_ans='$s_ans'";
$record=mysql_query($query);
    $data=mysql_fetch_array($record);
if($data==true)
{ 
$_SESSION['reg_id']=$data[0];
	echo"<script>alert(".$_SESSION['reg_id'].")</script>";
	echo"<script>window.location.href='c_new_password.php' </script>";
}
else{
	echo"<script>alert('incorrect')</script>";
	
}
}
?>