<?php
include("con_menu2.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
		
	<script src="bootstrap/jquery/jquery3.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	
	
	<style>
	
.mySlides {display:none;}
.header{
	background-image: url("image/header1.jpg");
	background-size:cover;
	background-color:;
	height: 108px;
	width: auto;
	padding-top: 1px;
	margin-top: 500px;
}
.wrap{
	width: 1000px;
	margin: auto;
	margin-top: 100px;
}
.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}

.card{
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.6);
	transition: 0.4s;
	width:300px;
	background: #fff;
	text-align: center;
	font-size: 16px;
	font-family: sans-serif;
	float: left;
	margin: 10px;
}
.card:hover{
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.6);
}
.btn-box{
	margin-top: 7px;
}
.box{
	
	height:300px;
	width:230px;
	position: relative;
	top:%;
	left:10%;
	border:;
	border-radius:5px;
	background-color:rgba(250, 250, 250,0.5);
	box-shadow:7px 12px 18px #888888;
	
}
</style>
		
	</head>
	<body style="background-color:#58c2f5" >
	<header>
<marquee  bgcolor="#2B547E" behavior="alternate">

<font color=" white" face="gunplay"><h2>Welcome to NBPDCL...!!</h2></font></marquee></header>
	<div class="container-fluid">
	<div class="row">
	<div class="col-sm-"></div>
	<div class="col-sm-11">
	<div class="w3-content w3-section" style="max-width:500px;margin-top: -20px">
	<img class="mySlides" src="image/vb1.png" style="width:1290px;padding-top: 30px;height: 400px;padding-left: 45px">
  <img class="mySlides" src="image/1-0.jpg" style="width:1290px;padding-top: 30px;height: 400px;padding-left: 45px">
  <img class="mySlides" src="image/sddefault.jpg" style="width:1290px;padding-top: 30px;height: 400px;padding-left: 45px">
  <img class="mySlides" src="image/1 (1).jpg" style="width:1290px;padding-top: 30px;height:400px;padding-left: 45px">
  <img class="mySlides" src="image/maxresdefault (2).jpg" style="width:1290px;padding-top: 30px;height: 400px;padding-left: 45px">
</div>
</div>
</div>
</div>

<script>
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
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

<div class="container"style="margin-top:20px ">
<div class="row">
<header>
<center>
<font color=" white" face="algerian"><h2 style="background-color:#a8120b;font-size:30px;height: 60px;border:solid 5px #f57223;padding-top: 10px" align="center">BIHAR GOVERNMENT SCHEMES FOR ELECTRICITY </h2></font></center></header><br>
<div class="col-sm-4">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="image/irrigation1.jpg" alt="Avatar" style="width:350px;height:300px;">
    </div>
    <div class="flip-card-back">
     <img src="image/pk1.jpg" alt="Avatar" style="width:350px;height:300px;">
    </div>
  </div>
  </div>
  </div>
  <div class="col-sm-4">
  <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
 <img src="image/kusum-solar-pump-scheme-application-form.jpg" alt="Avatar" style="width:350px;height:300px;">
    </div>
    <div class="flip-card-back">
     <img src="image/download12.jpg" alt="Avatar" style="width:350px;height:300px;">
    </div>
  </div>
  </div>	
  </div>

<div class="col-sm-4">
	<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
 <img src="image/villagepower-kSlB--621x414@LiveMint.JPG" alt="Avatar" style="width:350px;height:300px;">
    </div>
    <div class="flip-card-back">
     <img src="image/119-82.jpg" alt="Avatar" style="width:350px;height:300px;">
    </div>
  </div>
  </div>
</div>

</div>
</div>
<br>
	<div class="row">
	<div class="container-fluid">
	
	
	<div class="col-sm-12">
		<div class="panel panel-info"  style="background-color:#C5CAE9">
			<div class="panel-heading"><font face="Comic Sans MS" size="5"><b><center>SAVE ENERGY, SAVE ASSETS OF FUTURE</center></b></font></div>
			<div class="panel-body">
			
				<img src="gifs/17-30-10-lightbulb.gif" class="img-circle img"height="10%"width="20%"style="align:left">
	<img src="image/images.png" class=""height="10%"width="300px"style="align:center">
	<img src="image/thumbl1.jpg" class=""height="5%"width="10%"style="align:center">
	<img src="image/thumbl2.png" class=""height="10%"width="300px"style="align:center">
	<img src="gifs/17657_27346_21485_7.gif" class=""height="10%"width="200px"style="align:center">
	<div class="row">
	<div class="col-sm-4"></div>
	<div class="col-sm-2">
<a href="Urja Geet.pdf"><img src="icon/adobe-pdf-icon.png" height="50px" width="50px"> <h4>Urja Geet.Pdf</h4></a></div>
<div class="col-sm-2">
<a href="Urja Mix Master-120.mp3"><img src="icon/MP3.png" height="50px" width="50px"> <h4>Urja Geet Audio</h4></a>
	</div>
	<div class="col-sm-2">
<a href="https://play.google.com/store/apps/details?id=com.bbpa"><img src="icon/unnamed.png" height="50px" width="50px"> <h4>Bihar Bijli Pay App</h4></a>
	</div>
	</div>
		</div>
	</div>
			
	</div>
		

	</div>
	</div>
	
<br>
<div class="row">

</div>
  <br>
<?php
include("footer.php");
?>

	</body>
</html>