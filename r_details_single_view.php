<?php include("rheader.php")?>


<!-- Service Start -->
    <div class="container-fluid py-5 px-4 px-lg-0">
        <div class="row g-0">
            <div class="col-md-12 col-lg-4">
                <div class="ms-lg-5 ps-lg-5">
                    <center>
					<div class="text-center text-lg-start wow fadeInUp" data-wow-delay="0.1s">
                        
						<h6 class="text-secondary text-uppercase">SERVICE PROVIDER</h6>
                        <h1 class="mb-4">DETAILS</h1>
                    </div>
					</center> 
				</div>
			</div>
		</div>
	</div>	
<div class="container">
<?php 
include("connect.php");
$spd_id=$_GET['spd_id'];
$q="select * from sp_details where spd_id=$spd_id";
		
$res=mysqli_query($cn,$q);
if($row=mysqli_fetch_array($res))
{
?>
<div class="row">
<div class="col-md-4">
<img class="img-fluid" style="height:300px; width:100%;" src="<?php print $row['spd_photo'];?>" alt="">
</div>
<div class="col-md-4" >
<h4 class="" style="text-transform:uppercase;font-weight:bold;"><?php print $row['spd_name'];?></h4>
                            <p><b>ADDRESS :</b><?php print $row['spd_address'];?></p>
                            <p><b>CITY :</b><?php print $row['spd_city'];?></p>
                            <p><b>PINCODE :</b><?php print $row['spd_pincode'];?></p>
                            <p><b>EMAIL :</b><?php print $row['spd_email'];?></p>
                            <p><b>MOBILE :</b><?php print $row['spd_mobile'];?></p>
                            <p><b>CHARGE :</b><?php print $row['spd_charge'];?>/Rs.</p>
                          
</div>
<div class="col-md-4" style="padding-bottom:20px;">
<h4>Booking Details</h4>
<form action="booking_code.php" method="post">
<label>Select Booking Day</label>

<input class="form-control" type="hidden" name="spd_id" value="<?php print $row['spd_id'];?>">
<input class="form-control" type="hidden" name="spd_charge" value="<?php print $row['spd_charge'];?>">
<input class="form-control" type="hidden" name="user_id" value="<?php print $user_id;?>">
<input style="margin-bottom:20px;" class="form-control" type="date" name="booking_date">


<label>Select Booking Time</label>
<input style="margin-bottom:20px;" class="form-control" type="time" name="booking_time">
<button  type="submit" class="btn btn-primary	 w-100 mt-2">Book Now</button>
</form>                       
</div>
</div>
<?php
}
?>
</div>
				
	

    <!-- Service End -->

    
<?php include("footer.php")?>