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
						<div class="col-md-3 bg-light p-4" style="margin:10px;text-transform:capitalize;">
                            <div class="bg-light p-4" style="">
                            <img class="img-fluid" style="height:250px; width:100%;" src="<?php print $row['spd_photo'];?>" alt="">
							</div>
							
                            <h4 class=""><?php print $row['spd_name'];?></h4>
                            <p><b>CITY :</b><?php print $row['spd_city'];?></p>
                            <p><b>CHARGE :</b><?php print $row['spd_charge'];?></p>
                            <a href="r_details_single_view.php?spd_id=<?php print $row['spd_id'];?>" class="btn bg-white text-primary w-100 mt-2">More Detail<i class="fa fa-arrow-right text-secondary ms-2"></i></a>
                        </div>
				<?php
				}				
				?>		
				
                    </div>
                </div>
				</div>
	

    <!-- Service End -->

    
<?php include("footer.php")?>