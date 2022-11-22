<?php
include("conn.php");
include("admin_menu.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Employee List</title>
		<link href="bootstrap\css\bootstrap.css" rel="stylesheet"/>
		<script src="bootstrap/jquery/jquery3.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  
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
.box{
	
	height:auto;
	width:auto;
	position: relative;
	border:2px solid black;
	left:90px;
		} 

</style>
</head>
	<body style="background-size: cover;background-color:#f8f885;">
	<br>
	<div style="float: left; padding-left: 10px">
		<a href="admin.php"style="text-decoration: none;color: black"><button type="button" class="btn  btn1"   id="btngoback"  ><span class=" glyphicon glyphicon-circle-arrow-left" style="font-size:16px"><b> GoBack</b></span></button></a>	
		</div>
		<div style="float: right; padding-right: 10px">
  <button type = "button" class="btn  btn1"  id = "btnprint"  onclick = "PrintDiv()"><span class=" glyphicon glyphicon-print" style="font-size:16px "><b> Print</b></span></button>
	</div><br>
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
	<div id="printarea">
	 <table class="table" border="2px" style="position: absolute;left:80px">
<tr  style="background-color: white;"><td colspan="6">
		<div class="container-fluid "  style="background-color:#468fa2; padding-top:50px ;width:100%">
		<font face="stencil" color="white" ><h1 align="center">NORTH BIHAR POWER DISTRIBUTION COMPANY LIMITED COMPANY</h1 > </font>
		
		</div>
		</td></tr>
		<tr style="background-color: #93bb80">
		<td colspan="6">
			<div class="container-fluid "  style="padding-top: ;width:100%">
		<font face="algebrian" color="black" ><h2 align="center">COMPLAINT REPORT</h2 > </font>
		
		</div>
		</td>
		</tr>
	<tr style="background-color: white;">
		<th>Complaint Id</th><th>Complaint Date</th><th>Category</th><th>Consumer Id</th><th>Description</th><th>Status</th>
		</tr>.
		<?php
$query="select * from complaint" ;
$record=mysql_query($query);
while($data=mysql_fetch_array($record))
{
	?>
<tbody>
<tr class="table text-capitalize table-responsive" style="padding: 20px">
	<td align="center" ><?php echo $data[0];?></td>
	<td align="center"><?php echo $data[1];?></td>
	<td align="center"><?php echo $data[2];?></td>
	<td align="center"><?php echo $data[3];?></td>
	<td align="center"><?php echo $data[4];?></td>
	<td align="center"><?php echo $data[5];?></td>
</tr>
</tbody>
<?php
}?>
</table>
     </div>   
	</div>
	
	<div class="col-sm-2"></div>
	</body>

	
</html>
