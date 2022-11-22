<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>form</title>
		<link href="bootstrap\css\bootstrap.css" rel="stylesheet"/>
		<script src="bootstrap/jquery/jquery3.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
<style>

.box{
	height:370px;
	width:700px;
	position: absolute;
	top:55%;
	left:24%;
	border:;
	border-radius:5px;
	background-color:rgba(250, 250, 250,0.5);
	box-shadow:7px 12px 18px #888888;
}
	
.txt{
	color:black;
}	
</style>
</head>
<?php
	include("menu.php");
	?>
	<body style="background-size: cover" background="hh.jpeg">
	
	<center>
	<img src="icon/Users-Administrator-2-icon.png"  width="200" height="200" class="img-circle"style="padding-top: 0"></center>
	<div class="box">
	<form  method="post" action="">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="form-group">
			
				<h3 class="txt"><center><u><b>Division Table</b></u></center></h3><br>
				
				
		
			<div class="form-group">
				<label class="txt"><h4>Division name:</h4></label>
				<input type="text"name="div" class="form-control">
			</div>	
			
			<div class="form-group">
				<label class="txt"><h4>Zone:</h4></label>
				<select class="form-control">
					<option>Select</option>
					<option>Bagaha</option>
					<option>Begusarai</option>
					<option>bettiah</option>
					<option>Chapra(East)/Sonpur</option>
					<option>Chapra(West)/Revalgunj</option>
					<option>Darbhanaga(u)/Laheriasarai</option>
					<option>Forbisganj</option>
					<option>Gopalgunj</option>
					<option>Hajipur</option>
					<option>Katihar</option>
					<option>Khagaria</option>
					<option>Kishanganj</option>
					<option>Madhepura</option>
					<option>Madhubani</option>
					<option>Motihari</option>
					<option>Mujaffarpur(East)</option>
					<option>Mujaffarpur(West)</option>
					<option>Mujaffarpur(Urban-I)</option>
					<option>Mujaffarpur(Urban-II)</option>
					<option>Purnea(W)</option>
					<option>Purnia</option>
					<option>Raxaul</option>
					<option>Saharsa</option>
					<option>Samastipur</option>
					<option>Sitamarhi/Bairagania</option>
					<option>Siwan</option>
					<option>Supaul</option>
					
	
				</select>
			</div>
			
			</div>
			<br><button type="submit"name="b1"class="btn btn-lg btn-primary" value="submit">Submit</button>
			<a href="form-layout3.php" class="btn btn-lg btn-primary">Next</a>
		</div>
		
		</div>
	
	
	
	</form>	
	</div>
		
	</body>
</html>
<?php
include("conn.php");
 if(isset($_POST['b1']))
 {
$div_name=$_POST['div'];

$query="insert into division (div_name) values('$div_name')";
$data=mysql_query($query);
if($data==true)
{
	
	echo"<script>alert('data inserted')</script>";
	echo"<script>window.location.href='division_form.php' </script>";
}
else{
	echo"<script>alert('data not inserted')</script>";
	
}
}
?>