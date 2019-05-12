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
                    <button type="button" class="btn btn-default btn-xs"><i class="fa fa-chevron-circle-left"></i><a href="tc_mc_attendance.php?section_id=<?php echo $sectionid;?>"> Previous</a></button>  
                 <button type="button" class="btn btn-default btn-xs"><i class="fa fa-home"></i><a href="index.php"> Home</a></button>  
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                  
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                     <div class="x_content">
					 <center><img src="../images/pces_logo_text.png" alt="img" width="435px" height="35px" ></center>
				  <center><h2>Grade 6 Section <?php echo  $section_name;?> (No. of Days of Present/Absent)<small> </small></h2>
				  <br>
                  
				  <p class="text-muted font-13 m-b-30">
                      Summary of the total No. of present and absences of the student.
                    </p>
				  <hr/></center>
				  
						<br/>
            					
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr> 
                          <th style="width: 50%">Name</th> 
                          <th style="width: 25%">Total of absent</th>  
                          <th style="width: 25%">Total of present</th>  
                        </tr>
                      </thead>


                      <tbody>
							<?php 
							$query = mysqli_query($conn, "SELECT * FROM `clm_attendance` inner join usr_student on usr_student.st_id=clm_attendance.student_id where clm_attendance.section_id='".$_GET['section_id']."' order by lastname DESC;") or die(mysqli_error());
							while($fetch = mysqli_fetch_array($query))
							{ 
							$stdid= $fetch['student_id'];
							$fname= $fetch['firstname'];
							$lname= $fetch['lastname'];
							$fullname= $fname.' '.$lname;
							?>	
                        <tr>
						  <td> <?php echo $fullname;?></td> 
							<td>
							<?php 
							$queryabsent = mysqli_query($conn, "SELECT count(status) FROM `clm_attendance` where student_id='$stdid' and status='Absent' and section_id='".$_GET['section_id']."';") or die(mysqli_error());
							while($fetchabsent = mysqli_fetch_array($queryabsent))
							{ 
							echo $fetchabsent['count(status)']; 
							}
							?>
							</td> 

							<td>
							<?php 
							$queryabsent = mysqli_query($conn, "SELECT count(status) FROM `clm_attendance` where student_id='$stdid' and status='Present' and section_id='".$_GET['section_id']."';") or die(mysqli_error());
							while($fetchabsent = mysqli_fetch_array($queryabsent))
							{ 
							echo $fetchabsent['count(status)']; 
							}
							?>
							</td> 
						 
                        </tr>
								<?php } ?>
                      </tbody>
                    </table>
                  </div>
              </div>
            </div>
            </div>
			<br>
		  
     
		
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