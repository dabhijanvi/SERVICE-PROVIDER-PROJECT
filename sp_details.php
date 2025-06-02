<?php include("aheader.php")?>
  <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light p-5 h-100 d-flex align-items-center">
                        <form action="sp_details_code.php" method="post"  enctype="multipart/form-data">
							<center><h1>SP_DETAILS</h1></center>

                            <div class="row g-3">
							
							<div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="file" class="form-control"  placeholder="category name" name="spd_photo">
                                        <label for="sp_name">SPD_PHOTO</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="spd_name" placeholder="Enter Name">
                                        <label for="name">ENTER NAME</label>
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
                                        <select name="sp_sub_id" class="form-control">
									<option value="0">Select sub category </option>
									<?php
									include("connect.php");
									$q="select * from sp_sub_category";
									$res=mysqli_query($cn,$q);
									while($row=mysqli_fetch_array($res))
									{
										?>
										<option value="<?php print $row['sp_sub_id'];?>"><?php print $row['sp_sub_name'];?></option>
										<?php
									}
									?>
									
									
									</select>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="spd_address" placeholder="Enter Address" style="height: 150x"></textarea>
                                        <label for="message">ENTER ADDRESS</label>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="spd_city" placeholder="Enter City">
                                        <label for="name">ENTER CITY</label>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="spd_mobile" placeholder="Enter Mobile">
                                        <label for="name">ENTER MOBILE</label>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="spd_pincode" placeholder="Enter Pincode">
                                        <label for="name">ENTER PINCODE</label>
                                    </div>
                                </div>
								 <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="email" class="form-control"  placeholder="Enter your email" name="spd_email">
                                        <label for="email">YOUR E-MAIL</label>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="spd_password" placeholder="Enter password">
                                        <label for="name">ENTER PASSWORD</label>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="spd_charge" placeholder="Enter charge">
                                        <label for="name">ENTER CHARGE</label>
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