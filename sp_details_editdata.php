<?php include("header.php")?>
  <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                
                <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light p-5 h-100 d-flex align-items-center">
                        <form action="sp_details_editdata_code.php" method="post" enctype="multipart/form-data">
						<?php
						include("connect.php");
						$spd_id=$_GET['spd_id'];
						$q="select * from sp_details where spd_id=$spd_id";
						$res=mysqli_query($cn,$q);
						if($row=mysqli_fetch_array($res))
						{
							?>
							<center><h1>SP_DETAILS_EDITDATA</h1></center>

                            <div class="row g-3">
							
							<div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="file" class="form-control" value="<?php print $row['sud_photo'];?>"name="spd_photo">
                                        <label for="sp_name">SPD_PHOTO</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-floating">
                                        <input type="text" class="form-control"   name="spd_name" value="<?php print $row['spd_name']; ?>">
										 <input type="hidden" class="form-control"   name="spd_id" value="<?php print $row['spd_id']; ?>">

                                        <label for="spd_name">SPD_NAME</label>
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
									while($row1=mysqli_fetch_array($res))
									{
										?>
										<option value="<?php print $row1['sp_cate_id'];?>"><?php print $row1['sp_cate_name'];?></option>
										<?php
									}
									?>
									
									
									</select>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-floating">
                                        <select name="sp_sub_id" class="form-control">
									<option value="0">Select sub category name</option>
									<?php
									include("connect.php");
									$q="select * from sp_sub_category";
									$res=mysqli_query($cn,$q);
									while($row2=mysqli_fetch_array($res))
									{
										?>
										<option value="<?php print $row2['sp_sub_id'];?>"><?php print $row2['sp_sub_name'];?></option>
										<?php
									}
									?>
									
									
									</select>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="spd_address"  style="height: 150x"><?php print $row['spd_address'];?></textarea>
                                        <label for="spd_address">ENTER ADDRESS</label>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="spd_city" value="<?php print $row['spd_city'];?>">
                                        <label for="name">ENTER CITY</label>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="spd_mobile" value="<?php print $row['spd_mobile'];?>">
                                        <label for="name">ENTER MOBILE</label>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="spd_pincode" value="<?php print $row['spd_pincode'];?>">
                                        <label for="name">ENTER PINCODE</label>
                                    </div>
                                </div>
								 <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" name="spd_email"value="<?php print $row['spd_email'];?>">
                                        <label for="email">YOUR E-MAIL</label>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="spd_password" value="<?php print $row['spd_password'];?>">
                                        <label for="name">ENTER PASSWORD</label>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="spd_charge" value="<?php print $row['spd_charge'];?>">
                                        <label for="name">ENTER CHARGE</label>
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

<?php include("footer.php")?>