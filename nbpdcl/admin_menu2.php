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

.dropdown:hover .dropbtn {background-color:#fc0726  ;}

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
  font-size:;
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
	
	
	<nav class="navbar navbar-inverse navbar-fixed-top">
	
				<div class="navbar-header"><div class="container-fluid">
	<div class="row">
	<div>
	<img src="image/head3.jpg" height="130px" width="150%">
	</div>
	</div>
	</div></div>
					
				<ul class="nav navbar-nav">
				
				
<li><a href="admin.php"><span class="glyphicon glyphicon-home"></span><b> Home</b></a></li>
<li><a href="emp_detail.php"><span class="glyphicon glyphicon-user"></span><b>New Employee</b></a></li>

<li><a href="solve_complaint.php"><span class="glyphicon glyphicon-user"></span><b> View Complaint</b></a></li>
     
    <li> <div class="dropdown">
  <button class="dropbtn"><span class="glyphicon glyphicon-list-alt" ></span>&nbsp;Report&nbsp; <span class="glyphicon glyphicon-menu-down" ></span></button>
  <div class="dropdown-content">
    <a href="emp_display.php">All Employees</a>
    <a href="meter_list.php">Meter list</a>
     <a href="con_list.php">consumer list</a>
    <a href="ad_bill_report.php">Bill Report</a>
  </div>
</div></li> 
<li><a href="meter.php"><span class="glyphicon glyphicon-modal-window"></span><b>Meter Allocation</b></a>
   </li>
    </ul>
     <ul class="nav navbar-nav navbar-right" style="padding-right: 10px">
     <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span><b>Logout</b></a></li>
      
		</ul>
		</nav>
		
		<div class="sidebar">
 <h5><b><a href="unit.php">Unit</a></b></h5><hr>
<h5><b>  <a href="fixed_charge.php">Fixed Charge</a><h5><b><hr>
<h5><b>  <a href="company.php">Company</a></h5></b><hr>
<h5><b>  <a href="division.php">Division</a></h5></b><hr>
<h5><b>  <a href="location.php">Location</a></h5></b><hr>
 <h5><b> <a href="desg_form.php">Department &<br> Designation</a></h5></b><hr>
 <h5><b> <a href="ad_new_connection.php">New Connection</a></h5></b>
</div>
	</body>
	</html>