<?php include("aheader.php")?>
<div class="row">

            
                 <div class="col-md-3 col-sm-3 col-xs-6">
				 <?php 
				 include("connect.php");
				 $q="select * from sp_category";
				 $res=mysqli_query($cn,$q);
				 $total_row=mysqli_num_rows($res);
				 ?>
                      <div class="alert alert-info back-widget-set text-center">
                            <i class="fa fa-history fa-5x"></i>
							<?php echo $total_row."<br><br>CATEGORY";?>
                            
                        </div>
                    </div>
              <div class="col-md-3 col-sm-3 col-xs-6">
			  <?php 
				 include("connect.php");
				 $q="select * from sp_sub_category";
				 $res=mysqli_query($cn,$q);
				 $total_row=mysqli_num_rows($res);
				 ?>
                      <div class="alert alert-success back-widget-set text-center">
                            <i class="fa fa-history fa-5x"></i>
                                                        <?php echo $total_row."<br><br>SUBCATEGORY";?>

                        </div>
                    </div>
               <div class="col-md-3 col-sm-3 col-xs-6">
			   <?php 
				 include("connect.php");
				 $q="select * from sp_details";
				 $res=mysqli_query($cn,$q);
				 $total_row=mysqli_num_rows($res);
				 ?>
                      <div class="alert alert-warning back-widget-set text-center">
                            <i class="fa fa-recycle fa-5x"></i>
                                                                                    <?php echo $total_row."<br><br>DETAILS";?>

                        </div>
                    </div>
               <div class="col-md-3 col-sm-3 col-xs-6">
			   <?php 
				 include("connect.php");
				 $q="select * from feedback_master";
				 $res=mysqli_query($cn,$q);
				 $total_row=mysqli_num_rows($res);
				 ?>
                      <div class="alert alert-danger back-widget-set text-center">
                            <i class="fa fa-briefcase fa-5x"></i>
                                                                                                                <?php echo $total_row."<br><br>FEEDBACK";?>

                        </div>
                    </div>
					<div class="col-md-3 col-sm-3 col-xs-6">
					 <?php 
				 include("connect.php");
				 $q="select * from booking_master";
				 $res=mysqli_query($cn,$q);
				 $total_row=mysqli_num_rows($res);
				 ?>
                      <div class="alert alert-danger back-widget-set text-center">
                            <i class="fa fa-briefcase fa-5x"></i>
                                                                                                                                            <?php echo $total_row."<br><br>BOOKING";?>

                        </div>
                    </div>
					<div class="col-md-3 col-sm-3 col-xs-6">
					<?php 
				 include("connect.php");
				 $q="select * from user_master";
				 $res=mysqli_query($cn,$q);
				 $total_row=mysqli_num_rows($res);
				 ?>
					
                      <div class="alert alert-warning back-widget-set text-center">
                            <i class="fa fa-recycle fa-5x"></i>
                                                                                                                                                                             <?php echo $total_row."<br><br>USER";?>

                        </div>
                    </div>
					<div class="col-md-3 col-sm-3 col-xs-6">
			   <?php 
				 include("connect.php");
				 $q="select * from admin_login";
				 $res=mysqli_query($cn,$q);
				 $total_row=mysqli_num_rows($res);
				 ?>
                      <div class="alert alert-danger back-widget-set text-center">
                            <i class="fa fa-briefcase fa-5x"></i>
                                                                                                                <?php echo $total_row."<br><br>ADMIN";?>

                        </div>
                    </div>
					
					
					 <div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-info back-widget-set text-center">
                            <i class="fa fa-history fa-5x"></i>
                            <h3>500+&nbsp; <i class="fa fa-dollar"></i></h3>
                           Amount Pending For Approval
                        </div>
                    </div>
					

        </div>              
             
<?php include("footer.php")?>

