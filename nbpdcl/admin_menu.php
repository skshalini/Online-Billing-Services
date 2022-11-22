<?php
session_start();
if(isset($_SESSION['adminid']))
{
	
}
else{
	echo"<script> window.location.href='home.php'</script>";
}
?>
<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<title></title>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
		
	<script src="bootstrap/jquery/jquery3.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	
	
	<style>
	body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top:28.5%;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 18px;
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
.mySlides {display:none;}

li:hover
{
	background-color:#fc0726;
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
.dropbtn:hover {
	background-color:#fc0726;
		border-right: 2px solid white;
		color:white;
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

.dropdown:hover .dropbtn {background-color:  #fc0726;}

.sidebar {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top:28%;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 0px;
}

.sidebar a {
  padding: 2px 2px 2px 16px;
  text-decoration: none;
 
  color: #818181;
  display: block;
}
.head{
	position:fixed;
}
.sidebar a:hover {
  color: #f1f1f1;
}


@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}

</style>
		
	</head>
	<body>
	
	
	<nav class="navbar navbar-inverse ">
	
				<div class="navbar-header"><div class="container-fluid">
	<div class="row">
	<div>
	<img src="image/hd2.jpg" height=130px" width="1350px">
	</div>
	</div>
	</div></div>
					
				<ul class="nav navbar-nav">
	
  
 <li> <a href="#"><span style="font-size:20px;cursor:pointer;color: white" onclick="openNav()">&#9776; </span></a></li>
			
				
<li><a href="admin.php"><span class="glyphicon glyphicon-home"></span><b> Home</b></a></li>
<li><a href="emp_detail.php"><span class="glyphicon glyphicon-user"></span><b>New Employee</b></a></li>
<li> <a href="approve_list.php"><span class="glyphicon glyphicon-check"></span><b>Approve Connection</b></a></li>
<li><a href="solve_complaint.php"><span class="glyphicon glyphicon-comment"></span><b> View Complaint</b></a></li>

     
     
    <li> <div class="dropdown">
  <button class="dropbtn" ><span class="glyphicon glyphicon-list-alt" ></span><b>&nbsp;Report&nbsp; </b><span class="glyphicon glyphicon-menu-down" ></span></button>
  <div class="dropdown-content">
    <a href="emp_list.php">Employee list</a>
    <a href="emp_display.php">Employee Profile</a>
     <a href="ad_consumer_list.php">consumer list</a>
     <a href="ad_con_list.php">consumer Profile</a>
    <a href="ad_meter_list.php">Meter list</a>
    <a href="ad_reading_list.php">Reading list</a>
    <a href="ad_bill_report.php">Bill Report</a>
       <a href="ad_complaint_report.php">Complaint Report</a>
  </div>
</div></li> 

   
    </ul>
     <ul class="nav navbar-nav navbar-right">
     <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> <b style="padding-right: 40px">Logout</b></a></li>
      
		</ul>
		
		
	<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="unit.php">connection type</a>
  <a href="fixed_charge.php">Fixed Charge</a>
  <a href="company.php">Company</a>
  <a href="division.php">Division</a>
   <a href="location.php">Location</a>
  <a href="desg_form.php">Department & Designtion</a>
   <a href="meter.php">Meter Allocation</a>
</div>

  
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.3)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
   
</nav>
	</body>
	</html>