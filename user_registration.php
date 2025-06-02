 <?php include("vheader.php")?>
  <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                
                <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light p-5 h-100 d-flex align-items-center">
                        <form action="user_registration_code.php" method="post">
						<center><h1>USER_REGISTRATION</h1></center>
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="user_name" placeholder="user name" >
                                        <label for="name">USER NAME</label>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="user_address" placeholder="usera ddress"  style="height: 150px"></textarea>
                                        <label for="message">USER ADDRESS</label>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control"  name="user_city"placeholder="user city" >
                                        <label for="name">USER CITY</label>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control"  name="user_pincode" placeholder="user pincode" >
                                        <label for="name">USER PINCODE</label>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" name="user_email"  placeholder="user email" >
                                        <label for="name">USER EMAIL</label>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="password" class="form-control"   name="user_password" placeholder="user password" >
                                        <label for="name">USER PASSWORD</label>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="user_mobile"  placeholder="user mobile" >
                                        <label for="name">USER MOBILE</label>
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