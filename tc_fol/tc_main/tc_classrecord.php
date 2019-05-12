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
					 <center><h2>Grade 6 Section <?php echo  $section_name;?> (Class Record)<small> </small></h2>
                    
					<a href="#change" data-toggle="modal" class="btn btn-primary"></i><i class="fa fa-hand-o-right"></i> Select Quarter </a>
					<a href="tc_classrecord.php?change=3&section_id=<?php echo  $sectionid;?>&quarter=<?php echo $karun_na_quarter;?>" data-toggle="modal" class="btn btn-success"></i><i class="fa fa-file-o"></i> Assignment </a>
					 <a href="tc_classrecord.php?change=1&section_id=<?php echo  $sectionid;?>&quarter=<?php echo $karun_na_quarter;?>" data-toggle="modal" class="btn btn-success"></i><i class="fa fa-file-o"></i> Quizzes </a>
					 <a href="tc_classrecord.php?change=2&section_id=<?php echo  $sectionid;?>&quarter=<?php echo $karun_na_quarter;?>" data-toggle="modal" class="btn btn-success"></i><i class="fa fa-file-o"></i> Examination </a>
					<a href="tc_grades.php?section_id=<?php echo  $sectionid;?>&quarter=<?php echo $karun_na_quarter;?>" data-toggle="modal" class="btn btn-warning"></i><i class="fa fa-table"></i> E-Class Records </a>
					
					 
					 </center>
					 <br>
					 <p class="text-muted font-13 m-b-30">
                      DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
                    </p>
				  	<?php if(@$_GET['change']=='1'){?>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr> 
						<th style="width: 8%">LRN</th>
                          <th style="width: 5%">Profile</th>
                          <th style="width: 10%">Student Name</th>
						  
						
						  <?php 
								$querys = mysqli_query($conn, "SELECT * FROM `ct_addto` where sectionID='".$sectionid."' AND quarter='".@$_GET['quarter']."';") or die(mysqli_error());
								while($fs = mysqli_fetch_array($querys))
								{ 
								$idquiz = $fs['quizID'];
								$querquiz = mysqli_query($conn, "SELECT * FROM `ct_quiz` where quiz_id='".$idquiz."' AND quarter='".@$_GET['quarter']."';") or die(mysqli_error());
									while($rosws = mysqli_fetch_array($querquiz))
									{
									$quizname= $rosws['name'];
									
									$querques = mysqli_query($conn, "SELECT count(quiz_id) FROM `ct_quiz_questions` where quiz_id='".$idquiz."';") or die(mysqli_error());
									while($displayrow = mysqli_fetch_array($querques))
									{
										?>
										
									 <th style="width: 20%"><?php echo $quizname.'/'.$displayrow['count(quiz_id)']?></th>
								<?php 
									}
									}
								}
							?>
						 
						  
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
										$fullnames= $fname.' '.$lname.' '.$mname;
										$fullname= $fname.' '.$lname;
										$section_id = $fetch['section_id'];
							?>	
							
							
                        <tr>
                          <td><?php echo $lrn;?></td> 
                        
                          <td><a><span class="image"> <img src="images/profile/<?php echo $photo;?>" alt="img" width="50px" height="50px"></span></a></td> 
						     <td><?php echo $fullnames;?></td>
							 
						     <td>	  <?php 
								$querys = mysqli_query($conn, "SELECT * FROM `ct_addto` where sectionID='".$sectionid."' AND quarter='".@$_GET['quarter']."';") or die(mysqli_error());
								while($fetchs = mysqli_fetch_array($querys))
								{ 
								$idquiz = $fetchs['quizID'];
								$querquizes = mysqli_query($conn, "SELECT * FROM `ct_quiz` where quiz_id='".$idquiz."' AND quarter='".@$_GET['quarter']."';") or die(mysqli_error());
									while($rowses = mysqli_fetch_array($querquizes))
									{
									$quizname= $rowses['name'];
									
									$queryquizrek = mysqli_query($conn, "SELECT * FROM `ct_quiz_records` where student='$id' and quiz_id='".$idquiz."';") or die(mysqli_error());
									while($rows = mysqli_fetch_array($queryquizrek))
									{
								    echo $score= $rows['score'];
									}
									}
									
								}
							?> </td>
						  <!-- score / items X 100 X .40%;-->
						
						</tr>
								<?php } ?>
                      </tbody>
                    </table>  
				  	<?php } ?>

				
					<?php if(@$_GET['change']=='2'){?>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr> 
						<th style="width: 8%">LRN</th>
                          <th style="width: 5%">Profile</th>
                          <th style="width: 10%">Student Name</th>
						  
						
						  <?php 
								$querys = mysqli_query($conn, "SELECT * FROM `ct_addto` where sectionID='".$sectionid."' AND quarter='".@$_GET['quarter']."';") or die(mysqli_error());
								while($fetchs = mysqli_fetch_array($querys))
								{ 
								$examid = $fetchs['examid'];
								$queryexam = mysqli_query($conn, "SELECT * FROM `ct_examination` where exam_id='".$examid."' AND quarter='".@$_GET['quarter']."';") or die(mysqli_error());
									while($examrow = mysqli_fetch_array($queryexam))
									{
									$examname= $examrow['name'];
									
									$queryexamrek = mysqli_query($conn, "SELECT count(exam_id) FROM `ct_exam_questions` where exam_id='".$examid."';") or die(mysqli_error());
									while($rose = mysqli_fetch_array($queryexamrek))
									{
										?>
										
									 <th style="width: 20%"><?php echo $examname.'/'.$rose['count(exam_id)']?></th>
								<?php 
									}
									}
								}
							?>
						 
						  
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
										$fullnames= $fname.' '.$lname.' '.$mname;
										$fullname= $fname.' '.$lname;
										$section_id = $fetch['section_id'];
							?>	
							
							
                        <tr>
                          <td><?php echo $lrn;?></td> 
                        
                          <td><a><span class="image"> <img src="images/profile/<?php echo $photo;?>" alt="img" width="50px" height="50px"></span></a></td> 
						     <td><?php echo $fullnames;?></td>
							 
						     <td>	  <?php 
								$ctquery = mysqli_query($conn, "SELECT * FROM `ct_addto` where sectionID='".$sectionid."' AND quarter='".@$_GET['quarter']."';") or die(mysqli_error());
								while($getids = mysqli_fetch_array($ctquery))
								{ 
								$examid = $getids['examid'];
								$queryexams = mysqli_query($conn, "SELECT * FROM `ct_examination` where exam_id='".$examid."' AND quarter='".@$_GET['quarter']."';") or die(mysqli_error());
									while($ibahinrow = mysqli_fetch_array($queryexams))
									{
									$quizname= $ibahinrow['name'];
									
									$querygetscore = mysqli_query($conn, "SELECT * FROM `ct_exam_records` where student='$id' and exam_id='".$examid."';") or die(mysqli_error());
									while($scoreget = mysqli_fetch_array($querygetscore))
									{
								    echo $score= $scoreget['score'];
									}
									}
									
								}
							?> </td>
						  <!-- score / items X 100 X .40%;-->
						
						</tr>
								<?php } ?>
                      </tbody>
                    </table>  
				  	<?php } ?> 	
					
					<?php if(@$_GET['change']=='3'){?>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr> 
						<th style="width: 8%">LRN</th>
                          <th style="width: 5%">Profile</th>
                          <th style="width: 10%">Student Name</th>
						  
						
						  <?php 
								$querys = mysqli_query($conn, "SELECT * FROM `ct_addto` where sectionID='".$sectionid."' AND quarter='".@$_GET['quarter']."';") or die(mysqli_error());
								while($fetchs = mysqli_fetch_array($querys))
								{ 
								$examid = $fetchs['examid'];
								$queryexam = mysqli_query($conn, "SELECT * FROM `ct_examination` where exam_id='".$examid."' AND quarter='".@$_GET['quarter']."';") or die(mysqli_error());
									while($examrow = mysqli_fetch_array($queryexam))
									{
									$examname= $examrow['name'];
									
									$queryexamrek = mysqli_query($conn, "SELECT count(exam_id) FROM `ct_exam_questions` where exam_id='".$examid."';") or die(mysqli_error());
									while($rose = mysqli_fetch_array($queryexamrek))
									{
										?>
										
									 <th style="width: 20%"><?php echo $examname.'/'.$rose['count(exam_id)']?></th>
								<?php 
									}
									}
								}
							?>
						 
						  
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
										$fullnames= $fname.' '.$lname.' '.$mname;
										$fullname= $fname.' '.$lname;
										$section_id = $fetch['section_id'];
							?>	
							
							
                        <tr>
                          <td><?php echo $lrn;?></td> 
                        
                          <td><a><span class="image"> <img src="images/profile/<?php echo $photo;?>" alt="img" width="50px" height="50px"></span></a></td> 
						     <td><?php echo $fullnames;?></td>
							 
						     <td>	  <?php 
								$ctquery = mysqli_query($conn, "SELECT * FROM `ct_addto` where sectionID='".$sectionid."' AND quarter='".@$_GET['quarter']."';") or die(mysqli_error());
								while($getids = mysqli_fetch_array($ctquery))
								{ 
								$examid = $getids['examid'];
								$queryexams = mysqli_query($conn, "SELECT * FROM `ct_examination` where exam_id='".$examid."' AND quarter='".@$_GET['quarter']."';") or die(mysqli_error());
									while($ibahinrow = mysqli_fetch_array($queryexams))
									{
									$quizname= $ibahinrow['name'];
									
									$querygetscore = mysqli_query($conn, "SELECT * FROM `ct_exam_records` where student='$id' and exam_id='".$examid."';") or die(mysqli_error());
									while($scoreget = mysqli_fetch_array($querygetscore))
									{
								    echo $score= $scoreget['score'];
									}
									}
									
								}
							?> </td>
						  <!-- score / items X 100 X .40%;-->
						
						</tr>
								<?php } ?>
                      </tbody>
                    </table>  
				  	<?php } ?> 
              </div>
              </div>
            </div>
              </div>
			  <br>
			  
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
                          <h4 class="modal-title" id="myModalLabel2">Select Quarter</h4>
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
			  
			  	<div class="modal fade" id="change" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Select Quarter</h4>
                        </div>
                        <div class="modal-body">  
                    <br>
                    <form class="form-horizontal form-label-left input_mask">

                      <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                        <input type="hidden" class="form-control" name="section_id" value="<?php echo $sectionid;?>" required>
                        <input type="hidden" class="form-control" name="change" value="<?php echo $_GET['change'];?>" required>
						 <label>Add Quarter	</label>
						<select class="form-control" name="quarter" required>
						<option value="">Choose </option> 
						<option value="1">First Quarter</option> 
						<option value="2">Second Quarter</option> 
						<option value="3">Third Quarter</option> 
						<option value="4">Fourth Quarter</option>  
                          </select>
						</div> 
						
					   </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
					</form> 
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