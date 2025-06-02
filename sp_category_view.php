  <?php include("aheader.php")?>
  <!-- Contact Start -->
  					<center><h1>SP CATEGORY VIEW</h1></center>

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
						<th>PHOTO</th>
						<th>EDIT</th>
						<th>DELETE</th>
						
						</tr>
						
						<?php 
						include("connect.php");
						$q="select * from sp_category";
						$res=mysqli_query($cn,$q);
						
						while($row=mysqli_fetch_array($res))
						{
						 ?>
								<tr>						 
							    <td><?php print $row['sp_cate_id'];?></td>
								<td><?php print $row['sp_cate_name'];?></td>
								<td><?php print $row['sp_cate_description'];?></td>
								<td><img src="<?php print $row['sp_photo'];?>"height="70%" width="70%"></td>
								<td><a href="sp_category_editdata.php?sp_cate_id=<?php print $row['sp_cate_id'];?>"class="btn btn-success"><i class="fa fa-edit"></i>EDIT</a></td>
								
								<td><a href="sp_category_delete_code.php?sp_cate_id=<?php print $row['sp_cate_id'];?>" class="btn btn-danger"><i class="fa fa-pencil"></i>DELETE</a></td>
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