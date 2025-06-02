<?php
	include("connect.php");
	
	$feedback_message=$_POST['feedback_message'];
	$feedback_date=$_POST['feedback_date'];
	$user_id=$_POST['user_id'];
	
	$q="insert into feedback_master(feedback_message,feedback_date,user_id)value('$feedback_message','$feedback_date','$user_id')";
	
	mysqli_query($cn,$q);
	echo "record saved";
?>