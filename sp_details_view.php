  <?php include("aheader.php")?>
  <!-- Contact Start -->
    					<center><h1>SP DETAILS VIEW</h1></center>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                
                <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light p-5 h-100 d-flex align-items-center">
                        
						
						<table class="table table-bordered">
						<tr>
						
						<th>ID</th>
			<th>			PHOTO</th>
						<th>NAME</th>
						<th>CATE NAME</th>
						<th>SUB NAME</th>
						<th>ADDRESS</th>
						<th>CITY</th>
						<th>PINCODE</th>
						<th>EMAIL</th>
						<th>MOBILE</th>
						<th>PASSWORD</th>
						<th>CHARGE</th>
						<th>EDIT</th>					
						<th>DELETE</th>



						</tr>
						
						<?php 
						include("connect.php");
						$q="select * from sp_details";
						$res=mysqli_query($cn,$q);
						
						while($row=mysqli_fetch_array($res))
						{
						 ?>
								<tr>
								
							    <td><?php print $row['spd_id'];?></td>
																<td><img src="<?php print $row['spd_photo'];?>" height="70%" width="70%"></td>

								<td><?php print $row['spd_name'];?></td>
								<td><?php $sp_cate_id=$row['sp_cate_id'];
								$q1="select * from sp_category where sp_cate_id=$sp_cate_id";
								$res1=mysqli_query($cn,$q1);
								if($row1=mysqli_fetch_array($res1))
								{
									print $row1['sp_cate_name'];
								}
								 ?></td>
								<td><?php $sp_sub_id=$row['sp_sub_id'];
								$q1="select * from sp_sub_category where sp_sub_id=$sp_sub_id";
								$res1=mysqli_query($cn,$q1);
								if($row1=mysqli_fetch_array($res1))
								{
									print $row1['sp_sub_name'];
								}
								 ?></td>

								<td><?php print $row['spd_address'];?></td>
								<td><?php print $row['spd_city'];?></td>
								<td><?php print $row['spd_pincode'];?></td>
								<td><?php print $row['spd_email'];?></td>
								<td><?php print $row['spd_mobile'];?></td>

								<td><?php print $row['spd_password'];?></td>
								<td><?php print $row['spd_charge'];?></td>
								<td><a href="sp_details_editdata.php?spd_id=<?php print $row['spd_id'];?>"class="btn btn-success"><i class="fa fa-edit"></i>EDIT</a></td>
								<td><a href="sp_details_delete_code.php?spd_id=<?php print $row['spd_id'];?>" class="btn btn-danger"><i class="fa fa-pencil"></i>DELETE</a></td>

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