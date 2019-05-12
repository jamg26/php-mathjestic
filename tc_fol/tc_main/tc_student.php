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
                    
              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-chevron-circle-left"></i><a href="tc_my_class.php"> Previous</a></button>
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
					 <center><h2>Grade 6 <?php echo  $section_name;?><small> </small></h2>
					 <a href="tc_mc_attendance.php?section_id=<?php echo $sectionid;?>" class="btn btn-success"></i><i class="fa fa-calendar"></i> Daily Attendance </a>
					 <a href="tc_classrecord.php?section_id=<?php echo $sectionid;?>&quarter=<?php echo $karun_na_quarter;?>&change=1" class="btn btn-success"></i><i class="fa fa-book"></i> Class Records </a>
					 <a href="tc_ranking.php?section_id=<?php echo $sectionid;?>" class="btn btn-success"></i><i class="fa fa-cubes"></i> Student Ranking </a>
					 </center>
					 <br>
				 
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 8%">LRN</th>
                          <th style="width: 5%">Profile</th>
						  <th style="width: 3%">Gen</th>
                          <th style="width: 20%">Student Name</th>
                          <th>Add Awards</th>						  
						  <th>Seat No</th>
						  <th>Start date</th> 
                          <th>Username</th>
						  <th>Status</th>
						  <th>Verify</th>
                        </tr>
                      </thead>


                      <tbody>
					  		<?php 
								$query = mysqli_query($conn, "SELECT * FROM `usr_student` where section_id='$sectionid' AND st_entry='Active';") or die(mysqli_error());
								while($fetch = mysqli_fetch_array($query))
								{
										$id = $fetch['st_id'];
										$lrn = $fetch['LRNnumber'];
										$photo = $fetch['profile_img'];
										$lname = $fetch['lastname'];
										$fname = $fetch['firstname'];
										$mname = $fetch['middlename'];
										$fullname= $fname.' '.$lname.' '.$mname;
										$section_id = $fetch['section_id'];
										$date = $fetch['st_entry_date']; 
										$status = $fetch['st_stat']; 
										$user = $fetch['username'];
										$gender = $fetch['sex'];
							?>	
                        <tr>
                        <td><?php echo $lrn;?></td> 
                        <td><a><span class="image"><img src="images/profile/<?php echo $photo;?>" alt="img" width="50px" height="50px"></span></a></td> 
                        <td><?php echo $gender;?></td> 
						<td><?php echo $fullname;?></td> 
						<td class="last">
						<a href="#"><a href="#editaa<?php echo $id;?>" class="btn btn-success btn-xs" data-toggle="modal"><i class="fa fa-info-circle"></i> Add Badge </a>
						</td>
						<td class="last">
                        <a href="#"><a href="#edita<?php echo $id;?>" class="btn btn-primary btn-xs" data-toggle="modal"><i class="fa fa-info-circle"></i> Add seat number </a>
                        </td> 
                        <td><?php echo $date;?></td>    
                        <td><?php echo $user;?></td> 						
                        <td><?php echo $status;?></td> 
						<td> 
                        <a href="function/tc_student_verify.php?yes=<?php echo $id;?>" onclick="return confirm('Do you want to verify this user?');" class="btn btn-warning btn-xs"> Verify </a>
                        </td>
                        </tr>
								<?php } ?>
                      </tbody>
                    </table>
                  </div>
              </div>
            </div>
              </div>
			  
			  <?php 
								$query = mysqli_query($conn, "SELECT * FROM `usr_student` where section_id='$sectionid' AND st_entry='Active';") or die(mysqli_error());
								while($fetch = mysqli_fetch_array($query))
								{
											$id = $fetch['st_id'];
										$lrn = $fetch['LRNnumber'];
										$photo = $fetch['profile_img'];
										$lname = $fetch['lastname'];
										$fname = $fetch['firstname'];
										$fullname= $fname.' '.$lname;
										$section_id = $fetch['section_id'];
										$sitnumber = $fetch['seat_num'];
								 
							?>		
				  	
					
					<div class="modal fade" id="edita<?php echo $id;?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Add Seat number</h4>
                        </div>
                        <div class="modal-body">  
                    <br>
                    <form class="form-horizontal form-label-left input_mask" action="function/add_sitnumber.php" method="POST">

                      <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                        <input type="hidden" class="form-control" id="" name="idsastudent" value="<?php echo $id;?>" placeholder="ID" required>
                     
                   <input type="number" class="form-control" id="" name="sitnumber" value="<?php echo $sitnumber;?>" placeholder="Seat Number" required>
                   <input type="hidden" class="form-control" id="" name="section_id" value="<?php echo $sectionid;?>" placeholder="section_id" required>
                    </div> 
					   </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" name="btnsitnumber" class="btn btn-primary">Submit</button>
                        </div>
					</form> 
                      </div>
                    </div>
                  </div>
                  <!-- /modals -->
                        <div class="modal fade" id="editaa<?php echo $id;?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Add Badges:</h4>
                        </div>
                        <div class="modal-body">  
                    <br>
                    <form class="form-horizontal form-label-left input_mask" action="function/add_badge.php" method="POST">
                        <div style="margin-left: 70px;">
                             <label><input type="radio" name="hatagagbadge" value="A1">Pefect Quiz</label><br>
                             <label><input type="radio" name="hatagagbadge" value="A2">Perfect Attendance</label><br>
                             <label><input type="radio" name="hatagagbadge" value="A3">Best in Math</label><br>
                             <label><input type="radio" name="hatagagbadge" value="A4">Best in Oral Recitation</label><br>
                             <label><input type="radio" name="hatagagbadge" value="A5">Best in Listening</label> 

                        </div>
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                        <input type="hidden" class="form-control" id="" name="idsastudent" value="<?php echo $id;?>" placeholder="ID" required>
                        <input type="hidden" class="form-control" id="" name="section_id" value="<?php echo $sectionid;?>" placeholder="ID" required>
                     
                  
                    </div> 
             </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" name="gipislit" class="btn btn-primary">Submit</button>
                        </div>
          </form> 
                      </div>
                    </div>
                  </div>
                  <!-- /modals -->
								<?php } ?>
			  
			  
		  
     
		
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