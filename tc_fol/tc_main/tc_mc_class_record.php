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
                    
              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-chevron-circle-left"></i><a href="tc_my_class.php?section_id=<?php echo $sectionid;?>"> Previous</a></button>
            
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
					 <a href="tc_mc_attendance.php?section_id=<?php echo $sectionid;?>" class="btn btn-success"></i> Daily Attendance </a>
					 <a href="tc_mc_attendance.php?section_id=<?php echo $sectionid;?>" class="btn btn-success"></i> Class Record </a>
					 <a href="tc_ranking.php?section_id=<?php echo $sectionid;?>" class="btn btn-success"></i> Student Ranking </a>
					 </center>
					 <br>
					 <p class="text-muted font-13 m-b-30">
                      DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 8%">LRN</th>
                          <th style="width: 5%">Profile</th>
                          <th style="width: 20%">Student Name</th> 
						  <th>Attendance</th>
						  <th>Progress</th>
						  <th>Rank</th>
						  <th>Info</th>
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
							?>	
							
							
                        <tr>
                          <td><?php echo $lrn;?></td> 
                          <td>  
						<a>
                        <span class="image">
                          <img src="images/<?php echo $photo;?>" alt="img" width="50px" height="50px">
                        </span> 
						</a>
						</td> 
                          <td><?php echo $fullname;?></td> 
						  <td class=" last"><a href="tc_mc_attendance.php?section_name=<?php echo $section_id;?>">View</a> </td>
						  <td class=" last"><a href="tc_mc_attendance.php?section_name=<?php echo $section_id;?>">View</a> </td>
						  <td class=" last"><a href="tc_mc_attendance.php?section_name=<?php echo $section_id;?>">View</a> </td>
						 
						  <td class=" last"><a href="#"><a href="#edita<?php echo $id;?>" class="btn btn-primary btn-xs" data-toggle="modal"><i class="fa fa-info-circle"></i> View </a></td>
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