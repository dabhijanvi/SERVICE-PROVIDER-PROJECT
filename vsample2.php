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
			<div class="container">
			<div class="row" data-wow-delay="0.1s">
				           
			<?php 
			include("connect.php");
			$sp_sub_id=$_GET['sp_sub_id'];
			$q="select * from sp_details where sp_sub_id=$sp_sub_id";
		
			$res=mysqli_query($cn,$q);
			while($row=mysqli_fetch_array($res))
			{
			?>
						<div class="col-md-3 bg-light p-4" style="margin:10px;">
                             <div class="bg-light p-4">
                            
                            
                        </div>
							
                            <h4 class="">NAME :- <?php print $row['spd_name'];?></h4>
                            <p>ADDRESS :-<?php print $row['spd_address'];?></p>
                            <p>CITY :-<?php print $row['spd_city'];?></p>
                            <p>PINCODE :-<?php print $row['spd_pincode'];?></p>
                            <p>EMAIL :-<?php print $row['spd_email'];?></p>
                            <p>MOBILE :-<?php print $row['spd_mobile'];?></p>
                            <p>PASSWORD :-<?php print $row['spd_password'];?></p>
                            <p>CHARGE :-<?php print $row['spd_charge'];?></p>
                            <a href="" class="btn bg-white text-primary w-100 mt-2">Read More<i class="fa fa-arrow-right text-secondary ms-2"></i></a>
                        </div>
				<?php
				}				
				?>		
				
                    </div>
                </div>
				</div>
	

    <!-- Service End -->

    
<?php include("footer.php")?>