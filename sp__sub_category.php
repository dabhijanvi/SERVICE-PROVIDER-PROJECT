<?php include("header.php")?>
  <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light p-5 h-100 d-flex align-items-center">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" placeholder="enter Name" name="sp_sub_name">
                                        <label for="name">ENTER NAME</label>
                                    </div>
                                </div>
								
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="sp_cate_id" placeholder="enter your id">
                                        <label for="email">ENTER YOUR ID</label>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="description" style="height: 150px" name="sp_sub_description"></textarea>
                                        <label for="message">DESCRIPTION</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
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