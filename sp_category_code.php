<?php
	include("connect.php");
	
	$sp_cate_name=$_POST['sp_cate_name'];
	$sp_cate_description=$_POST['sp_cate_description'];
	$sp_photo="sp_photo/".$_FILES['sp_photo']['name'];
	
	
	move_uploaded_file($_FILES['sp_photo']['name'],$sp_photo);
	
	$q="insert into sp_category(sp_cate_name,sp_cate_description,sp_photo)values('$sp_cate_name','$sp_cate_description','$sp_photo')";
	
	mysqli_query($cn,$q);
	echo "record saved";
?>