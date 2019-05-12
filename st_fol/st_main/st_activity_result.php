<!-- header content -->
 <?php include ("include/st_header.php");
 ?>
 <!-- header content -->
  <body class="nav-md footer_fixed">
    <?php
	$id = (int) $_SESSION['st_id'];
    $query = mysqli_query ($conn, "SELECT * FROM usr_student WHERE st_id = '$id' ") or die (mysqli_error());
    $fetch = mysqli_fetch_array ($query);
    ?>
    <div class="container body">
      <div class="main_container">
	    <!-- sidebar content -->
        <?php include ("include/st_sidebar.php");
        ?>
		<!-- sidebar content -->
        <!-- top navigation -->
        <?php include ("include/st_navigation.php");
        ?>
        <!-- /top navigation -->
			
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3></h3>
              </div>
 
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Results</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
				  
					<div class="x_content">
					<div class="col-md-4 col-sm-12 col-xs-12"> 
					</div>
					<div class="col-md-4 col-sm-12 col-xs-12">
					    <?php 
						$activityid=$_GET['activity_id'];
						$query = mysqli_query ($conn, "SELECT * FROM ct_activity_records WHERE student = '$id' and activity_id='$activityid';") or die (mysqli_error());
						$fetch = mysqli_fetch_array ($query);
						?>
                          <div class="pricing">
                            <div class="title">
                              <h1><?php echo $fetch['score'];?>/<?php echo $fetch['items'];?></h1>
                               
                            </div>
                            <div class="x_content">
                              <div class="">
                                <div class="pricing_features">
                                  <ul class="list-unstyled text-left">
                                  <li style="font-size:20px;"><i class="fa fa-check text-success"></i> Score <strong> <?php echo $fetch['score'];?> </strong></li>
                                  <li style="font-size:20px;"><i class="fa fa-check text-success"></i> Total Items <strong> <?php echo $fetch['items'];?> </strong></li>
                               </ul>
                                </div>
                              </div> 
                            </div>
                          </div>
                        </div>
							<div class="col-md-4 col-sm-12 col-xs-12"> 
					</div>
                  </div>
				  

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
		
        <!-- /page content -->	
        <!-- footer content -->
        <?php include ("include/st_footer.php");
        ?>
        <!-- /footer content -->
      </div>
    </div>
    <!-- script content -->
    <?php include ("include/st_script.php"); ?>
    <!-- /script content -->
  </body>
</html>