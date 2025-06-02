 <?php include("vheader.php")?>
  <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                
                <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light p-5 h-100 d-flex align-items-center">
                        <form action="booking_details_code.php" method="post">
						<center><h1>BOOKING_DETAILS</h1></center>
                            <div class="row g-3">
                               
							   <div class="col-md-12">
                                    <div class="form-floating">
									<select name="user_id" class="form-control">
									<option value="0">Select user</option>
									<?php
									include("connect.php");
									$q="select * from user_master";
									$res=mysqli_query($cn,$q);
									while($row=mysqli_fetch_array($res))
									{
										?>
										<option value="<?php print $row['user_id'];?>"><?php print $row['user_name'];?></option>
										<?php
									}
									?>
									
									
									</select>
                                    </div>
                                </div>
								
								
								 <div class="col-md-12">
                                    <div class="form-floating">
									<select name="spd_id" class="form-control">
									<option value="0">Select details</option>
									<?php
									include("connect.php");
									$q="select * from sp_details";
									$res=mysqli_query($cn,$q);
									while($row=mysqli_fetch_array($res))
									{
										?>
										<option value="<?php print $row['spd_id'];?>"><?php print $row['spd_name'];?></option>
										<?php
									}
									?>
									
									
									</select>
                                    </div>
                                </div>
								
								
								
								
								<div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="booking_day"  placeholder="booking day" >
                                        <label for="name">BOOKING DAYS</label>
                                    </div>
                                </div>
								
								<div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="booking_time"  placeholder="booking time" >
                                        <label for="name">BOOKING TIME</label>
                                    </div>
                                </div>
								
								<div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="booking_amount"  placeholder="booking amount" >
                                        <label for="name">BOOKING AMOUNT</label>
                                    </div>
                                </div>
								
								<div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="booking_date"  placeholder="booking date" >
                                        <label for="name">BOOKING DATE</label>
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