<?php
include("home_head.php");
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
	
.bg-img {
	background-image: url("image/dd.jpg");
	min-height: 400px;
	background-position: center;
	background-size: cover;
	position: relative;

	}

.btn:not(.btn-block)
 { 
 height:100px;
 width:240px;
 margin-bottom:1px;
 margin-left: 65px;
 margin-top: 10px;
   }
 .panel-right{
 	margin-left: 80px;
 
 } 
 .panel-left{
 	margin-right: 80px;
 
 }  
 
 a{
 	
 	color: red;
 	font-size: 20px;
 }
 
 
	</style>
	</head>
	<body>
		
	
	<div class="bg-img">
	<nav class="navbar navbar-light">
	
				<div class="navbar-header"></div>
					
				<ul class="nav navbar-nav">
				
			
					<li><a href="home.php"><span class="glyphicon glyphicon-home"><b>Home</b></span></a></li>
					<li><a href="about us.php"><span class="glyphicon glyphicon-info-sign"></span><b>About</b></a></li>
					<li><a href="home.php"><span class="glyphicon glyphicon-th "></span><b> Gallary</b></a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="contact.php"><span class="glyphicon glyphicon-phone-alt "></span> <b>Contact</b></a></li>
      <li><a href="adminlogin.php"><span class="glyphicon glyphicon-user"></span><b> Admin Login</b></a></li>
     <li><a href="employee_login.php"><span class="glyphicon glyphicon-log-in"></span><b> Employee Login</b></a>
       
        </li>
     </ul></nav>
     </div>
     
     <div class="row">
     	
     	<h2 align="center"  style="font-size:30px;color:white;padding-top:20px;margin-top: -20px;background-color: #3675c9;"><marquee behavior="alternate"><b>FOR CONSUMER HELP!!</b></marquee></h2>	
     
     </div>
		<div class="container-fluid">
		<div class="row" style="background-color: ">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
   <a href="sign_up.php" class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-user"></span> <br/>Consumer<br>Sign Up</a>
       <a href="energy_conservation.php" class="btn btn-warning btn-lg" role="button"><span class="glyphicon glyphicon-file"></span> <br/>Energy <br>Conservation</a>
</div>
<div class="col-sm-4">
  <a href="consumer_login.php" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-log-in"></span> <br/>Consumer <br>Login</a>
  <a href="policy.php" class="btn btn-info btn-lg" role="button"><span class="glyphicon glyphicon-list-alt"></span> <br/>Privacy <br>Policy</a></div>
  <div class="row">
  <div class="col-sm-5"></div>
  <div class="col-sm-2">
  <br>
  <a href="commercial_info.php" class="btn btn-primary btn-lg" role="button"style="margin-left: -50px"><span class="glyphicon glyphicon-comment"></span> <br/>Commercial <br>Information</a></div>
  <div class="col-sm-2"></div></div>
   
      <div class="col-sm-2"></div>
     </div>
</div>
        	
        	
        	<br><div class="row"style="background-color: #358652">
        		<div class="col-sm-2"></div>
        		<div class="col-sm-3">
        			<img src="image/img2.jpeg" class="img-circle"height="250px" width="250px">
        		</div>
        		<div class="col-sm-5">
        			<h5 align="justify" style="font-size:15px;color: white"><br><p><b>NBPDCL is a company registered under the provisions of Companies Act 1956 and is a fully owned subsidiary Company of BSPHCL</b></p>
			<p><b>The Company is engaged primarily in the business of distribution of Electricity.It has been vested with the distribution assets, interest in property, rights andliabilities of the erstwhile BSEB necessary for the business of distribution inits area of distribution comprising of all 21 districts of North Bihar (namely 1.West Champaran, 2. East Champaran, 3. Sitamadhi, 4. Sheohar, 5. Muzaffarpur, 6.Vaishali, 7. Saran, 8. Siwan, 9. Gopalgunj, 10. Mahubani, 11. Darbhanaga, 12. Samastipur,13. Begusarai, 14. Khagaria, 15. Saharsa, 16. Supaul, 17. Medhepura, 18. Araria,19. Katihar, 20. Purnea and 21. Kishangunj).</b></p></h5>
        		</div>
        		<div class="col-sm-2"></div>
        	</div>
        	
       <?php
include("footer.php");
?>
        	</body>
</html>