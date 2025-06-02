<?php include("header.php")?>
  <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                
                <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light p-5 h-100 d-flex align-items-center">
                        <form action="feedback_master_code.php" method="post">
                            
							<center>
							<h1>FEEDBACK_MASTER</h1>
							<div class="row g-3">
                                
								<div class="col-md-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" name="feedback_message" style="height: 150px"></textarea>
                                        <label for="message">LEAVE A MESSAGE HERE</label>
                                    </div>
                                </div>
                               <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="date" class="form-control"  placeholder="date" name="feedback_date">
                                        <label for="name">DATE</label>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="user_id" placeholder="user_id">
                                        <label for="name">ENTER USER ID</label>
                                    </div>
                                </div>
                              
                                
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">SAVE</button>
                                </div>
                            </div>
							</center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

<?php include("footer.php")?>