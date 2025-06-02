<?php
	include("connect.php");
	
	$user_id=$_POST['user_id'];
	$spd_id=$_POST['spd_id'];
	$booking_day=$_POST['booking_day'];
	$booking_time=$_POST['booking_time'];
	$booking_amount=$_POST['booking_amount'];
	$booking_date=$_POST['booking_date'];

	
	
	
	$q="insert into booking_master(user_id,spd_id,booking_day,booking_time,booking_amount,booking_date)values('$user_id','$spd_id','$booking_day','$booking_time','$booking_amount','$booking_date')";
	
	
	mysqli_query($cn,$q);
	echo "record saved";
?>