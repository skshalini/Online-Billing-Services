<?php
include("conn.php");
?>
<html>
	<body>
	<form method="post" action="">
		<select class="form-control" name="con_type">
				<option>select</option>
					<?php
				$query="select * from unit";
				$record=mysql_query($query);
				while($data=mysql_fetch_array($record))
				{
					?>
				<option value="<?php echo $data[0];?>"><?php echo $data[0];?></option>
				<?php
				}?>
					
				
				</select>
				<input type="submit" name="b1">
				</form>
	</body>
</html>
<?php
 if(isset($_POST['b1']))
 {
$con_type=$_POST['con_type'];
//$unit=$_POST['unit'];
$query="insert into demo (demo) values('$con_type')";
$data=mysql_query($query);
if($data==true)
{
	
	echo"<script>alert('data inserted')</script>";
	//echo"<script>window.location.href='d.php' </script>";
}
else{
	echo"<script>alert('data not inserted')</script>";
	
}
}
?>