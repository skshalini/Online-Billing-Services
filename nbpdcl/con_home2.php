
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
	background-color: #82dcf7;
	height: 108px;
	width: auto;
	padding-top: 1px;
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
	<body style="background-color: #ee9b11">
	<div class="container-fluid">
	<div class="row">
	<div class="header">
	<div class="col-sm-2">
	<img src="image/com.apnahits.NBPDCL.png" class="img-rounded" hight="90px" width="105px" style="padding-top: 0px;">
	</div>
	<div class="col-sm-8">
			
				
	<h2 align="center" style="font-size:25px ;color:#4a27d8"><p><b><u>NORTH BIHAR POWER DISTRIBUTION COMPANY LIMITED</u></b></p>
	<p style="font-size:22px"><b>(GOVERMENT OF BIHAR)</b></p></h2>
	</div>
		
	<div class="col-sm-2">
		<h4 align="right" style="font-size:17px;color:#4a27d8;padding-top:px"><span class="glyphicon glyphicon-earphone " style="color: red"></span><b> Toll free no. 1912</b></h4>
	</div>
	</div>
	</div>
	</div>
	<nav class="navbar navbar-inverse">
	
				<div class="navbar-header"></div>
					
				<ul class="nav navbar-nav">
				
				
<li><a href="home.php"><span class="glyphicon glyphicon-home"></span><b> Home</b></a></li>
<li><a href=""><span class="glyphicon glyphicon-user"></span><b>Profile</b></a></li>
<li><a href="temp.php"><span class="glyphicon glyphicon-list-alt"></span><b>Show Bill</b></a></li>

				</ul>
				<ul class="nav navbar-nav navbar-right">
				<button class="btn btn-danger dropdown-toggle dropdown btn-box" type="button" data-toggle="dropdown"style="margin-right: 20px">Logout
    <span class="glyphicon glyphicon-log-out"></span></button>

      
     <li><a href="cod_pay.php"><span class="glyphicon glyphicon-phone"></span><b>Pay Bill</b></a></li>
     <li><a href="bill_report.php"><span class="glyphicon glyphicon-print" ></span><b style="padding-right: 20px"> Print Bill</b></a></li>
		 	
			</ul>
		</nav>
	
	<div class="row">
	<div class="container-fluid">
	<div class="col-sm-"></div>
	<div class="col-sm-11">
	<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="image/4.jpg" style="width:1290px;padding-top: 30px;height: 400px;padding-left: 45px">
  <img class="mySlides" src="image/electric-shock-backgrounds-powerpoint.jpg" style="width:1290px;padding-top: 30px;height:400px;padding-left: 45px">
  <img class="mySlides" src="image/Free-Professional-Background-Image-for-Websites-1.jpeg" style="width:1290px;padding-top: 30px;height: 400px;padding-left: 45px">
</div>
<div class="col-sm-"></div>
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

 


  


	</body>
</html>