<?php
include("connect.php");

$boooking_id=$_GET['boooking_id'];

$q="delete from booking_master where boooking_id=$boooking_id";


$i=mysqli_query($cn,$q);
if($i==1)
{
	header("location:booking_view.php");
}
else
{
	echo "record not deleted";
}
?>