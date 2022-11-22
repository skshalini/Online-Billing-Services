 
 <?php
include("home_head.php");
include("static_menu.php");
include("conn.php");
?>
<!DOCTYPE html>
 <html>
	<head>
		    
		<title></title>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
		<script src="bootstrap/jquery/jquery3.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
		<style>
		
			
	
	.bg-img1 {
	background-image: url('image/c.jpg');
	height: 350px;
	background-position: center;
	background-size: cover;
	position: relative;
	bottom: 0;
	opacity: 0.9;
	margin-top: -20px;
}

.bg-img {
	background-image: url('image/l.jpg');
	height: 550px;
	background-position: center;
	background-size: cover;
	position: relative;
	bottom: 0;
	opacity: 0.9;
}
	
.content {
	background:rgb(245,245,245);
	position: absolute;
	background: rgba(245,245,245,0.6);
	color:black;
	width: 100%;
	padding: 20px;
	
}
.content1 {
	background: rgb(0,7,6)
	position: absolute;
	background: rgba(0,0,0,0.1);
	color:white;
	width: 100%;
	padding: 50px;
	
}
.btn1
{
	width: 100px;
	height: 40px;
	background-color:#CD5C5C;
	border:black;
	border-radius:5px;
}
.btn1:hover
{
background-color:#FF7F50;	
}

.mid
{
	height: 60px;
	width: 100%;
	text-align: center;
    padding-top:2px;
	background-color: #df7c1a;
}


</style>
</head>
<body >


	<div class="bg-img1" >
	
	</div>
	
		<div class="bg-img" style="padding-top: 40px">
		<div class="container" >
		<div class="col-sm-6"   style="padding-left: 40px" > 
		<div class="content">
		<form method="post">
		<div class="form-group">
		<h1>Get In Touch</h1>
		<h5>please fill out the quick form and we will be in touch with lightening speed</h5><br>
		
		<label><b>Name:</b></label>
		<input type="text" class="form-control" name="name" placeholder="Name" required>
		</div>
		<div class="form-group">
		<label><b>Email Id:</b></label>
		<input type="email" class="form-control"name="email" placeholder="Your Email id" required>	
		</div>
		<div class="form-group">
		<label><b>Message:</b></label>
		<textarea rows="3"  class="form-control" placeholder="Message" required  name="msg"></textarea>
		</div>	
		<div class="form-group">
			<h5><button type="submit" class="btn1"  value="SUBMIT" name="b1"><b>SUBMIT</b></button></h5>
			</div>
			</form>
			</div>
		</div>
		<div class="col-sm-6"  style="padding-left: 40px"  >
		<div class="content1">
		<h2>Connect with us:</h2>
		<h5>For support or any question:<br>Email us at <a href="nbpdcl.northbiharbills.org"> nbpdcl.northbiharbills.org</a></h5>
		<br>
	
		<h3>North Bihar Power Distribution Company Ltd.  </h3>
		<h5><span class="glyphicon glyphicon-map-marker" style="color:red" ></span> 3rd Floor,Vidyut Bhawan,Bailey Road,Patna 800001 <br><br> &nbsp;<span class="glyphicon glyphicon-envelope" style="color:#b4010a"></span> Email:-<a href=" md.nbpdcl@gmail.com"> md.nbpdcl@gmail.com </a></h5>
		<br>
		<h3>Call Us <span class="glyphicon glyphicon-earphone" style="color:#36a5c9" ></span> </h3>
		<h5>Toll Free Helpline Number : 1912</h5>
		</div>
			</div>

		</div>
		<br>
		<div class="row">
		<div class="col-sm-12">
			<div class="mid">
			<h2><span class="glyphicon  glyphicon-map-marker" style="color:#ca0000" ></span> Where to find me?</h2>	
			</div>
		</div> 
		</div>
		<div class="row">
		<div class="col-sm-12">
			<div class="google_map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3597.816845324166!2d85.12746691430134!3d25.61100168370536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed5840d652e8cf%3A0xd2570ab1bbeab998!2sVidyut+Bhawan!5e0!3m2!1sen!2sin!4v1562520354701!5m2!1sen!2sin" width="100%" height="400" frameborder="0" style="border:0; position:absolute;" allowfullscreen></iframe> 
			</div>
		</div>	
		</div>
		
		</div>	
	</body>
</html> 
 <?php
  if(isset($_POST['b1']))
 {
$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['msg'];
$query="insert into contact_us (name,email,msg) values('$name','$email','$msg')";
$data=mysql_query($query);
if($data==true)
{
	
	echo"<script>alert('data inserted')</script>";
}
else{
	
	echo"<script>alert('data not inserted')</script>";
}
}
?>