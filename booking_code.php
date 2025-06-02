  <?php include("rheader.php")?>

<?php
include("connect.php");
$spd_id=$_POST['spd_id'];

$user_id=$_POST['user_id'];

$booking_date=$_POST['booking_date'];

$booking_time=$_POST['booking_time'];

$q="insert into booking_master(spd_id,user_id,booking_date,booking_time)values('$spd_id','$user_id','$booking_date','$booking_time')";
$i=mysqli_query($cn,$q);



if($i==1)
{
	echo "<center><h1><br><br><br><br><br>Thank You For Booking Sucessfully!!!!<br><br><br><br><br></h1></center>";

}
else
{
	echo "<center><h1><b>Thank You For Booking Sucessfully!!!!</b></h1></center>";
}
	
?>
  <?php include("footer.php")?>
