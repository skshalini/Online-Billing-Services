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
	background-color: #fc0726;
	border-right: 2px solid white;

}
.btn-box{
	margin-top: 7px;
}
.dropbtn {
  background-color:#232325;
  color: white;
  padding: 16px;
  font-size: 14px;
  border: none;
    color:#a2a4aa;
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

.dropdown:hover .dropbtn {background-color:   #fc0726;}

</style>
		
	</head>
	<body>
	
	<nav class="navbar navbar-inverse ">
	
				<div class="navbar-header ">
					<div class="container-fluid">
	<div class="row">
	<div>
	<img src="image/hd2.jpg" height=130px" width="1350px">
	</div>
	</div>
	</div>
				</div>
					
				<ul class="nav navbar-nav">
				
				
					<li><a href="emp_home.php"><span class="glyphicon glyphicon-home"></span><b> Home</b></a></li>
					<li><a href="own_emp_profile.php"><span class="glyphicon glyphicon-user"></span> <b>View Profile</b></a></li>
					
					
					<li><a href="meter_reading.php"><span class="glyphicon glyphicon-scale"></span> <b>Meter Reading</b></a>
   </li>
   <li><a href="calculate_bill.php"><span class="glyphicon glyphicon-scale"></span> <b>calculate Bill</b></a>
   </li>
    <li> <div class="dropdown">
  <button class="dropbtn"><span class="glyphicon glyphicon-list-alt" ></span><b>&nbsp;Report&nbsp;</b><span class="glyphicon glyphicon-menu-down" ></span></button>
  <div class="dropdown-content">
    <a href="emp_consumer_list.php">consumer list</a>
    <a href="con_list.php">consumer Profile</a>
    <a href="meter_list.php">Meter list</a>
    <a href="reading_list.php">Reading list</a>
    <a href="emp_bill_report.php">Bill Report</a>
  </div>
</div></li>

				</ul>
 <ul class="nav navbar-nav navbar-right" style="padding-right: 10px">
     <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> <b style="padding-right: 40px">Logout</b></a></li>
      
		</ul>
		</nav>
	
	</body>
	</html>