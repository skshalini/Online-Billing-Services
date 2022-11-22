<!DOCTYPE html>
<?php
include("home_head.php");

?>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
		
		<style>


.login-box{
	width: 420px;
	height:auto;
	background: rgba(0,0,0,0.8);
	color:#fff;
	top: 110%;
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
	left: 140px;
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
.login-box input[type="text"],select, input[type="password"],input[type="email"]
{
	
	background:transparent;
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
	background:#d69f10;
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
	left:320px;
	top:10px;
	}
		</style>
		</head>
	<body style="background-size: 1400px 1150px" background="image/img1.jpeg">
		<div class="login-box">
			<img src="icon/contact-group-icon.png" class="icon">
			<h2>Sign Up Here!</h2>
			<form method="post" action="">
				<p>Username</p>
				<input type="text" name="user_name" pattern="[a-zA-Z]{2,50}+"placeholder=" Enter  your Username" >
				<p>Consumer id</p>
				<input type="text" name="user_id"pattern="[0-9]{1,}" placeholder=" Enter  your User id"  >
				<p>Password</p>
				<div class="input-group">
				<input type="password"style="width: 360px"  name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title=" must contain atleast one number and one uppercase and lowercase letter,and atleast 8 or more characters" placeholder=" Enter your password"id="myInput" ><span class="fa glyphicon glyphicon-eye-open" onclick="myFunction()"></span>
				</div>
				<p>Confirm Password</p>
				<div class="input-group">
				<input type="password"  style="width: 360px"   name="c_pass"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title=" must contain atleast one number and one uppercase and lowercase letter,and atleast 8 or more characters" placeholder=" Re-enter your password"id="myInput1" ><span class="fa glyphicon glyphicon-eye-open" onclick="myFunction1()"></span></div>
	
				<p>Security</p>
				<select class="form-control" required name="security"style="background: transparent">
				<option>Select</option>
					<option>Your favourite pet animal?</option> 
					<option>Your favourite book?</option>
					<option>Your nick name?</option>
				</select>
				<p>Answer</p>
				<input type="text" name="answer"  pattern="[A-Za-z]{2,}+" placeholder=" Enter security answer" >
				<p>Email</p>
				<input type="email" name="email1" placeholder=" abc@gmail.com" >
				<p>Mobile no.</p>
				<input type="text" name="mob_no" pattern="[0-9]{10,12}" placeholder=" Enter your 10 digit number">
	
				
				<input type="submit" name="b1" value="Sign up">
				<center><a href="#"><a href="forgot.php">Forgot Password </a>|<a href="consumer_login.php"> Login</a>|<a href="Home.php"> Home</a></a></center>
				
			</form>
		</div>
		
	</body>
</html> 
<?php
$email="";
$consumer_id=0;include("conn.php");
 if(isset($_POST['b1']))
 {
$user_name=$_POST['user_name'];
$consumer_id=$_POST['user_id'];
$email=$_POST['email1'];
$mob_no=$_POST['mob_no'];
$password=$_POST['pass'];
$confirm_pass=$_POST['c_pass'];
$security=$_POST['security'];
$answer=$_POST['answer'];
if(!($password==$confirm_pass))
{
	echo"<script>alert('password not matched')</script>";
	
}
else{	
$query="select * from new_connection where con_id=$consumer_id";
$record=mysql_query($query);
if($data=mysql_fetch_array($record))
{
$query2="select * from consumer_reg where user_id='$consumer_id'";
$record2=mysql_query($query2);
if($data2=mysql_fetch_array($record2))
{
	echo"<script>alert('Consumer already Registered!!')</script>";		
}
else{
	
$query1="insert into consumer_reg (user_name,user_id,password,s_ques,s_ans,email,mob_no) values('$user_name','$consumer_id','$password','$security','$answer','$email','$mob_no')";
$data1=mysql_query($query1);

echo"<script>alert('Consumer registered successfully!!')</script>";		
	echo"<script>window.location.href='consumer_login.php' </script>";
			}
}
else
{
	echo"<script>alert('Not a valid Consumer!!')</script>";	
	echo"<script>window.location.href='sign_up.php' </script>";	
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