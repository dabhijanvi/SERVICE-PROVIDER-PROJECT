  <?php include("rheader.php")?><br><br><br>
  <!-- Contact Start -->
                  <h3 class="mb-5"><center>FEEDBACK VIEW</center></h3>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                
                <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light p-5 h-100 d-flex align-items-center">
                        
						
						<table class="table table-bordered">
						<tr>
						<th>ID</th>
						<th>MESSAGE</th>
						<th>DATE</th>
						<th> USER ID</th>
						
						</tr>
						
						<?php 
						include("connect.php");
						$q="select * from feedback_master";
						$res=mysqli_query($cn,$q);
						
						while($row=mysqli_fetch_array($res))
						{
						 ?>
								<tr>						 
							    <td><?php print $row['feedback_id'];?></td>
								<td><?php print $row['feedback_message'];?></td>
								<td><?php print $row['feedback_date'];?></td>
								<td><?php $user_id=$row['user_id'];
								$q1="select * from user_master where user_id=$user_id";
								$res1=mysqli_query($cn,$q1);
								if($row1=mysqli_fetch_array($res1))
								{
									print $row1['user_name'];
								}
								 ?></td>
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