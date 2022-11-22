<?php
include ("conn.php");

$cid=$_REQUEST['can_id'];
echo "<script>alert('".$cid."') </script>";
$query="update new_connection set status_2 ='inactive' where con_id=$cid";
$data=mysql_query($query);
if($data==true)
{
	
	echo"<script>alert('Data has been deleted!!')</script>";
		echo"<script>window.location.href='new_conection.php' </script>";
}
else{
	echo"<script>alert('data has not been')</script>";
		echo"<script>window.location.href='new_conection.php' </script>";
	
}
?>