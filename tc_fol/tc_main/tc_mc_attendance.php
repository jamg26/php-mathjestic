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
				<button type="button" class="btn btn-default btn-xs"><i class="fa fa-chevron-circle-left"></i><a href="tc_student.php?section_id=<?php echo $sectionid;?>"> Previous</a></button>  
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
				  <center><h2>Grade 6 Section <?php echo  $section_name;?> (Daily Attendance)<small> </small></h2>
				  <a href="tc_view_attendance.php?section_id=<?php echo $sectionid;?>" class="btn btn-success"><i class="fa fa-calendar-o"></i> Daily Attendance Records </a>
				  <a href="tc_view_total.php?section_id=<?php echo $sectionid;?>" class="btn btn-success"><i class="fa fa-calendar-o"></i> No. of Days of Present/Absent</a>
                  
				  <p class="text-muted font-13 m-b-30">
                      Click: <code>P button</code>, if the student is PRESENT, and Click: <code>A button</code>, if the student is ABSENT.
                    </p>
				  <br></center>
				  
                    <div class="row">
					<div class="col-md-5" > </div>
				<?php 
								$query = mysqli_query($conn, "SELECT * FROM `usr_teacher` where section_id='$sectionid';") or die(mysqli_error());
								while($fetch = mysqli_fetch_array($query))
								{
										$idsateacher = $fetch['tc_id'];
										$fname = $fetch['firstname'];
										$lname = $fetch['lastname']; 
										$fullname= $fname.' '.$lname;
							?>					
						<div class="col-md-2"> 
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" <img src="images/profile/<?php echo $fetch['profile_img'];?>" alt="image">
                            <div class="mask">
                              <p><?php echo $fullname;?></p>
                              <div class="tools tools-bottom"> 
                                <a href="#"><i class="fa fa-info"></i></a> 
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p><?php echo $fullname;?></p>
                            <p class="text-success"><i class="fa fa-user"></i> Teacher</p>
                          </div>
                        </div> 
                      </div>
								<?php } ?>	
                    <div class="col-md-5" > </div>		
                    </div>
					
					<br>
                    <div class="row">			  
							<?php 
								$datenow=date("Y-m-d");
								$query = mysqli_query($conn, "SELECT * FROM `usr_student` where section_id='$sectionid' AND st_entry='Active' order by seat_num;") or die(mysqli_error());
								while($fetch = mysqli_fetch_array($query))
								{
										$id = $fetch['st_id'];
										$lrn = $fetch['LRNnumber'];
										$photo = $fetch['profile_img'];
										$lname = $fetch['lastname'];
										$fname = $fetch['firstname'];
										$fullname= $fname.' '.$lname;
							?>	
						
						<div class="col-md-2"> 
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="images/profile/<?php echo $photo;?>" alt="image">
                            <div class="mask">
                              <p><?php echo $fullname;?></p>
                              <div class="tools tools-bottom"> 
                                <a href="#"><i class="fa fa-info"></i></a> 
                              </div>
                            </div>
                          </div> 
                          <div class="caption"> 
                            <p><?php echo $fullname;?>
							
							<?php 						
							
							 $querys =mysqli_query($conn, "SELECT * FROM `clm_attendance` where student_id='$id' AND date='$datenow';"); 
							 if($fetch = mysqli_fetch_array($querys)){ 
							 if($fetch['status']=='Present'){
								 $success='success';
							 }else {
								 $success='';
							 }
							?>
							 	<code class="text-<?php echo $success;?>"><?php echo $fetch['status'];?></code></p>	
							<form action="function/tc_attendance.php" method="POST">
							<input type="hidden" name="sectionidsastudent" value="<?php echo $sectionid;?>">
							<input type="hidden" name="idsastudent" value="<?php echo $id;?>"> 
							<input type="hidden" name="idsaattendance" value="<?php echo $fetch['attendance_id'];?>"> 
							<button name="presentbtnupdate" class="btn btn-success btn-xs"><i class="fa fa-check"></i> P </button>
							<button name="absentbtnupdate" class="btn btn-danger btn-xs"><i class="fa fa-times"></i> A </button>
							</form>							
							<?php  } else { ?> 
						    <form action="function/tc_attendance.php" method="POST">
							<input type="hidden" name="sectionidsastudent" value="<?php echo $sectionid;?>">
							<input type="hidden" name="idsastudent" value="<?php echo $id;?>"> 
							<button name="presentbtn" class="btn btn-success btn-xs"><i class="fa fa-check"></i> P </button>
							<button name="absentbtn" class="btn btn-danger btn-xs"><i class="fa fa-times"></i> A </button>
							</form>
							<?php  }?>
							
							
							
						 </div>
                        </div> 
                      </div>
							<?php }   ?>
           
               
                    </div>
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