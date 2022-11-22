<?php
include("conn.php");
include("admin_menu.php");
$GLOBALS['cid']=$_REQUEST['id'];
	
	$query1="select * from new_connection where con_id=".$GLOBALS['cid']."";
	$record1=mysql_query($query1);
	$data1=mysql_fetch_array($record1);	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
		<script src="bootstrap/jquery/jquery3.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	</head>
	<body>
		`<div class="row"style="margin-top: -80px">
	
	<form method="post" action="" enctype="multipart/form-data"><br><br>
		<div class="col-sm-4">
			<img src="image/zz.jpeg"   width="420" height="1500" class="img-rectangle" >
		</div>
		<div class="col-sm-7">
		
		<h1><b><u>New Connection Info</u></b></h1><br>
		<div class="form-group">
				<label class="txt">Email :</label>
			<input type="email"name="email" class="form-control"  value="<?php echo $data1[13];?>"></div>
			
		<div class="form-group">
				<label class="txt">Connection type :</label>
				<select class="form-control" name="type" value="">
				<option><?php echo $data1[1];?></option>
					<?php
					$query="select * from unit";
					$record=mysql_query($query);
					while($data=mysql_fetch_array($record))
					{
						?>
					<option><?php echo $data[0];?></option>
					<?php
					}	?>
				</select>
				</div>
				<div class="form-group">
				<label class="txt">Unit :</label>
				<input type="number"name="unit" class="form-control" value="<?php echo $data1[2];?>"></div>
				<div class="form-group">
				<label class="txt">Division :</label>
				<select class="form-control" name="div" value="">
				<option><?php echo $data1[3];?></option>
					<?php
					$query2="select * from division";
					$record2=mysql_query($query2);
					while($data2=mysql_fetch_array($record2))
					{
						?>
					<option><?php echo $data2[1];?></option>
					<?php }?>
				</select>
			</div>
			<div class="form-group">
				<label class="txt">Consumer id :</label>
			<input type="text"name="con_id" class="form-control" readonly value="<?php echo $GLOBALS['cid'];?>"></div>
			<div class="form-group">
				<label class="txt">Applicant name :</label>
			<input type="text"name="appl_name" class="form-control"pattern="{2,}+" value="<?php echo $data1[4];?>"></div>
			<div class="form-group">
				<label class="txt">Father's name :</label>
			<input type="text"name="fhname" class="form-control"pattern="{2,}+" value="<?php echo $data1[5];?>"></div>
			<div class="form-group">
				<label class="txt">Occupation :</label>
			<input type="text"name="occupation" class="form-control"pattern="[A-Za-z]{2,}" value="<?php echo $data1[8];?>"></div>
			<div class="form-group">
				<label class="txt">City/Village name :</label>
			<input type="text"name="city" class="form-control"pattern="[A-Za-z]{2,}" value="<?php echo $data1[9];?>"></div>
			<div class="form-group">
				<label class="txt">Street no. :</label>
			<input type="text"name="street" class="form-control" pattern="[0-9A-Za-z]{1,}"value="<?php echo $data1[10];?>"></div>
			<div class="form-group">
				<label class="txt">Plot/Flat no. :</label>
			<input type="number"name="plot" class="form-control" pattern="[0-9A-Za-z]{1,}"value="<?php echo $data1[11];?>"></div>
			<div class="form-group">
				<label class="txt">Pin code :</label>
			<input type="number"name="pin" class="form-control" pattern="[0-9]{6}" value="<?php echo $data1[12];?>"></div>
			
			<div class="form-group">
				<label class="txt">mobile no. :</label>
			<input type="number"name="num" class="form-control" pattern="[0-9]{10,12}"value="<?php echo $data1[14];?>"></div>
			<div class="form-group">
				<label for="image" class="txt">Photo :</label><br>
				<img src="<?php echo $data1[15];?>" id="output" height="200px" width="200px"><br><br>
				<input type="file"name="img1"class="form-control"placeholder="file not choosen" accept="image/*" onchange="loadfile(event)">
					<script>
					var loadfile=function(event){
						var output=document.getElementById('output');
				output.src=URL.createObjectURL(event.target.files[0]);
					};
				</script>
				<?php
				$GLOBALS['pic']=$data1[15]
				?>
				</div>
			<div class="form-group">
				<label class="txt">District :</label>
				<select class="form-control" name="district" value="">
				<option><?php echo $data1[20];?></option>
					<option>Bagaha</option>
					<option>Begusarai</option>
					<option>Bettiah</option> 
					<option>Chapra(East)/Sonpur</option>
					<option>Chapra(West)/Revalgunj</option>
					<option>Darbhanaga(U)/Laheriasarai</option>
					<option>Forbisganj</option>
					<option>Gopalgunj</option>
					<option>Hajipur</option>
					<option>Katihar</option>
					<option>Khagaria</option>
					<option>Kishanganj</option>
					<option>Madherpura</option>
					<option>Motihari</option>
					<option>Muzaffarpur(East)</option>
					<option>Muzaffarpur(West)</option>
					<option>Muzaffarpur(Urban-1)</option>
					<option>Muzaffarpur(Urban-2)</option>
					<option>Purnea(W)</option>
					<option>Raxaul</option>
					<option>Saharsa</option>
					<option>Samastipur</option>
					<option>Sitamarhi/Bairagania</option>
					<option>Siwan</option>
					<option>Supaul</option>
				 
				</select>
			</div>
			<center><button type="submit"name="b1"class="btn btn-lg btn-primary" value="submit">update</button></center>

			
			</div>
			</form>
			</div>
	</body>
	
</html>
<?php
if(isset($_POST['b1']))
 {
 	$con_type=$_POST['type'];	
$unit=$_POST['unit'];
$division=$_POST['div'];
$applicant_name=$_POST['appl_name'];
$fhname=$_POST['fhname'];
$occupation=$_POST['occupation'];
$city_vill_name=$_POST['city'];
$street_no=$_POST['street'];
$plot_flat_no=$_POST['plot'];
$pin_code=$_POST['pin'];
$email=$_POST['email'];
$mob_no=$_POST['num'];
$ft1=$_FILES['img1']['tmp_name'];
$fn1=$_FILES['img1']['name'];
$fpath1="con_pic/".$fn1;
move_uploaded_file($ft1,$fpath1);
$district=$_POST['district'];
if($fn1=="")
{
	$fpath1=$GLOBALS['pic'];
	$query2="update new_connection set con_type='$con_type',unit_1='$unit',division_1='$division',applicant_name='$applicant_name',fh_name='$fhname',occupation='$occupation',city_vill_name='$city_vill_name',street_no='$street_no',pin_code='$pin_code',email='$email',mob_no='$mob_no',photo='$fpath1' where con_id=".$GLOBALS['cid']."" ;
$data2=mysql_query($query2);
if($data2==true)
{
	
	echo"<script>alert('Updated successfully!!')</script>";
	echo"<script>window.location.href='admin.php' </script>";
}
else{
	echo"<script>alert('Not Updated!')</script>";
	echo"<script>window.location.href='admin.php' </script>";
	
}
}
else{
$query="update new_connection set con_type='$con_type',unit_1='$unit',division_1='$division',applicant_name='$applicant_name',fh_name='$fhname',occupation='$occupation',city_vill_name='$city_vill_name',street_no='$street_no',pin_code='$pin_code',email='$email',mob_no='$mob_no',photo='$fpath1' where con_id=".$GLOBALS['cid']."" ;
$data=mysql_query($query);
if($data==true)
{
	
	echo"<script>alert('Updated Successfully!!')</script>";
	echo"<script>window.location.href='admin.php' </script>";
}
else{
	echo"<script>alert('Not Updated!!')</script>";
	echo"<script>window.location.href='admin.php' </script>";
	
}
}
}
?>