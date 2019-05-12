
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>CALM | Student</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $fetch['firstname'];?>&nbsp;<?php echo $fetch['middlename'];?>&nbsp;<?php echo $fetch['lastname'];?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="st_dashboard.php">My Class</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Lessons <span class="fa fa-chevron-down"></span></a>
                   
				   <ul class="nav child_menu">
						 <?php 
								$query = mysqli_query($conn, "SELECT * FROM `unit`") or die(mysqli_error());
								while($fetch = mysqli_fetch_array($query))
								{
										$id = $fetch['unit_id'];
										$unit = $fetch['unit_number'];
										$title = $fetch['unit_title'];
								
							?>
                      <li><a href="st_lesson_unit.php?unit_number=<?php echo $unit;?>"><?php echo $unit;?></a></li> 
							<?php }?>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-tasks"></i> Attempt Tasks <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="st_at_quiz.php">Quiz</a></li>
					  	  <li><a href="st_at_examination.php">Examination</a></li>
						  <li><a href="st_at_assignment.php">Assignment</a></li>
                      <!--  <li><a href="st_at_activity.php">Activity</a></li>
					  <li><a href="st_at_test.php">Test</a></li>
				
					  <li><a href="st_at_assignment.php">Assignment</a></li>-->
                    </ul>
                  </li>
                  <li><a><i class="fa fa-suitcase"></i> File Bag <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="st_fb_upload_files.php">Upload Files</a></li>
                      <li><a href="chartjs2.html">Bin</a></li>
                    </ul>
                  </li>
				  <!-- <li><a><i class="fa fa-comments-o"></i> Messages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">Upload Files</a></li>
                      <li><a href="chartjs2.html">Bin</a></li>
                    </ul>
                  </li> -->
				  <li><a><i class="fa fa-trophy"></i> Achievements <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="st_ach_badges.php">Badges</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-calendar"></i> School Calendar <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="st_school_calendar.php">What's New?</a></li>
                    </ul>
                  </li>
                  <li><a data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-gamepad"></i> Mathjestic Quest </a> 
                 
                  </li>
                </ul>
              </div>
              <!-- <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-info"></i> About Us <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="contacts.html">Contacts</a></li>
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                      <li><a href="page_404.html">404 Error</a></li>
                      <li><a href="page_500.html">500 Error</a></li>
                      <li><a href="plain_page.html">Plain Page</a></li>
                      <li><a href="login.html">Login Page</a></li>
                      <li><a href="pricing_tables.html">Pricing Tables</a></li>
                    </ul>
                  </li>                 
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div> -->

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
    
            <!-- /menu footer buttons -->
          </div>
        </div>
        