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
  
  <script type="text/javascript">
        /*function print_page() {
            var ButtonControl = document.getElementById("btnprint");
            var ButtonControl1 = document.getElementById("btngoback");
             var ButtonControl2 = document.getElementById("mon");
             var ButtonControl3 = document.getElementById("ok");
            ButtonControl.style.visibility = "hidden";
             ButtonControl1.style.visibility = "hidden";
             ButtonControl2.style.visibility = "hidden";
             ButtonControl3.style.visibility = "hidden";
            window.print();
            ButtonControl.style.visibility = 'visible';
             ButtonControl1.style.visibility = 'visible';
             ButtonControl2.style.visibility = 'visible';
             ButtonControl3.style.visibility = 'visible';
            
        }*/
    </script>
    <script type="text/javascript">
     
        
        
         function PrintDiv() {
         	var divToPrint = document.getElementById('printarea');
         var popupWin = window.open('', '_blank', 'width=800px,height=900px,location=no,left=200px');
         popupWin.document.open();
         popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
         popupWin.document.close();
     }

        
    </script>

  <style>

.bg-img {
	background-image: url("image/12.jpg");
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
 	color:#1b3d63;

 	 
 }
 .txt{
	color:black;
	margin-left: 10px;
	 	
}
.box{
	
	height:auto;
	width:780px;
	position:absolute;
	top:50%;
	left:10%;
	background-color: white;
	border:2px solid black;
	border-radius:5px;
}
</style>
</head>

	<body style="background-color:#a9c9ef;">

	
		<div style="float: left; padding-left: 10px">
		<a href="emp_home.php"style="text-decoration: none;color: black">		<button type="button" class="btn  btn1"   id="btngoback"  ><span class=" glyphicon glyphicon-circle-arrow-left" style="font-size:16px"><b> GoBack</b></span></button></a>	
		</div>
		<div style="float: right; padding-right: 10px">
  <button type = "button" class="btn  btn1"  id = "btnprint"  onclick = "PrintDiv()"><span class=" glyphicon glyphicon-print" style="font-size:16px "><b> Print</b></span></button>
	</div>
	
	<div class="container" style="">
	<br>
	<div class="row">
	<div class="col-sm-2"></div>
	
	<div class="col-sm-2">
	
	</div>
	<br>
	 </div></div>
	 	
	
	<div class="row"><div class="col-sm-2" style="padding: 20px">
		<form action="" method="post">
	<div class="form-group">
		
				<label class="txt"></label>
				<select  class="form-control" name="mon" id="mon">
				<option >Choose Month</option>
					<option value="Jan">Jan</option>
					<option value="Feb">Feb</option>
					<option value="Mar">Mar</option>
					<option value="Apr">Apr</option>
					<option value="May">May</option>
					<option value="Jun">Jun</option>
					<option value="Jul">Jul</option>
					<option value="Aug">Aug</option>
					<option value="Sep">Sep</option>
				    <option value="Oct">Oct</option>
				    <option value="Nov">Nov</option>
				    <option value="Dec">Dec</option>
			</select>		
			</div><input type="submit" name="b1" value="Search" class="btn btn-info" id="ok"/>
			 </form>
	</div>
	<div id="printarea">
	<div class="col-sm-8">
	<div class="box">
	<div class="container-fluid "  style="background-color:#468fa2; padding-top:0px">
		<font face="stencil" color="white" ><h1 align="center">Meter Reading Report</h1> </font>
		
		</div>
		<table class="table  table-responsive "  align="center" height="200px" width="300px"  cellpadding="10px" cellspacing="50px" style="margin-left: px;" align="center">
	
	
		<thead>
		
	<tr class=" th1">
		<th  height="50px"><center>Consumer Id</center></th><th><center>Month Bill</center></th><th><center>Unit</center></th><th><center>Entry Date</center></th>
	</tr>
	</thead>

<?php
$mon="";
if(isset($_POST['b1']))
	{
	$mon=$_POST['mon'];	
	
	echo"<script>alert('".$mon."')</script>";
}
$query1="select * from meter_reading where month_bill like'$mon%'" ;
$record1=mysql_query($query1);
while($data1=mysql_fetch_array($record1))
{
	?>
<tbody>
<tr class="bg-img">

	<td  align="center" style="padding: 10px" ><font color="#1b3d63" size="4"><?php echo $data1[0];?></font></td>
	<td align="center" style="padding: 10px"><font color="#1b3d63" size="4"  ><?php echo $data1[1];?></font></td>
	<td align="center" style="padding: 10px"><font color="#1b3d63" size="4" ><?php echo $data1[2];?></font></td>
	<td align="center" style="padding: 10px"><font color="#1b3d63" size="4" ><?php echo $data1[3];?></font></td>
	
	
</tr>
</tbody>
<?php
}?>

</table></div></div></div>
<div class="col-sm-2"></div>
</div>
        	
	</body>
</html>
