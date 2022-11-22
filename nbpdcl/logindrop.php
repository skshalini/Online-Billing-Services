<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
		
	<script src="bootstrap/jquery/jquery3.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
		
	<style>	
		
li:hover
{
	background-color: #149f0d;
	border-right: 2px solid white;

}

.arrow-up{
width:0;
height:0px;
position:absolute;
border-left:20px solid transparent;
border-right:20px solid transparent;
border-bottom: 20px solid  rgba(0,0,0,0.8);
right:30px;
top:50px;	
}
.login-box{
	width: 320px;
	height: 420px;
	background: rgba(0,0,0,0.8);
	color:#fff;
	top: 300px;
	right:-135px;
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
	<body>
	<nav class="navbar navbar-inverse">
			
				<div class="navbar-header"></div>
					
				<ul class="nav navbar-nav">
					<li><a href="#home"><span class="glyphicon glyphicon-home"></span><b> Home</b></a></li>
					<li class="active"><a href="#"><b>About</b></a></li>
					<li><a href="#"><span class="glyphicon glyphicon-th "></span><b> Gallary</b></a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#contact"><span class="glyphicon glyphicon-phone-alt "style="color:blue"></span> <b>Contact</b></a></li>
					
					 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in"></span><b> Login</b><span class="caret"></span></a> <ul class="dropdown-menu">
          <li><a href="#">Employee Login</a></li>
          <li><a href="#">Consumer Login</a></li>
          		</ul>
					  <li><a href="#"><span class="glyphicon glyphicon-user"></span><b> Sign Up</b></a></li>
     <div class="arrow-up"></div>
    
    <div class="login-box">
			<img src="icon/system-users-icon.png" class="icon">
			<h1>Login Here</h1>
			<form action="">
				<p>Employee id</p>
				<input type="text" name="txt1" placeholder=" Enter  your id" required>
				<p>Password</p>
				<input type="password" name="txt2" placeholder=" Enter your password" required>
				<input type="submit" name="btn1" value="login">
				<a href="forget_password.php">Forgot Password</a> |<a> Signup</a>
				
			</form>
		</div>
        
       
        </li>
				</ul>
			
		</nav>
		
		
	</body>
</html>