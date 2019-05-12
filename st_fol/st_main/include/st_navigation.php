 			<?php  
			$querye = mysqli_query ($conn, "SELECT `section_id` FROM usr_student WHERE st_id ='".$_SESSION['st_id']."';") or die (mysqli_error());
			$fetche = mysqli_fetch_array ($querye);
			$ideseksyon = $fetche['section_id'];
			?>
		<div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/user.png" alt=""><?php echo $fetch['firstname'];?>&nbsp;<?php echo $fetch['middlename'];?>&nbsp;<?php echo $fetch['lastname'];?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
				    <li><a href="mathjestic_quest/index.html".php"><i class="fa fa-gamepad pull-right"></i> Mathjestic Quest</a></li>
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="function/logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bell-o"></i>
					<span class="badge bg-green">
					
							 <?php 
								$queryt = mysqli_query($conn, "SELECT * FROM add_to_ct_generate_code where section_id='".$ideseksyon."';") or die(mysqli_error());
								while($fetcht = mysqli_fetch_array($queryt))
								{
										  $fetcht['code'];
										  echo '1';
								}
							?>
					 
					
					</span>					
                  </a> 
					<ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
        
                    <li>
                      <a href="function/savescore.php?username=username">
					
                        <span class="message">
                          You receive activation code in Mathjestic Quest for first quarter.
                        </span>
						<span class="message">
                         Click me to take Quest
                        </span>
                      </a>
                    </li> 
                  </ul>	 
                </li>
              </ul>
            </nav>
          </div>

        </div>
        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Please confirm</h4>
                        </div>
                        <div class="modal-body"> 
                          <p>Are you sure do you want to leave this page?</p> 
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                          <a href="../../mathjestic_quest" target="_blank" class="btn btn-primary">Yes</a>
                        </div>

                      </div>
                    </div>
                  </div>