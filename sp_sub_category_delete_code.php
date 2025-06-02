<?php
include("connect.php");

$sp_sub_id=$_GET['sp_sub_id'];

$q="delete from sp_sub_category where sp_sub_id=$sp_sub_id";


$i=mysqli_query($cn,$q);
if($i==1)
{
	header("location:sp_sub_category_view.php");
}
else
{
	echo "record not deleted";
}
?>