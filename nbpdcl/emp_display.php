<?php
include("conn.php");
include("admin_menu.php");
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
  
 <script type="text/javascript">
        function print_page() {
            var ButtonControl = document.getElementById("btnprint");
            var ButtonControl1 = document.getElementById("btngoback");
             var ButtonControl2 = document.getElementById("view");
            ButtonControl.style.visibility = "hidden";
             ButtonControl1.style.visibility = "hidden";
             ButtonControl2.style.visibility = "hidden";
            window.print();
            ButtonControl.style.visibility = 'visible';
             ButtonControl1.style.visibility = 'visible';
             ButtonControl2.style.visibility = 'visible';
            
        }
    </script>
    
<style>
.box{
	
	height:auto;
	width:auto;
	position: absolute;
	left:10%;
	border:;
	border-radius:5px;
	background-color:rgba(250, 250, 250,0.5);
	box-shadow:7px 12px 18px #888888;
	
}
.footer {
  background-color: #060609;
  color: #ffffff;
  text-align: center;
  font-size: 15px;
  padding: 15px;
  height: 80px;
  bottom:10px;
  width: 100%;
}
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

	<body style="background-size: cover;background-color:#a9c9ef">
	
		<div class="container-fluid "  style="background-color:#468fa2; padding-top:0px">
		<font face="stencil" color="white" ><h1 align="center">Employee List</h1 > </font>
		
		</div><br>
	<div style="float: left; padding-left: 10px">
		<a href="admin.php"style="text-decoration: none;color: black">		<button type="button" class="btn  btn1"   id="btngoback"  ><span class=" glyphicon glyphicon-circle-arrow-left" style="font-size:16px"><b> GoBack</b></span></button></a>	
		</div>
	<br><br><br>
	<div class="container">
	
	 <table class="bg-img" align="center" cellpadding="10px" cellspacing="30px">
		<thead>
	<tr class="th1" align="center">
		<th><center>Emp-id</center></th><th><center>Employee name</center></th><th><center>Designation</center></th><th><center>Department</center></th><th></th>
	</tr>
	</thead>
		<?php
$query="select * from employee_detail where status='active'" ;
$record=mysql_query($query);
while($data=mysql_fetch_array($record))
{
	?>
<tbody>
<tr class="table text-capitalize table-responsive">
	<td align="center" style="padding-left: 10px"> <font color="white" size="4"><?php echo $data[0];?></font></td>
	<td align="center" style="padding-left: 10px"><font color="white" size="4"><?php echo $data[2];?></font></td>
	
	<td align="center" style="padding-left: 10px"><font color="white" size="4"><?php echo $data[13];?></font></td>
	<td align="center" style="padding-left: 10px"><font color="white" size="4"><?php echo $data[12];?></font></td>
	<td id="view" align="center" style="padding: 10px"><a href="profile.php?id=<?php echo $data[0];?>" class="btn btn-md btn-warning" >view</a></td>
</tr>
</tbody>
<?php
}?>
</table>
        	</div>
        		
        	</body>
</html>
