<?php include("aheader.php")?>
  <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light p-5 h-100 d-flex align-items-center">
                        <form action="sp_category_editdata_code.php" method="post" enctype="multipart/form-data">
						<?php
						include("connect.php");
						$sp_cate_id=$_GET['sp_cate_id'];
						$q="select * from sp_category where sp_cate_id=$sp_cate_id";
						$res=mysqli_query($cn,$q);
						if($row=mysqli_fetch_array($res))
						{
							?>
						
						
						<center><h1>SP_CATEGORY</h1></center>

                            <div class="row g-3">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control"   name="sp_cate_name" value="<?php print $row['sp_cate_name']; ?>">
										 <input type="hidden" class="form-control"   name="sp_cate_id" value="<?php print $row['sp_cate_id']; ?>">

                                        <label for="sp_cate_name">ENTER NAME</label>
                                    </div>
                                </div>
								 
                               
                               
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="sp_cate_description" style="height: 150px"><?php print $row['sp_cate_description'];?></textarea>
                                        <label for="message">DESCRIPTION</label>
                                    </div>
                                </div>
								 <div class="col-md-12">
                                        <input type="file" class="form-control" name="sp_photo" value="<?php print $row['sp_photo'];?>">
                                        <label for="name">ENTER PHOTO</label>
                                    </div>
                                </div>
								<?php

						}
							
								?>
								
								
                                <div class="col-md-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">UPDATE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

