  <?php include("aheader.php")?>
  <!-- Contact Start -->
    					<center><h1>BOOKING VIEW</h1></center>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                
                <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light p-5 h-100 d-flex align-items-center">
                        
						
						<table class="table table-bordered">
						<tr>
						<th>ID</th>
						<th>USER ID</th>
						<th>SPD ID</th>
						<th>BOOKING TIME</th>
						<th>BOOKING AMOUNT</th>
						<th>BOOKING DATE</th>
                        <th>DELETE</th>
						

						
						</tr>
						
						<?php 
						include("connect.php");
						$q="select * from booking_master";
						$res=mysqli_query($cn,$q);
						
						while($row=mysqli_fetch_array($res))
						{
						 ?>
								<tr>			
							    <td><?php print $row['boooking_id'];?></td>

							    
								<td><?php $user_id=$row['user_id'];
								$q1="select * from user_master where user_id=$user_id";
								$res1=mysqli_query($cn,$q1);
								if($row1=mysqli_fetch_array($res1))
								{
									print $row1['user_name'];
								}
								 ?></td>
							    <td><?php print $row['spd_id'];?></td>
							    <td><?php print $row['booking_time'];?></td>
							    <td><?php print $row['booking_amount'];?></td>
							    <td><?php print $row['booking_date'];?></td>
							    
								
								<td><a href="booking_delete_code.php?boooking_id=<?php print $row['boooking_id'];?>" class="btn btn-danger"><i class="fa fa-pencil"></i>DELETE</a></td>

								</tr>
						<?php		
						}
                        ?>
						</table>
						
						
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

<?php include("footer.php")?>