<?php include("vheader.php")?>
    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">SERVICE PROVIDER</h6>
                <h1 class="mb-5">SUBCATEGORIES</h1>
            </div>
            <div class="row g-4">
			<?php
			include("connect.php");
			$sp_cate_id=$_GET['sp_cate_id'];
			$q="select * from sp_sub_category where sp_cate_id=$sp_cate_id";
			$res=mysqli_query($cn,$q);
			while($row=mysqli_fetch_array($res))
			{
				?>
			
               
               
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
						<a href="v_details_view.php?sp_sub_id=<?php print $row['sp_sub_id'];?>">
						
                            <img class="img-fluid" style="height:250px; width:100%;" src="<?php print $row['sp_sub_photo'];?>" alt="">
						</a>
                        </div>
						<div class="team-text">
						<div class="bg-light">
						<h5 class="fw-bold mb-0"><?php print $row['sp_sub_name'];?></h5>
						
						<small>service provider</small>
						</div>
						</div>
                       
                    </div>
                </div>
               
			<?php
			}
			?>
            </div>
        </div>
    </div>
    <!-- Team End -->
	<?php include("footer.php")?>
