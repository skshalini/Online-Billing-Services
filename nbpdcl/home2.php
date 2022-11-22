<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
		
	<script src="bootstrap/jquery/jquery3.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
		
	<style>	
	
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x:hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
		
li:hover
{
	background-color: #149f0d;
	border-right: 2px solid white;

}


.bg-img1 {
	background-image: url("cc.jpeg");
	min-height: 610px;
	background-position: center;
	background-size: cover;
	position: relative;
	}
.bg-img2 {
	background-image: url("hj.jpg");
	min-height: 610px;
	background-position: center;
	background-size: cover;
	position: relative;
	}
	.bg-img3 {
	background-image: url("bn.jpeg");
	min-height: 610px;
	background-position: center;
	background-size: cover;
	position: relative;
	}
	.bg-img4 {
	background-image: url("ph.jpeg");
	min-height: 610px;
	background-position: center;
	background-size: cover;
	position: relative;
	}
	.bg-img5 {
	background-image: url("kb.jpeg");
	min-height: 610px;
	background-position: center;
	background-size: cover;
	position: relative;
	}
</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
	
				<div class="navbar-header"></div>
					
				<ul class="nav navbar-nav">
				<li><a href="#menu" data-toggle="collapse"><span class="glyphicon glyphicon-menu-hamburger"></span></a></li>
				
					<li><a href="#home"><span class="glyphicon glyphicon-home"></span><b> Home</b></a></li>
					<li><a href="#"><span class="glyphicon glyphicon-info-sign"></span><b>About</b></a></li>
					<li><a href="#"><span class="glyphicon glyphicon-th "></span><b> Gallary</b></a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#contact"><span class="glyphicon glyphicon-phone-alt "style="color:blue"></span> <b>Contact</b></a></li>
      <li><a href="#"><span class="glyphicon glyphicon-user"></span><b> Sign Up</b></a></li>
     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in"></span><b> Login</b><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Employee Login</a></li>
          <li><a href="#">Consumer Login</a></li>
          		
        </ul>
        </li>
				</ul>
			
		</nav>
		
		<div id="menu" class="collapse" style="top:10%; position: absolute;">
			<li>a</li>
			<li>b</li>
			<li>c</li>
		</div>
		
		
		<br><br><div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="close btn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>
<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
</div>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
		
		
		
		
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" ></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="ee.jpg alt="Chania" width="50%">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>LA is always so much fun!</p>
      </div>
    </div>

    <div class="item">
       <div class="bg-img1">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>
      </div>
    </div>

    <div class="item">
      <div class="bg-img2">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>
      </div>
    </div>
     <div class="item">
      <div class="bg-img3">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>
      </div>
    </div>
     <div class="item">
      <div class="bg-img4">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>
      </div>
    </div>
     <div class="item">
      <div class="bg-img5">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>
      </div>
    </div>

 


  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		
				
			
		</div>
	</div>	
		



	</body>
</html>

