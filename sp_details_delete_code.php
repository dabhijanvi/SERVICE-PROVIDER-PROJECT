<?php
include("connect.php");

$spd_id=$_GET['spd_id'];

$q="delete from sp_details where spd_id=$spd_id";


$i=mysqli_query($cn,$q);
if($i==1)
{
	header("location:sp_details_view.php");


}
else
{
	echo "record not deleted";
}
?>
