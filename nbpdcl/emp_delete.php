<?php
include ("conn.php");

$eid=$_REQUEST['id'];
echo "<script>alert('".$eid."') </script>";
$query="update employee_detail set status ='inactive' where emp_id=$eid";
$data=mysql_query($query);
if($data==true)
{
	
	echo"<script>alert('Data Removed successfully!!')</script>";
		echo"<script>window.location.href='emp_detail.php' </script>";
}
else{
	echo"<script>alert('data not removed')</script>";
		echo"<script>window.location.href='emp_detail.php' </script>";
	
}
?>