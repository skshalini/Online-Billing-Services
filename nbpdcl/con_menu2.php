<?php
session_start();
if(isset($_SESSION['con_id']))
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
</style>
	
	</head>
	<body>
		<nav class="navbar navbar-inverse">
	
				<div class="navbar-header">
					<div class="container-fluid">
	<div class="row">
	<div>
	<img src="image/hd2.jpg" height="130px" width="1350px">
	</div>
	</div>
	</div>
				</div>
					
				<ul class="nav navbar-nav">
				
				
<li><a href="con_home.php"><span class="glyphicon glyphicon-home"></span><b> Home</b></a></li>
<li><a href="con_profile.php"><span class="glyphicon glyphicon-user"></span><b> Profile</b></a></li>
<li><a href="show_bill.php"><span class="glyphicon glyphicon-list-alt"></span><b> Show Bill</b></a></li>

				
				

      
     <li><a href="cod_pay.php"><span class="glyphicon glyphicon-phone"></span><b> Quick Pay</b></a></li>

			</ul>
			<ul class="nav navbar-nav navbar-right">
			<li><a href="complaint.php"><span class="glyphicon glyphicon-comment" ></span><b style="padding-right: 20px"> Complaint</b></a></li>		 <li><a href="see_status.php"><span class="glyphicon glyphicon-duplicate"></span><b> complaint status</b></a></li>	

				<li><a href="logout.php"><span class="glyphicon glyphicon-off"></span><b style="padding-right: 20px"> Logout</b></a></li></ul>
		</nav>

	</body>
</html>