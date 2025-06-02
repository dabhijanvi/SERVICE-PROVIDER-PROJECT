  <?php include("header.php")?>
  <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light p-5 h-100 d-flex align-items-center">
                        <center>
						
						<table class="table table-bordered">
						<tr>
						<th>ID</th>
						<th>NAME</th>
						<th>ADDRESS</th>
						<th>CITY</th>
						<th>PINCODE</th>
						<th>EMAIL</th>
						<th>PASSWORD</th>
						<th>MOBILE</th>
						</tr>
						
						<?php 
						include("connect.php");
						$q="select * from user_master";
						$res=mysqli_query($cn,$q);
						
						while($row=mysqli_fetch_array($res))
						{
						 ?>
								<tr>						 
							    <td><?php print $row['user_id'];?></td>
								<td><?php print $row['user_name'];?></td>
								<td><?php print $row['user_address'];?></td>
								<td><?php print $row['user_city'];?></td>
								<td><?php print $row['user_pincode'];?></td>
								<td><?php print $row['user_email'];?></td>
								<td><?php print $row['user_password'];?></td>
								<td><?php print $row['user_mobile'];?></td>
								</tr>
						<?php		
						}
                        ?>
						</table>
						</center>
						
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

<?php include("footer.php")?>