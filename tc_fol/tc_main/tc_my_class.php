<!-- header content -->
 <?php include ("include/tc_header.php");
 ?>
 <!-- header content -->
  <body class="nav-md footer_fixed">
    <?php
	$id = (int) $_SESSION['tc_id'];
    $query = mysqli_query ($conn, "SELECT * FROM usr_teacher WHERE tc_id = '$id' ") or die (mysqli_error());
    $fetch = mysqli_fetch_array ($query);
    ?>
    <div class="container body">
      <div class="main_container">
	    <!-- sidebar content -->
        <?php include ("include/tc_sidebar.php");
        ?>
		<!-- sidebar content -->
        <!-- top navigation -->
        <?php include ("include/tc_navigation.php");
        ?>
        <!-- /top navigation -->
	
        <div class="right_col" role="main">
			
		<!-------------------------------------------------------------------------------------------------------------------------------------------->
        <!-- page content -->
		
       <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <button type="button" class="btn btn-default btn-xs"><i class="fa fa-home"></i><a href="index.php"> Home</a></button>
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
				  
				  <center><img src="../images/pces_logo_text.png" alt="img" width="435px" height="35px" ></center>
					<center><h2>Grade 6 Sections<small> </small></h2> 
					<br>
					

                    <div class="row"> 
							<?php 
								$query = mysqli_query($conn, "SELECT * FROM `clm_section` where adviser='".$_SESSION['tc_id']."';") or die(mysqli_error());
								while($fetch = mysqli_fetch_array($query))
								{
										$secid = $fetch['section_id'];
										$sname = $fetch['section_name'];
								
							?>					
						<div class="col-md-55"> 
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="images/media.jpg" alt="image">
                            <div class="mask">
                              <p>Mon - Fri, 7:30-8:30 am</p>
                              <div class="tools tools-bottom"> 
                                <a href="tc_student.php?section_id=<?php echo $secid;?>"><i class="fa fa-eye"></i></a> 
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p>Grade 6  <?php echo $sname;?></p>
                          </div>
                        </div> 
                      </div>
								<?php } ?>
           
               
                    </div>
                  </div>
                </div>
              </div>
            </div>
		  
     
		
        <!-- /page content -->
		<!-------------------------------------------------------------------------------------------------------------------------------------------->
		   </div>
		
		
        <!-- footer content -->
        <?php include ("include/tc_footer.php");
        ?>
        <!-- /footer content -->
      </div>
    </div>
    <!-- script content -->
    <?php include ("include/tc_script.php");
    ?>
    <!-- /script content -->
  </body>
</html>