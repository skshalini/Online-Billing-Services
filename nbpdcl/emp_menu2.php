<?php
session_start();
if(isset($_SESSION['emp_id']))
{
	
}
else{
	echo"<script> window.location.href='home.php'</script>";
}
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

li:hover
{
	background-color: #149f0d;
	border-right: 2px solid white;

}
.btn-box{
	margin-top: 7px;
}
.dropbtn {
  background-color:black;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color:  #149f0d;}

</style>
		
	</head>
	<body>
	
	<nav class="navbar navbar-inverse navbar-fixed-top">
	
				<div class="navbar-header ">
					<div class="container-fluid">
	<div class="row">
	<div>
	<img src="image/head3.jpg" height="200px" width="150%">
	</div>
	</div>
	</div>
				</div>
					
				<ul class="nav navbar-nav">
				
				
					<li><a href="home.php"><span class="glyphicon glyphicon-home"></span><b> Home</b></a></li>
					<li><a href="own_emp_profile.php"><span class="glyphicon glyphicon-user"></span><b>View Profile</b></a></li>
					<li><a href="emp_new_conection.php"><span class="glyphicon glyphicon-copy "></span><b>Connection</b></a></li>
					<li><a href="meter.php"><span class="glyphicon glyphicon-modal-window"></span><b>Meter Allocation</b></a>
   </li>
					<li><a href="meter_reading.php"><span class="glyphicon glyphicon-scale"></span><b>Meter Reading</b></a>
   </li>
   <li><a href="calculate_bill.php"><span class="glyphicon glyphicon-scale"></span><b>calculate Bill</b></a>
   </li>
    <li> <div class="dropdown">
  <button class="dropbtn"><span class="glyphicon glyphicon-list-alt" ></span>Report&nbsp; <span class="glyphicon glyphicon-menu-down" ></span></button>
  <div class="dropdown-content">
    
    <a href="meter_list.php">Meter list</a>
     <a href="con_list.php">consumer list</a>
    <a href="ad_bill_report.php">Bill Report</a>
  </div>
</div></li>

				</ul>
 <ul class="nav navbar-nav navbar-right" style="padding-right: 10px">
     <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span><b>Logout</b></a></li>
      
		</ul>
		</nav>
	
	</body>
	</html>