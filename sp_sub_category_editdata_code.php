<?php
	include("connect.php");
	
	$sp_sub_name=$_POST['sp_sub_name'];
	$sp_sub_description=$_POST['sp_sub_description'];
	$sp_cate_id=$_POST['sp_cate_id'];
	$sp_sub_id=$_POST['sp_sub_id'];
	$sp_sub_photo="sp_sub_photo/".$_FILES['sp_sub_photo']['name'];
		move_uploaded_file($_FILES['sp_sub_photo']['tmp_name'],$sp_sub_photo);



	
	
	
	$q="update sp_sub_category set sp_sub_name='$sp_sub_name',sp_sub_description='$sp_sub_description',sp_sub_photo='$sp_sub_photo',sp_cate_id='$sp_cate_id' where sp_sub_id='$sp_sub_id'";
	
	mysqli_query($cn,$q);
	echo "record saved";
?>