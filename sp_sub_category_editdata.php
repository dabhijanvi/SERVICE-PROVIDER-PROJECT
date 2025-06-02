<?php include("aheader.php")?>
  <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light p-5 h-100 d-flex align-items-center">
                        <form action="sp_sub_category_editdata_code.php" method="post" enctype="multipart/form-data">
						
						
						<?php 
						include("connect.php");
						$sp_sub_id=$_GET['sp_sub_id'];
						$q="select * from sp_sub_category where sp_sub_id=$sp_sub_id";
						$res=mysqli_query($cn,$q);
						
						if($row=mysqli_fetch_array($res))
						{
						 ?>
						<center><h1>SP_SUB_CATEGORY</h1></center>

                            <div class="row g-3">
                                 <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control"   name="sp_sub_name" value="<?php print $row['sp_sub_name']; ?>">
										 <input type="hidden" class="form-control"   name="sp_sub_id" value="<?php print $row['sp_sub_id']; ?>">

                                        <label for="sp_sub_name">ENTER NAME</label>
                                    </div>
                                </div>
								
								 
								
								
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" style="height: 150px" name="sp_sub_description"></textarea>
                                        <label for="message">DESCRIPTION</label>
                                    </div>
                                </div>
								
                                <div class="col-md-12">
                                    <div class="form-floating">
									<select name="sp_cate_id">
									<option value="0">Select category</option>
									<?php
									include("connect.php");
									$q="select * from sp_category";
									$res=mysqli_query($cn,$q);
									while($row=mysqli_fetch_array($res))
									{
										?>
										<option value="<?php print $row['sp_cate_id'];?>"><?php print $row['sp_cate_name'];?></option>
										<?php
									}
									?>
									
									
									</select>
                                    </div>
                                </div>
                               <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="file" class="form-control" value="<?php print $row['sub_sub_photo'];?>"name="sp_sub_photo">
                                        <label for="sp_name">SP_SUB_PHOTO</label>
                                    </div>
                                </div>
								<?php
						}
						?>
                                <div class="col-md-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">SAVE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

<?php include("footer.php")?>