<?php
include ("conn.php");

$cid=$_REQUEST['can_id'];
echo "<script>alert('".$cid."') </script>";
$query="update new_connection set status_2 ='inactive' where con_id=$cid";
$data=mysql_query($query);
if($data==true)
{
	
	echo"<script>alert('Data Removed successfully!!')</script>";
		echo"<script>window.location.href='ad_new_connection.php' </script>";
}
else{
	echo"<script>alert('data not removed')</script>";
		echo"<script>window.location.href='ad_new_connection.php' </script>";
	
}
?>