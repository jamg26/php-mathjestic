       	 <?php  			 
			$querys = mysqli_query ($conn, "SELECT * FROM `clm_quarter` WHERE `quarter_status`='Current Quarter';") or die (mysqli_error());
			$fetchs = mysqli_fetch_array ($querys);
			$karun_na_quarter = $fetchs['quarter'];
			?>
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><img src="../images/calm-logo.png" alt="img" width="50px" height="50px" > <span>CALM | Teacher</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/profile/<?php echo $fetch['profile_img'];?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $fetch['firstname'];?>&nbsp;<?php echo $fetch['middlename'];?>&nbsp;<?php echo $fetch['lastname'];?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />
			<?php 
			$querys = mysqli_query ($conn, "SELECT * FROM clm_section WHERE adviser = '$id' ") or die (mysqli_error());
			$row = mysqli_fetch_array ($querys);
			?>
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
					  <li><a href="tc_dashboard.php">Dashboard</a></li>
                      <li><a href="tc_my_class.php">My Class</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Daily Lesson Log <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tc_dll_viewer.php">DLL Viewer</a></li>
                      <li><a href="tc_dll_calendar_schedule.php">Calendar Schedule</a></li>
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
                      <li><a href="tc_lesson_unit.php?unit_number=<?php echo $unit;?>"><?php echo $unit;?></a></li> 
							<?php }?>
                      <li><a href="tc_lesson_resources.php">Resources</a></li> 
                      <li><a href="tc_add_unit.php">Add unit</a></li>
					  
                    </ul>
					
                  </li>
				  
                  <li><a><i class="fa fa-tasks"></i> Create Tasks <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tc_ct_quiz.php">Quiz</a></li> 
					  <li><a href="tc_ct_examination.php">Examination</a></li>
					  <li><a href="tc_ct_assignment.php">Assignment</a></li>
					  <li><a href="tc_ct_generate.php">Generate Code</a></li>
					  
                      <!--li><a href="tc_ct_activity.php">Activity</a></li>
					  <li><a href="tc_ct_test.php">Test</a></li>
					  <li><a href="tc_ct_assignment.php">Assignment</a></li-->
					  
                    </ul>
                  </li>
                  <li><a><i class="fa fa-suitcase"></i> File Bag <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tc_fb_upload_files.php">Upload Files</a></li>
                      <li><a href="chartjs2.html">Bin</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-calendar"></i>School Calendar <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tc_school_calendar.php">What's New?</a></li>
                    </ul>
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
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="function/logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>