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
				  <center><h2>Grade 6 Section <?php echo  $section_name;?> (Daily Attendance Records)<small> </small></h2>
				  <br>
                  
				  <p class="text-muted font-13 m-b-30">
                      Click: <code>Date Picker</code>, then select date, and Click: <code>OK button</code>, to display.
                    </p>
				  <hr/></center>
				  
					<div class="buttons">
					 <!-- Standard button -->
					      <div class="row">
					      <div class="col-md-4">
						  <form>
						<div class="control-group">
                            <div class="controls">
                              <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" name="date" id="single_cal1" placeholder="First Name" aria-describedby="inputSuccess2Status">
                                <input type="hidden" value="<?php echo $sectionid;?>" class="form-control has-feedback-left" name="section_id" id="s" placeholder="First Name" aria-describedby="inputSuccess2Status">
                              <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                              </div>
                            </div>
                          </div>  
					 </div>
					<div class="col-md-4"> 
					<button type="submit" class="btn btn-success">OK</button>
					</form>
                    </div>
					<div class="col-md-4">
				 	  	
						<?php if(isset($_GET['date'])){?>
						<h1><?php echo date("F j, Y",strtotime(@$_GET['date']));?></h1>  
						<?php } else {?>
						<h1><?php echo date("F j, Y",strtotime(date("Y-m-d")));?></h1>  
						<?php }?> 
							
							
                    </div> 
                   
                    </div>
                     </div> 
						<br/> 						
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr> 
                          <th style="width: 10%">Name</th> 
                          <th style="width: 25%">Status</th>  
                        </tr>
                      </thead>


                      <tbody>
					  		<?php
							$datekarun=date("Y-m-d");
							$newdate=date("Y-m-d",strtotime(@$_GET['date']));
							
							if(isset($_GET['date'])){
								$query = mysqli_query($conn, "SELECT * FROM `clm_attendance` inner join usr_student on usr_student.st_id=clm_attendance.student_id where date='".$newdate."' and clm_attendance.section_id='".$_GET['section_id']."';") or die(mysqli_error());
							}else{
									$query = mysqli_query($conn, "SELECT * FROM `clm_attendance` inner join usr_student on usr_student.st_id=clm_attendance.student_id where date='$datekarun' and clm_attendance.section_id='".$_GET['section_id']."';") or die(mysqli_error());
							}
							 while($fetch = mysqli_fetch_array($query))
							 { 
						 $fname= $fetch['firstname'];
						 $lname= $fetch['lastname'];
						 $fullname= $fname.' '.$lname;
							?>	
                        <tr>
						  <td> <?php echo $fullname;?></td> 
						  <td> <?php echo $fetch['status'];?></td> 
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