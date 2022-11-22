<html>
<head>
<title>JobPortal</title>
<script type="text/javascript">
function togglemenu()
{
	document.getElementById('sidebar').classList.toggle('active');
}
</script>

<style>
*{
	margin:0;
	padding:0;
}

#sidebar{
position: fixed;
left: -12%;
width:30%
height:20px;
background-color: black;
}

#sidebar li{
	color:white;
	font-size: 25px;
	padding:30px;
	border-bottom: 1px solid gray;
	text-align:center;
}
#sidebar li:hover{
	color: #ffffff;
}
.toggle-btn{
	position: absolute;
	left: 105%;
	top:-50px;
}

.toggle-btn span{
	display: block;
	background-color: black;
	width:30px;
	height: 5px;
	margin:3px;
	}
#sidebar.active{
	left: 0;
}

</style>
</head>
<body>
<div id="sidebar" onclick="togglemenu()">
	<div class="toggle-btn">
		<span></span>
		<span></span>
		<span></span>
						
	</div>
	<ul>
		<li><a href="question.php">Question</a></li>
		<li><a href="area.php">Area</a></li>
		<li><a href="category.php">Category</a></li>
		<li><a href="city.php">City</a></li>
		<li><a href="state.php">State</a></li>
		<li><a href="country.php">Country</a></li>
	</ul>
</div>
</body>
</html>