<?php
include("connect.php");

$sp_cate_id=$_GET['sp_cate_id'];

$q="delete from sp_category where sp_cate_id=$sp_cate_id";


$i=mysqli_query($cn,$q);
if($i==1)
{
	header("location:sp_category_view.php");


}
else
{
	echo "record not deleted";
}
?>
