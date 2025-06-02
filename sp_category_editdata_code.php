<?php
	include("connect.php");
	
	$sp_cate_name=$_POST['sp_cate_name'];
	$sp_cate_description=$_POST['sp_cate_description'];
	$sp_photo="sp_photo/".$_FILES['sp_photo']['name'];
	$sp_cate_id=$_POST['sp_cate_id'];
	
	
	
	move_uploaded_file($_FILES['sp_photo']['name'],$sp_photo);
	
	$q="update sp_category set sp_cate_name='$sp_cate_name',sp_cate_description='$sp_cate_description',sp_photo='$sp_photo' where sp_cate_id='$sp_cate_id'";
	print($q);
	mysqli_query($cn,$q);
	echo "record saved";
	?>