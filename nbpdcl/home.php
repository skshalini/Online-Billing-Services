 
<!DOCTYPE html>
<html>   
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css"> 
	<link href="bootstrap/css/animate.css" rel="stylesheet"/>
	 <script src=" bootstrap/js/jquery3.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="bootstrap/js/wow.js"></script>
 
 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 
 
	<style>
	body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.btn:not(.btn-block)
 { 
 height:100px;
 width:240px;
 margin-bottom:1px;
 margin-left: 65px;
 margin-top: 10px;
   }


.bg-img {
 background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.2)), url("image/img89.jpg");
  min-height: 560px;
  height: 50%;
  background-position: center; 
  background-size: cover;
  position: relative;
}


.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
 left:40%;
 transform: translate(-30%, -50%);
  color: white;
}

	
.hero-text1 {
  text-align: center;
  position: absolute;
  top: 50%;
  left:40%;
  transform: translate(-30%, -50%);
  color: white;
  
}

a{
	
	color:blue;
	font-size: 25px;
	padding:12px 16px; 
	padding-left:2px;
}



.content
{
  position: absolute;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 17px;
 
}


.item-1, 
.item-2, 
.item-3 {
	position: absolute;
  display: block;
	 
  width: 60%;
  
  font-size: 2em;

	animation-duration: 20s;
	animation-timing-function: ease-in-out;
	animation-iteration-count: infinite;
}

.item-1{
	animation-name: anim-1;
}

.item-2{
	animation-name: anim-2;
}

.item-3{
	animation-name: anim-3;
}

@keyframes anim-1 {
	0%, 8.3% { left: -100%; opacity: 0; }
  8.3%,25% { left: 25%; opacity: 1; }
  33.33%, 100% { left: 110%; opacity: 0; }
}

@keyframes anim-2 {
	0%, 33.33% { left: -100%; opacity: 0; }
  41.63%, 58.29% { left: 25%; opacity: 1; }
  66.66%, 100% { left: 110%; opacity: 0; }
}

@keyframes anim-3 {
	0%, 66.66% { left: -100%; opacity: 0; }
  74.96%, 91.62% { left: 25%; opacity: 1; }
  100% { left: 110%; opacity: 0; }
}





 
	</style>
	</head>
	
		
<body>
<div class="bg-img">
 <nav class="navbar navbar-light">  
  <div class="container-fluid">
				<div class="navbar-header">
      <a class="navbar-brand"></a>
    </div>	
				<ul class="nav navbar-nav" style="padding-top: 20px;padding-left: -10px">
				
					<a href="home.php"><span class="glyphicon glyphicon-home"></span><b>  Home</b></a>
					<a href="about us.php"><span class="glyphicon glyphicon-info-sign"></span><b>  About</b></a>
					<a href="contact.php"><span class="glyphicon glyphicon-phone-alt "></span><b> Contact</b></a></ul>
				<ul class="nav navbar-nav navbar-right"  style="padding-top: 20px ; padding-right:10px ">
			 <a href="adminlogin.php"><span class="glyphicon glyphicon-user"></span><b> Admin Login</b></a>
            <a href="employee_login.php"><span class="glyphicon glyphicon-log-in"></span><b> Employee Login</b></a> 
  
     </ul>
      
   </div>
</nav>


 <div class="container-fluid">
  <div class="hero-text">  	
    <h1 style="font-size:60px" >North Bihar Power distribution Company Private Ltd.</h1>
    <p style="font-size:20px;color:white" >Save Today...Survive Tomorrow</p>
    <br><br>
    <p class="item-1">QUICK PAY- Provides you with flexible payment methods for your North Bihar electricity bill payments..</p>

<p class="item-2">It also provides you fast and safe payment service.</p>

<p class="item-3">And many offers on your NBPDCL bill payment.</p>
    
    </div>
    </div>

</div>
	
		
		
     <div class="container-fluid" >
     <div class="row">
     	
     	<h2 align="center"  style="font-size:30px;color:white;padding-top:20px;background-color: #3675c9;"><marquee behavior="alternate"><b>FOR CONSUMER HELP!!</b></marquee></h2>	
      </div>
      </div>
		<div class="container-fluid">
		<div class="row" >
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
   <a href="sign_up.php" class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-user"></span> <br/>Consumer<br>Sign Up</a>
       <a href="energy_conservation.php" class="btn btn-warning btn-lg" role="button"><span class="glyphicon glyphicon-file"></span> <br/>Energy <br>Conservation</a>
       <a href="commercial_info.php" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-comment"></span> <br/>Commercial <br>Information</a>
</div>
<div class="col-sm-4">
  <a href="consumer_login.php" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-log-in"></span> <br/>Consumer <br>Login</a>
  <a href="policy.php" class="btn btn-info btn-lg" role="button"><span class="glyphicon glyphicon-list-alt"></span> <br/>Privacy <br>Policy</a>
  <a href="ad_new_connection.php" class="btn btn-warning btn-lg" role="button"style="margin-left: px"><span class="glyphicon glyphicon-flash"></span> <br/>New <br>Connection</a>
  </div>
    <div class="col-sm-2"></div>
     </div>
     
<br>
<div class="row" style="background-color: #358652;height: 200%;width: auto;" >

<div class="col-sm-8">
 <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 20px ;margin-bottom: 20px">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="carousel-inner">
      <div class="item active">
        <img src="image/_Digitalizationvideo_1.gif"  style="width:900px;height:400px">
      </div>

      <div class="item">
        <img src="image/4.jpg"  style="width:900px;height:400px">
      </div>
    <div class="item">
        <img src="image/har-ghar-bijli-yojana.jpg"  style="width:900px;height:400px">
      </div>
      <div class="item">
        <img src="image/pp.jpg"  style="width:900px;height:400px">
      </div>
      
       <div class="item">
        <img src="image/lenovo-data.jpg"  style="width:900px;height:400px">
      </div>
    
      <div class="item">
        <img src="image/jh.jpg"  style="width:900px;height:400px">
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
  </div>
 
  
</div>
<div class="col-sm-3">
	 <div class="panel panel-info"style="margin-top: 60px;margin-right:-50px">
			<div class="panel-body"style="background-color:#c4d0d5">
			
<marquee direction="up" scrolldelay="150" onmouseover="this.stop();" onmouseout="this.start();">

<p><font face="Gunplay"color="#334359" size="4">*Quick Bill Payment functionality provides users the facility to make payments without logging inor registering on the portal.<br>
*In order to make payments, consumer is required to enter the CA Number printed on the Bill.
*Quick Pay provides you with flexible payment methods for your North Bihar electricity bill payments..
*It also provides you fast and safe payment service.
*And many offers on your NBPDCL bill payment.o
</font></p></marquee>
</div>
</div>
</div>
</div>
</div>

      <script>
         new WOW().init();
    
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 6000);    
}
</script>
       <?php
include("footer.php");
?>	
</body>
</html>