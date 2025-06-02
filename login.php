<?php include("vheader.php")?>
  <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                
                <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light p-5 h-100 d-flex align-items-center">
                        <form action="login_check.php" method="post">
						<center>
						<h1>LOGIN IN</h1>
						</center>
						<div class="row g-3">
							<div class="col-md-12">
							<div class="form-floating">
									<input type="name" class="form-control" name="username" placeholder="username">
									<label for="name">Enter name</label>
									</div>
									</div>
									<div class="row g-3">
							<div class="col-md-12">
							<div class="form-floating">
									<input type="password" class="form-control" name="password" placeholder="user password">
									<label for="name">Enter password</label>
									</div>
									</div>
									<div class="col-12">
									<div class="form-floating">
									<select name="usertype" class="form-control">
									<option value="none">select user</option>
									<option value="admin">administrator</option>
									<option value="user">user</option>
									

								</select>
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
</div>
<?php include("footer.php")?>
									
									