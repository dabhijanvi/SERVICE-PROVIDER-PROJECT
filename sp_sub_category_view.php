  <?php include("aheader.php")?>
  <!-- Contact Start -->
    					<center><h1>SP SUB CATEGORY VIEW</h1></center>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                
                <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light p-5 h-100 d-flex align-items-center">
                        
						
						<table class="table table-bordered">
						<tr>
						<th>ID</th>
						<th>NAME</th>
						<th>DESCRIPTION</th>
						<th>CATE NAME</th>
						<th>EDIT</th>
						<th>DELETE</th>


						
						</tr>
						
						<?php 
						include("connect.php");
						$q="select * from sp_sub_category";
						$res=mysqli_query($cn,$q);
						
						while($row=mysqli_fetch_array($res))
						{
						 ?>
								<tr>						 
							    <td><?php print $row['sp_sub_id'];?></td>
								<td><?php print $row['sp_sub_name'];?></td>
								<td><?php print $row['sp_sub_description'];?></td>
								<td><?php $sp_cate_id=$row['sp_cate_id'];
								$q1="select * from sp_category where sp_cate_id=$sp_cate_id";
								$res1=mysqli_query($cn,$q1);
								if($row1=mysqli_fetch_array($res1))
								{
									print $row1['sp_cate_name'];
								}
								 ?></td>
								<td><img src="<?php print $row['sp_sub_photo'];?>" height="70%" width="70%"></td>
								
								
								
								

								<td><a href="sp_sub_category_editdata.php?sp_sub_id=<?php print $row['sp_sub_id'];?>"class="btn btn-success"><i class="fa fa-edit"></i>EDIT</a></td>
								<td><a href="sp_sub_category_delete_code.php?sp_sub_id=<?php print $row['sp_sub_id'];?>"" class="btn btn-danger"><i class="fa fa-pencil"></i>DELETE</a></td>

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