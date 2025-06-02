<?php include("aheader.php")?>
  <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light p-5 h-100 d-flex align-items-center">
                        <form action="sp_sub_category_code.php" method="post" enctype="multipart/form-data">
						<center><h1>SP_SUB_CATEGORY</h1></center>

                            <div class="row g-3">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" placeholder="enter Name" name="sp_sub_name">
                                        <label for="name">ENTER NAME</label>
                                    </div>
                                </div>
								
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="description" style="height: 150px" name="sp_sub_description"></textarea>
                                        <label for="message">DESCRIPTION</label>
                                    </div>
                                </div>
								
                                <div class="col-md-12">
                                    <div class="form-floating">
									<select name="sp_cate_id" class="form-control">
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
                                        <input type="file" class="form-control"  placeholder="category name" name="sp_sub_photo">
                                        <label for="sp_name">SP_SUB_PHOTO</label>
                                    </div>
                                </div>
                                
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