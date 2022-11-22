<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> menu</title>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
		<script src="bootstrap/jquery/jquery3.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
		
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
	
	li:hover
{
	background-color: #149f0d;
	border-right: 2px solid white;

}
.btn-box{
	margin-top: 7px;
}

   </style>
	</head>


	<body>
	<nav class="navbar navbar-inverse">
	
				<div class="navbar-header"></div>
					
				<ul class="nav navbar-nav">
				
				
					<li><a href="#home"><span class="glyphicon glyphicon-home"></span><b> Home</b></a></li>
					<li><a href="#"><span class="glyphicon glyphicon-info-sign"></span><b>About</b></a></li>
					<li><a href="#"><span class="glyphicon glyphicon-th "></span><b> Gallary</b></a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				<li><button class="btn btn-danger dropdown-toggle dropdown btn-box" type="button" data-toggle="dropdown">Dropdown Example
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li></li>
    </ul>
					<li><a href="#contact"><span class="glyphicon glyphicon-phone-alt "style="color:blue"></span> <b>Contact</b></a></li>
      <li><a href="#"><span class="glyphicon glyphicon-user"></span><b> Sign Up</b></a></li>
     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in"></span><b> Login</b><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Login as Admin</a></li>
          <li><a href="#">Consumer Login</a></li>
          		
        </ul>
        </li>
				</ul>
			
		</nav>
		
		
	
	
	</body>
</html>