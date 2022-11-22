<html>
<body>
<table>
	<tr>
		<th>dept-id</th>	
		<th>department-name</th>
		
	</tr>
	<?php
	include("conn.php");
	$query="select * from dept_form";
	$record=mysql_query($query);
	while($data=mysql_fetch_array($record))
	{
		?>
<tr>
	<td><?php echo $data[0];?></td>
	<td><?php echo $data[1];?></td>
	
	
</tr>
<?php
}
	?>

</table>
</body>
</html>