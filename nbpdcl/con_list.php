<?php
include("conn.php");
include("emp_menu.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>form</title>
		<link href="bootstrap\css\bootstrap.css" rel="stylesheet"/>
		<script src="bootstrap/jquery/jquery3.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  
 

 
<style>
.bg-img {
	background-image: url(image/12.jpg);
	min-height:150px;
	width:70%;
	background-position: center;
	background-size:cover;
	position: relative;
	padding:0;
	
	}
	.btn1
{
	width: 120px;
	height: 40px;
	background-color:#818398;
	border:black;
	border-radius:5px;
	font-color:white;
	margin-left: 10px;
}
.btn1:hover
{
background-color:#afbfc5;	
}

 .th1{
 
 	font-size: 20px;
 	color: white;
 	
 }

</style>
</head>
	<body style="background-color:#a9c9ef;">
	<div class="container-fluid "  style="background-color:#468fa2; padding-top:0px">
		<font face="stencil" color="white" ><h1 align="center">New Connection Report</h1 > </font>
		
		</div>
		<br>
		<div style="float: left; padding-left: 10px">
		<a href="emp_home.php"style="text-decoration: none;color: black">		<button type="button" class="btn  btn1"   id="btngoback"  ><span class=" glyphicon glyphicon-circle-arrow-left" style="font-size:16px"><b> GoBack</b></span></button></a>	
		</div>
		<br>
	<div class="container" style="padding: 20px">
 <br>
	 <table class="bg-img" align="center" cellpadding="10px" cellspacing="10px"   >
	
	
		<thead>
	<tr class="th1" >
		<th><center>Consumer id</center></th><th><center>Applicant name</center></th><th></th>
		</tr>
	</thead>
		<?php
$query="select * from new_connection where status_2='active'" ;
$record=mysql_query($query);
while($data=mysql_fetch_array($record))
{
	?>
<tbody>
<tr class="table text-capitalize table-responsive" >
	<td align="center" style="padding-left: 10px" ><font color="white" size="4"><?php echo $data[0];?></font></td>
	<td align="center" style="padding-left: 10px" ><font color="white" size="4"><?php echo $data[4];?></font></td>
	<td align="center" style="padding: 10px"><a href="con_list_profile.php?id=<?php echo $data[0];?>" class="btn btn-md btn-warning" >view profile</a></td>
</tr>
</tbody>
<?php
}?>
</table>
        
	</div>
	
	
</body>	
</html>
