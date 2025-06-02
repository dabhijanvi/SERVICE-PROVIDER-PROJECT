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
		



	$q="insert into sp_details (spd_photo,spd_name,sp_cate_id,sp_sub_id,spd_address,spd_city,spd_mobile,spd_pincode,spd_email,spd_password,spd_charge)values('$spd_photo''$spd_name','$sp_cate_id','$sp_sub_id','$spd_address','$spd_city','$spd_mobile','$spd_pincode','$spd_email','$spd_password','$spd_charge')"; 
	
	mysqli_query($cn,$q);
	echo "record saved";
?>