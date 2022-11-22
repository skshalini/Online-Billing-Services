<?php
include("conn.php");
 if isset($_POST(['b1']))
 {
$dept_name=$_POST['t1'];
$query="insert into employee (dept_name) values('$dept_name')";
$data=mysql_query($query);
if($data==true)
{
	
	echo"data inserted";
}
else{
	echo"data not inserted";
	
}
}
 if isset($_POST(['b2']))
 {
$dept_name=$_POST['t1'];
$query="delete from employee where dept_name=$dept_name";
$data=mysql_query($query);
if($data==true)
{
	
	echo"data inserted";
}
else{
	echo"data not inserted";
	
}
}
?>