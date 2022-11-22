<html>
<body>
<table>
	<tr>
		<th>applicant_name</th>	
		<th>email</th>
		
	</tr>
	<?php
	include("conn.php");
	$query="select * from new_connection";
	$record=mysql_query($query);
	while($data=mysql_fetch_array($record))
	{
		?>
<tr>
	<td><?php echo $data[4];?></td>
	<td><?php echo $data[13];?></td>
	
	
</tr>
<?php
}
	?>

</table>
</body>
</html>