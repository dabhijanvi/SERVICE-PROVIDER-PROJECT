<?php
	include("connect.php");
	$spd_photo="spd_photo/".$_FILES['spd_photo']['name'];
		move_uploaded_file($_FILES['spd_photo']['tmp_name'],$spd_photo);

	$spd_name=$_POST['spd_name'];
	$sp_cate_id=$_POST['sp_cate_id'];
	$sp_sub_id=$_POST['sp_sub_id'];
	$spd_address=$_POST['spd_address'];
	$spd_city=$_POST['spd_city'];
	$spd_mobile=$_POST['spd_mobile'];
	$spd_pincode=$_POST['spd_pincode'];
	$spd_email=$_POST['spd_email'];
	$spd_password=$_POST['spd_password'];
	$spd_charge=$_POST['spd_charge'];
		$spd_id=$_POST['spd_id'];


	
	$q="update sp_details set spd_photo='$spd_photo',spd_name='$spd_name',sp_cate_id='$sp_cate_id',sp_sub_id='$sp_sub_id',spd_address='$spd_address',spd_city='$spd_city',spd_mobile='$spd_mobile',spd_pincode='$spd_pincode',spd_email='$spd_email',spd_password='$spd_password',spd_charge='$spd_charge' where spd_id='$spd_id'"; 
	
	mysqli_query($cn,$q);
	echo "record saved";
?>