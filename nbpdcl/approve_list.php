<?php
include("conn.php");
include("admin_menu.php")
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Request_connection</title>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
		<script src="bootstrap/jquery/jquery3.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	
	</head>
	<body >
	<div class="row" style="background-color: #7493e4;">
		<h1><font color="white" face="Eras Bold ITC"><u><center><b>Requests For New Connection</b></center></u></font></h1>
	</div>
	<form method="post" action="" enctype="multipart/form-data">
	<table class="">
		<table class="table table-bordered tab">
		<thead style="background-color: #7493e4">
	<tr>
		<th><center>consumer-id</center></th><th><center>Applicant name</center></th><th></th>
	</tr>
	</thead>
		<?php
$query="select * from new_connection where status_2='inactive'";
$record=mysql_query($query);
while($data=mysql_fetch_array($record))
{
	?>
<tbody>
<tr>
	<td><center><?php echo $data[0];?></center></td>
	<td><center><?php echo $data[4];?></center></td>
	<td><center><a href="approve_connection.php?id=<?php echo $data[0];?>" class="btn btn-md btn-primary">View Details</a></center></td>
</tr>
</tbody>
<?php
}?>
</table></table>
			
				</form>
				<?php
		include("footer.php");
		?>
		</body>
</html>
<?php
$dt=date('d/M/y');
?>












