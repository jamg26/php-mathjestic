<!-- header content -->
 <?php include ("include/tc_header.php");
 error_reporting(0);
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
                    
              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-chevron-circle-left"></i><a href="tc_classrecord.php?change=1&section_id=<?php echo  $sectionid;?>&quarter=<?php echo $karun_na_quarter;?>"> Previous</a></button>
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
					 <center><h2>Grade 6 Section <?php echo  $section_name;?> (E-Class Records)<small> </small></h2>
 
				 <a href="tc_grades.php?section_id=<?php echo $_GET['section_id'];?>&quarter=1" data-toggle="modal" class="btn btn-success"></i><i class="fa fa-folder-open-o"></i> MATH-Q1 </a>
				 <a href="tc_grades.php?section_id=<?php echo $_GET['section_id'];?>&quarter=2" data-toggle="modal" class="btn btn-success"></i><i class="fa fa-folder-open-o"></i> MATH-Q2 </a>
				 <a href="tc_grades.php?section_id=<?php echo $_GET['section_id'];?>&quarter=3" data-toggle="modal" class="btn btn-success"></i><i class="fa fa-folder-open-o"></i> MATH-Q3 </a>
				 <a href="tc_grades.php?section_id=<?php echo $_GET['section_id'];?>&quarter=4" data-toggle="modal" class="btn btn-success"></i><i class="fa fa-folder-open-o"></i> MATH-Q4 </a>
				 <a href="tc_grades.php?section_id=<?php echo $_GET['section_id'];?>&quarter=All" data-toggle="modal" class="btn btn-warning"></i><i class="fa fa-folder-open-o"></i> Summary of Quarterly Grades </a>
					 
					 </center>
					 <br>
				 
			<?php	if (@$_GET['quarter']=='All'){?>
			<!---------==================by  quarter =========--------->
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr> 
                          <th style="width: 5%">Profile</th>						
                          <th>Learners' Names</th>
                          <th style="width: 11%">MATH <br>1st Quarter</th>
                          <th style="width: 11%">MATH <br>2nd Quarter</th>
                          <th style="width: 11%">MATH <br>3rd Quarter</th>
                          <th style="width: 11%">MATH <br>4th Quarter</th>
                          <th style="width: 11%">Final Grade</th>
                          <th>Remarks </th>
                          <th style="width: 5%">Rank </th>
                      
						  
                        </tr>
                      </thead>


                      <tbody>
					  		<?php 
								$query = mysqli_query($conn, "SELECT * FROM `usr_student` where section_id='".$sectionid."' AND st_entry='Active';") or die(mysqli_error());
								while($fetch = mysqli_fetch_array($query))
								{
										$idniya = $fetch['st_id']; 
										$fullname= $fetch['lastname'].', '.$fetch['firstname'].' '.$fetch['middlename']; 
										$photo= $fetch['profile_img']; 
							?>	
							
							
                        <tr>
						<td><a><span class="image"> <img src="images/profile/<?php echo $photo;?>" alt="img" width="30px" height="30px"></span></a></td>
						
                          <td><?php echo $fullname;?></td> 
						 
						 <?php   
						$queryass1 = mysqli_query($conn, "SELECT  SUM(`score`), SUM(`items`) FROM `ct_assignment_records` where student='".$idniya."' and quarter='1';") or die(mysqli_error());
						 
						while($rowass1 = mysqli_fetch_array($queryass1))
						{ 
						@$scoresaass1 = $rowass1['SUM(`score`)']; 
					    @$itemsaass1 = $rowass1['SUM(`items`)']; 
						}  
						
						$queryquiz1 = mysqli_query($conn, "SELECT  SUM(`score`), SUM(`items`) FROM `ct_quiz_records` where student='".$idniya."' and quarter='1';") or die(mysqli_error());
						 
						while($rowquiz1 = mysqli_fetch_array($queryquiz1))
						{ 
						@$quizscore1 = $rowquiz1['SUM(`score`)']; 
					    @$quizitems1 = $rowquiz1['SUM(`items`)']; 
						}
						
						$totalitems1= $itemsaass1 + $quizitems1;
						$totalscore1= $scoresaass1 + $quizscore1;
						
						
						if($totalitems1==null && $totalscore1==null)
						{
							$scoresaassquiz1 ='0';
						}else
						{ 
							 
						 $scoresaassquiz1 = $totalscore1 / $totalitems1 * 40;
						}
						
							$queryass2 = mysqli_query($conn, "SELECT  SUM(`score`), SUM(`items`) FROM `ct_assignment_records` where student='".$idniya."' and quarter='1';") or die(mysqli_error());
						 
						while($rowass2 = mysqli_fetch_array($queryass2))
						{ 
						@$scoresaass2 = $rowass2['SUM(`score`)']; 
					    @$itemsaass2 = $rowass2['SUM(`items`)']; 
						} 
						
						$queryquiz2 = mysqli_query($conn, "SELECT  SUM(`score`), SUM(`items`) FROM `ct_quiz_records` where student='".$idniya."' and quarter='2';") or die(mysqli_error());
						 
						while($rowquiz2 = mysqli_fetch_array($queryquiz2))
						{ 
						@$quizscore2 = $rowquiz2['SUM(`score`)']; 
					    @$quizitems2 = $rowquiz2['SUM(`items`)']; 
						}
						
						$totalitems2= $itemsaass2 + $quizitems2;
						$totalscore2= $scoresaass2 + $quizscore2;
						
						
						if($totalitems2==null && $totalscore2==null)
						{
							$scoresaassquiz2 ='0';
						}else
						{ 
							 
						 $scoresaassquiz2 = $totalscore2 / $totalitems2 * 40;
						}
						
							$queryass3 = mysqli_query($conn, "SELECT  SUM(`score`), SUM(`items`) FROM `ct_assignment_records` where student='".$idniya."' and quarter='1';") or die(mysqli_error());
						 
						while($rowass3 = mysqli_fetch_array($queryass3))
						{ 
						@$scoresaass3 = $rowass3['SUM(`score`)']; 
					    @$itemsaass3 = $rowass3['SUM(`items`)']; 
						}
						
						$queryquiz3 = mysqli_query($conn, "SELECT  SUM(`score`), SUM(`items`) FROM `ct_quiz_records` where student='".$idniya."' and quarter='3';") or die(mysqli_error());
						 
						while($rowquiz3 = mysqli_fetch_array($queryquiz3))
						{ 
						@$quizscore3 = $rowquiz3['SUM(`score`)']; 
					    @$quizitems3 = $rowquiz3['SUM(`items`)']; 
						}
					
					
						$totalitems3= $itemsaass3 + $quizitems3;
						$totalscore3= $scoresaass3 + $quizscore3;
						
						
						if($totalitems3==null && $totalscore3==null)
						{
							$scoresaassquiz3 ='0';
						}else
						{ 
							 
						 $scoresaassquiz3 = $totalscore3 / $totalitems3 * 40;
						}
						
						$queryass4 = mysqli_query($conn, "SELECT  SUM(`score`), SUM(`items`) FROM `ct_assignment_records` where student='".$idniya."' and quarter='1';") or die(mysqli_error());
						 
						while($rowass4 = mysqli_fetch_array($queryass4))
						{ 
						@$scoresaass4 = $rowass4['SUM(`score`)']; 
					    @$itemsaass4 = $rowass4['SUM(`items`)']; 
						}
						
						
						$queryquiz4= mysqli_query($conn, "SELECT  SUM(`score`), SUM(`items`) FROM `ct_quiz_records` where student='".$idniya."' and quarter='4';") or die(mysqli_error());
						 
						while($rowquiz4 = mysqli_fetch_array($queryquiz4))
						{ 
						@$quizscore4 = $rowquiz4['SUM(`score`)']; 
					    @$quizitems4 = $rowquiz4['SUM(`items`)']; 
						}
					
						$totalitems4= $itemsaass4 + $quizitems4;
						$totalscore4= $scoresaass4 + $quizscore4;
						
						
						if($totalitems4==null && $totalscore4==null)
						{
							$scoresaassquiz4 ='0';
						}else
						{ 
							 
						 $scoresaassquiz4 = $totalscore4 / $totalitems4 * 40;
						}
						
						//exam
						
						$queryexam1 = mysqli_query($conn, "SELECT SUM(`score`), SUM(`items`) FROM `ct_exam_records` where student='".$idniya."' and quarter='1';") or die(mysqli_error());
					 
						while($rowexam1= mysqli_fetch_array($queryexam1))
						{ 
						@$examscore1 = $rowexam1['SUM(`score`)']; 
						@$examitems1 = $rowexam1['SUM(`items`)']; 
						}
						if($examscore1=='' && $examitems1=='')
						{
						 $scoreinexam1 ='0';
						}else
						{
							 
							 $scoreinexam1 = $examscore1 / $examitems1 * 20;
						}
						
						$queryexam2 = mysqli_query($conn, "SELECT SUM(`score`), SUM(`items`) FROM `ct_exam_records` where student='".$idniya."' and quarter='2';") or die(mysqli_error());
					 
						while($rowexam2= mysqli_fetch_array($queryexam2))
						{ 
						@$examscore2 = $rowexam2['SUM(`score`)']; 
						@$examitems2 = $rowexam2['SUM(`items`)']; 
						}
						if($examscore2=='' && $examitems2=='')
						{
						 $scoreinexam2 ='0';
						}else
						{
							 
							 $scoreinexam2 = $examscore2 / $examitems2 * 20;
						}
						$queryexam3 = mysqli_query($conn, "SELECT SUM(`score`), SUM(`items`) FROM `ct_exam_records` where student='".$idniya."' and quarter='3';") or die(mysqli_error());
					 
						while($rowexam3= mysqli_fetch_array($queryexam3))
						{ 
						@$examscore3 = $rowexam3['SUM(`score`)']; 
						@$examitems3 = $rowexam3['SUM(`items`)']; 
						}
						if($examscore3=='' && $examitems3=='')
						{
						 $scoreinexam3 ='0';
						}else
						{
							 
							 $scoreinexam3 = $examscore3 / $examitems3 * 20;
						}
						$queryexam4 = mysqli_query($conn, "SELECT SUM(`score`), SUM(`items`) FROM `ct_exam_records` where student='".$idniya."' and quarter='4';") or die(mysqli_error());
					 
						while($rowexam4= mysqli_fetch_array($queryexam4))
						{ 
						@$examscore4 = $rowexam4['SUM(`score`)']; 
						@$examitems4 = $rowexam4['SUM(`items`)']; 
						}
						if($examscore4=='' && $examitems4=='')
						{
						 $scoreinexam4 ='0';
						}else
						{
							 
							 $scoreinexam4 = $examscore4 / $examitems4 * 20;
						}
						//writtengrade
						
					$querysascore1 = mysqli_query($conn, "SELECT score FROM `ct_written_task` WHERE student_ID='".$idniya."' and quarter='1';") or die(mysqli_error());
				  	 					
					if(mysqli_num_rows($querysascore1) > 0)
					{
						while($rowes1 = mysqli_fetch_assoc($querysascore1))
					{
						
						  $valuesawritten1=$rowes1['score']; 
					}
					}
					else
					{
						$valuesawritten1='0';
					}
					
					$querysascore2 = mysqli_query($conn, "SELECT score FROM `ct_written_task` WHERE student_ID='".$idniya."' and quarter='2';") or die(mysqli_error());
				  	 					
					if(mysqli_num_rows($querysascore2) > 0)
					{
						while($rowes2 = mysqli_fetch_assoc($querysascore2))
					{
						
						  $valuesawritten2=$rowes2['score']; 
					}
					}
					else
					{
						$valuesawritten2='0';
					}
					
					$querysascore3 = mysqli_query($conn, "SELECT score FROM `ct_written_task` WHERE student_ID='".$idniya."' and quarter='3';") or die(mysqli_error());
				  	 					
					if(mysqli_num_rows($querysascore3) > 0)
					{
						while($rowes3 = mysqli_fetch_assoc($querysascore3))
					{
						
						  $valuesawritten3=$rowes3['score']; 
					}
					}
					else
					{
						$valuesawritten3='0';
					}
					
					$querysascore4 = mysqli_query($conn, "SELECT score FROM `ct_written_task` WHERE student_ID='".$idniya."' and quarter='4';") or die(mysqli_error());
				  	 					
					if(mysqli_num_rows($querysascore4) > 0)
					{
						while($rowes4 = mysqli_fetch_assoc($querysascore4))
					{
						
						  $valuesawritten4=$rowes4['score']; 
					}
					}
					else
					{
						$valuesawritten4='0';
					}
					
		$finalgrade1=$scoresaassquiz1+$scoreinexam1+$valuesawritten1;
		$finalgrade2=$scoresaassquiz2+$scoreinexam2+$valuesawritten2;
		$finalgrade3=$scoresaassquiz3+$scoreinexam3+$valuesawritten3;
		$finalgrade4=$scoresaassquiz4+$scoreinexam4+$valuesawritten4;

															if($finalgrade1 == 100)
															{
																$transmuted1 = 100;
															}
															else if($finalgrade1 >= 98.40)
															{
																$transmuted11 = 99;
															}
															else if($finalgrade1 >= 96.80)
															{
																$transmuted1 = 98;
															}
															else if($finalgrade1 >= 95.20)
															{
																$transmuted1 = 97;
															}
															else if($finalgrade1 >= 93.69)
															{
																$transmuted1 = 96;
															}
															else if($finalgrade1 >=92.00)
															{
																$transmuted1 = 95;
															}
															else if($finalgrade1 >= 90.40)
															{
																$transmuted1 = 94;
															}
															else if($finalgrade1 >= 88.80)
															{
																$transmuted1 = 93;
															}
															else if($finalgrade1 >= 87.20)
															{
																$transmuted1 = 92;
															}
															else if($finalgrade1 >= 85.60)
															{
																$transmuted1 = 91;
															}
															else if($finalgrade1 >= 84.00)
															{
																$transmuted1 = 90;
															}
															else if($finalgrade1 >= 82.40)
															{
																$transmuted1 = 89;
															}
															else if($finalgrade1 >= 80.80)
															{
																$transmuted1 = 88;
															}
															else if($finalgrade1 >= 79.20)
															{
																$transmuted1 = 87;
															}
															else if($finalgrade1 >= 77.60)
															{
																$transmuted1 = 86;
															}
															else if($finalgrade1 >= 74.40 )
															{
																$transmuted1 = 84;
															}
															else if($finalgrade1 >= 72.80)
															{
																$transmuted1 = 83;
															}
															else if($finalgrade1 >= 71.20)
															{
																$transmuted1 = 82;
															}
															else if($finalgrade1 >= 69.60)
															{
																$transmuted1 = 81;
															}
															else if($finalgrade1 >= 68.00)
															{
																$transmuted1 = 80;
															}
															else if($finalgrade1 >= 66.40)
															{
																$transmuted1 = 79;
															}
															else if($finalgrade1 >= 64.80)
															{
																$transmuted1 = 78;
															}
															else if($finalgrade1 >= 63.20)
															{
																$transmuted1 = 77;
															}
															else if($finalgrade1 >= 61.60)
															{
																$transmuted1 = 76;
															}
															else if($finalgrade1 >= 60.00)
															{
																$transmuted1 = 75;
															}
															else if($finalgrade1 >= 56.00)
															{
																$transmuted1 = 74;
															}
															else if($finalgrade1 >= 52.00)
															{
																$transmuted1 = 73;
															}
															else if($finalgrade1 >= 48.00)
															{
																$transmuted1 = 72;
															}
															else if($finalgrade1 >= 44.00)
															{
																$transmuted1 = 71;
															}
															else if($finalgrade1 >= 40.00)
															{
																$transmuted1 = 70;
															}
															else if($finalgrade1 >= 36.00)
															{
																$transmuted1 = 68;
															}
															else if($finalgrade1 >= 32.00)
															{
																$transmuted1 = 67;
															}
															else if($finalgrade1 >= 28.00)
															{
																$transmuted1 = 67;
															}
															else if($finalgrade1 >= 24.00)
															{
																$transmuted1 = 66;
															}
															else if($finalgrade1 >= 20.00)
															{
																$transmuted1 = 65;
															}
															else if($finalgrade1 >= 16.00)
															{
																$transmuted1 = 64;
															}
															else if($finalgrade1 >= 12.00)
															{
																$transmuted1 = 63;
															}
															else if($finalgrade1 >= 8)
															{
																$transmuted1 = 62;
															}
															else if($finalgrade1 >= 4)
															{
																$transmuted1 = 61;
															}
															else
															{
																$transmuted1 = 60;
															}
 
//transmuted2
															if($finalgrade2 == 100)
															{
																$transmuted2 = 100;
															}
															else if($finalgrade2 >= 98.40)
															{
																$transmuted21 = 99;
															}
															else if($finalgrade2 >= 96.80)
															{
																$transmuted2 = 98;
															}
															else if($finalgrade2 >= 95.20)
															{
																$transmuted2 = 97;
															}
															else if($finalgrade2 >= 93.69)
															{
																$transmuted2 = 96;
															}
															else if($finalgrade2 >=92.00)
															{
																$transmuted2 = 95;
															}
															else if($finalgrade2 >= 90.40)
															{
																$transmuted2 = 94;
															}
															else if($finalgrade2 >= 88.80)
															{
																$transmuted2 = 93;
															}
															else if($finalgrade2 >= 87.20)
															{
																$transmuted2 = 92;
															}
															else if($finalgrade2 >= 85.60)
															{
																$transmuted2 = 91;
															}
															else if($finalgrade2 >= 84.00)
															{
																$transmuted2 = 90;
															}
															else if($finalgrade2 >= 82.40)
															{
																$transmuted2 = 89;
															}
															else if($finalgrade2 >= 80.80)
															{
																$transmuted2 = 88;
															}
															else if($finalgrade2 >= 79.20)
															{
																$transmuted2 = 87;
															}
															else if($finalgrade2 >= 77.60)
															{
																$transmuted2 = 86;
															}
															else if($finalgrade2 >= 74.40 )
															{
																$transmuted2 = 84;
															}
															else if($finalgrade2 >= 72.80)
															{
																$transmuted2 = 83;
															}
															else if($finalgrade2 >= 71.20)
															{
																$transmuted2 = 82;
															}
															else if($finalgrade2 >= 69.60)
															{
																$transmuted2 = 81;
															}
															else if($finalgrade2 >= 68.00)
															{
																$transmuted2 = 80;
															}
															else if($finalgrade2 >= 66.40)
															{
																$transmuted2 = 79;
															}
															else if($finalgrade2 >= 64.80)
															{
																$transmuted2 = 78;
															}
															else if($finalgrade2 >= 63.20)
															{
																$transmuted2 = 77;
															}
															else if($finalgrade2 >= 61.60)
															{
																$transmuted2 = 76;
															}
															else if($finalgrade2 >= 60.00)
															{
																$transmuted2 = 75;
															}
															else if($finalgrade2 >= 56.00)
															{
																$transmuted2 = 74;
															}
															else if($finalgrade2 >= 52.00)
															{
																$transmuted2 = 73;
															}
															else if($finalgrade2 >= 48.00)
															{
																$transmuted2 = 72;
															}
															else if($finalgrade2 >= 44.00)
															{
																$transmuted2 = 71;
															}
															else if($finalgrade2 >= 40.00)
															{
																$transmuted2 = 70;
															}
															else if($finalgrade2 >= 36.00)
															{
																$transmuted2 = 68;
															}
															else if($finalgrade2 >= 32.00)
															{
																$transmuted2 = 67;
															}
															else if($finalgrade2 >= 28.00)
															{
																$transmuted2 = 67;
															}
															else if($finalgrade2 >= 24.00)
															{
																$transmuted2 = 66;
															}
															else if($finalgrade2 >= 20.00)
															{
																$transmuted2 = 65;
															}
															else if($finalgrade2 >= 16.00)
															{
																$transmuted2 = 64;
															}
															else if($finalgrade2 >= 12.00)
															{
																$transmuted2 = 63;
															}
															else if($finalgrade2 >= 8)
															{
																$transmuted2 = 62;
															}
															else if($finalgrade2 >= 4)
															{
																$transmuted2 = 61;
															}
															else
															{
																$transmuted2 = 60;
															}
 
//transmuted3
															if($finalgrade3 == 100)
															{
																$transmuted3 = 100;
															}
															else if($finalgrade3 >= 98.40)
															{
																$transmuted31 = 99;
															}
															else if($finalgrade3 >= 96.80)
															{
																$transmuted3 = 98;
															}
															else if($finalgrade3 >= 95.20)
															{
																$transmuted3 = 97;
															}
															else if($finalgrade3 >= 93.69)
															{
																$transmuted3 = 96;
															}
															else if($finalgrade3 >=92.00)
															{
																$transmuted3 = 95;
															}
															else if($finalgrade3 >= 90.40)
															{
																$transmuted3 = 94;
															}
															else if($finalgrade3 >= 88.80)
															{
																$transmuted3 = 93;
															}
															else if($finalgrade3 >= 87.20)
															{
																$transmuted3 = 92;
															}
															else if($finalgrade3 >= 85.60)
															{
																$transmuted3 = 91;
															}
															else if($finalgrade3 >= 84.00)
															{
																$transmuted3 = 90;
															}
															else if($finalgrade3 >= 82.40)
															{
																$transmuted3 = 89;
															}
															else if($finalgrade3 >= 80.80)
															{
																$transmuted3 = 88;
															}
															else if($finalgrade3 >= 79.20)
															{
																$transmuted3 = 87;
															}
															else if($finalgrade3 >= 77.60)
															{
																$transmuted3 = 86;
															}
															else if($finalgrade3 >= 74.40 )
															{
																$transmuted3 = 84;
															}
															else if($finalgrade3 >= 72.80)
															{
																$transmuted3 = 83;
															}
															else if($finalgrade3 >= 71.20)
															{
																$transmuted3 = 82;
															}
															else if($finalgrade3 >= 69.60)
															{
																$transmuted3 = 81;
															}
															else if($finalgrade3 >= 68.00)
															{
																$transmuted3 = 80;
															}
															else if($finalgrade3 >= 66.40)
															{
																$transmuted3 = 79;
															}
															else if($finalgrade3 >= 64.80)
															{
																$transmuted3 = 78;
															}
															else if($finalgrade3 >= 63.20)
															{
																$transmuted3 = 77;
															}
															else if($finalgrade3 >= 61.60)
															{
																$transmuted3 = 76;
															}
															else if($finalgrade3 >= 60.00)
															{
																$transmuted3 = 75;
															}
															else if($finalgrade3 >= 56.00)
															{
																$transmuted3 = 74;
															}
															else if($finalgrade3 >= 52.00)
															{
																$transmuted3 = 73;
															}
															else if($finalgrade3 >= 48.00)
															{
																$transmuted3 = 72;
															}
															else if($finalgrade3 >= 44.00)
															{
																$transmuted3 = 71;
															}
															else if($finalgrade3 >= 40.00)
															{
																$transmuted3 = 70;
															}
															else if($finalgrade3 >= 36.00)
															{
																$transmuted3 = 68;
															}
															else if($finalgrade3 >= 32.00)
															{
																$transmuted3 = 67;
															}
															else if($finalgrade3 >= 28.00)
															{
																$transmuted3 = 67;
															}
															else if($finalgrade3 >= 24.00)
															{
																$transmuted3 = 66;
															}
															else if($finalgrade3 >= 20.00)
															{
																$transmuted3 = 65;
															}
															else if($finalgrade3 >= 16.00)
															{
																$transmuted3 = 64;
															}
															else if($finalgrade3 >= 12.00)
															{
																$transmuted3 = 63;
															}
															else if($finalgrade3 >= 8)
															{
																$transmuted3 = 62;
															}
															else if($finalgrade3 >= 4)
															{
																$transmuted3 = 61;
															}
															else
															{
																$transmuted3 = 60;
															}
?>
<?php
//transmuted4
															if($finalgrade4 == 100)
															{
																$transmuted4 = 100;
															}
															else if($finalgrade4 >= 98.40)
															{
																$transmuted41 = 99;
															}
															else if($finalgrade4 >= 96.80)
															{
																$transmuted4 = 98;
															}
															else if($finalgrade4 >= 95.20)
															{
																$transmuted4 = 97;
															}
															else if($finalgrade4 >= 93.69)
															{
																$transmuted4 = 96;
															}
															else if($finalgrade4 >=92.00)
															{
																$transmuted4 = 95;
															}
															else if($finalgrade4 >= 90.40)
															{
																$transmuted4 = 94;
															}
															else if($finalgrade4 >= 88.80)
															{
																$transmuted4 = 93;
															}
															else if($finalgrade4 >= 87.20)
															{
																$transmuted4 = 92;
															}
															else if($finalgrade4 >= 85.60)
															{
																$transmuted4 = 91;
															}
															else if($finalgrade4 >= 84.00)
															{
																$transmuted4 = 90;
															}
															else if($finalgrade4 >= 82.40)
															{
																$transmuted4 = 89;
															}
															else if($finalgrade4 >= 80.80)
															{
																$transmuted4 = 88;
															}
															else if($finalgrade4 >= 79.20)
															{
																$transmuted4 = 87;
															}
															else if($finalgrade4 >= 77.60)
															{
																$transmuted4 = 86;
															}
															else if($finalgrade4 >= 74.40 )
															{
																$transmuted4 = 84;
															}
															else if($finalgrade4 >= 72.80)
															{
																$transmuted4 = 83;
															}
															else if($finalgrade4 >= 71.20)
															{
																$transmuted4 = 82;
															}
															else if($finalgrade4 >= 69.60)
															{
																$transmuted4 = 81;
															}
															else if($finalgrade4 >= 68.00)
															{
																$transmuted4 = 80;
															}
															else if($finalgrade4 >= 66.40)
															{
																$transmuted4 = 79;
															}
															else if($finalgrade4 >= 64.80)
															{
																$transmuted4 = 78;
															}
															else if($finalgrade4 >= 63.20)
															{
																$transmuted4 = 77;
															}
															else if($finalgrade4 >= 61.60)
															{
																$transmuted4 = 76;
															}
															else if($finalgrade4 >= 60.00)
															{
																$transmuted4 = 75;
															}
															else if($finalgrade4 >= 56.00)
															{
																$transmuted4 = 74;
															}
															else if($finalgrade4 >= 52.00)
															{
																$transmuted4 = 73;
															}
															else if($finalgrade4 >= 48.00)
															{
																$transmuted4 = 72;
															}
															else if($finalgrade4 >= 44.00)
															{
																$transmuted4 = 71;
															}
															else if($finalgrade4 >= 40.00)
															{
																$transmuted4 = 70;
															}
															else if($finalgrade4 >= 36.00)
															{
																$transmuted4 = 68;
															}
															else if($finalgrade4 >= 32.00)
															{
																$transmuted4 = 67;
															}
															else if($finalgrade4 >= 28.00)
															{
																$transmuted4 = 67;
															}
															else if($finalgrade4 >= 24.00)
															{
																$transmuted4 = 66;
															}
															else if($finalgrade4 >= 20.00)
															{
																$transmuted4 = 65;
															}
															else if($finalgrade4 >= 16.00)
															{
																$transmuted4 = 64;
															}
															else if($finalgrade4 >= 12.00)
															{
																$transmuted4 = 63;
															}
															else if($finalgrade4 >= 8)
															{
																$transmuted4 = 62;
															}
															else if($finalgrade4 >= 4)
															{
																$transmuted4 = 61;
															}
															else
															{
																$transmuted4 = 60;
															}
						?>   
                
															<td><?php echo $transmuted1; ?></a></td>
															<td><?php echo $transmuted2; ?></a></td>
															<td><?php echo $transmuted3; ?></a></td>
															<td><?php echo $transmuted4; ?></a></td> 
															<td>
															<?php 
															echo $aveage=($transmuted1+$transmuted2+$transmuted3+$transmuted4)/4;
															?>
															</td>   
															<td>
															<?php if($aveage > 74.5){?>
															Passed
															<?php } else if($aveage < 74.4 ){?>
															Failed
															<?php } ?>
															</td>  
   	<td>	<a href="function/addgrades.php?section=<?php echo $sectionid;?>&totalaverage=<?php echo $aveage;?>&studentid=<?php echo $idniya;?>&fullname=<?php echo $fullname;?>&photo=<?php echo $photo;?>&isset=getit">
	<button type="button" class="btn btn-info btn-xs">View</button></a>
						</td> 															
						</tr>
					
					<?php } ?>
                      </tbody>
                    </table> 
					
			<?php	} else {?>
					<!---------==================by  quarter =========--------->
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>  
                          <th style="width: 15%">Learners' Names</th>
                          <th>PERFORMANCE TASK (40%)</th> 
                          <th>WRITTEN TASK (20%)</th>						  
                          <th>Quarterly Assessment (40%)</th> 
                          <th>Initial Grade</th> 
                          <th>Quarterly Grade</th>  
						  <th>Remarks</th>  
 				 
						  
                        </tr>
                      </thead>


                      <tbody>
					  		<?php 
								$query = mysqli_query($conn, "SELECT * FROM `usr_student` where section_id='".$sectionid."' AND st_entry='Active';") or die(mysqli_error());
								while($fetch = mysqli_fetch_array($query))
								{
										$idniya = $fetch['st_id']; 
										$fullname= $fetch['firstname'].' '.$fetch['lastname']; 
							?>	
							
							
                        <tr>
                          <td><?php echo $fullname;?></td> 
						  
							<td style="font-size:20px;">
					<?php 
$queryforbigscore = mysqli_query($conn, "SELECT MAX(score) FROM players WHERE quarter='".$_GET['quarter']."';") or die(mysqli_error());
while($big = mysqli_fetch_array($queryforbigscore))
{
$daks=$big['MAX(score)']; 
}
$querysascore = mysqli_query($conn, "SELECT score FROM players WHERE username='".$idniya."' and quarter='".$_GET['quarter']."';") or die(mysqli_error());
	
if(mysqli_num_rows($querysascore) > 0)
{
while($rowes = mysqli_fetch_assoc($querysascore))
{

$eachscore=$rowes['score']; 
echo $performancevalue = $eachscore / $daks	* 40;					 
} 
}
else
{
$performancevalue='0';
}

?>
							</td> 
                       <td>
						 <?php 
						 
						$queryass = mysqli_query($conn, "SELECT  SUM(`score`), SUM(`items`) FROM `ct_assignment_records` where student='".$idniya."' and quarter='".$_GET['quarter']."';") or die(mysqli_error());
						 
						while($rowass = mysqli_fetch_array($queryass))
						{ 
						@$scoresaass = $rowass['SUM(`score`)']; 
					    @$itemsaass = $rowass['SUM(`items`)']; 
						}
						 
						?> 
						
						<?php 
						 
						$queryquiz = mysqli_query($conn, "SELECT  SUM(`score`), SUM(`items`) FROM `ct_quiz_records` where student='".$idniya."' and quarter='".$_GET['quarter']."';") or die(mysqli_error());
						 
						while($rowquiz = mysqli_fetch_array($queryquiz))
						{ 
						@$quizscore = $rowquiz['SUM(`score`)']; 
					    @$quizitems = $rowquiz['SUM(`items`)']; 
						}
						
						$totalitems= $itemsaass + $quizitems;
						$totalscore= $scoresaass + $quizscore;
						
						if($totalscore==null && $totalitems==null)
						{
							$scoresaassquiz ='0';
						}else
						{ 
							 
							echo $scoresaassquiz = $totalscore / $totalitems * 40;
						}
						
						
						?>
						</td>  
                          <td>
						  <?php 
						$queryexam = mysqli_query($conn, "SELECT SUM(`score`), SUM(`items`) FROM `ct_exam_records` where student='".$idniya."' and quarter='".$_GET['quarter']."';") or die(mysqli_error());
					 
						while($rowexam = mysqli_fetch_array($queryexam))
						{ 
						@$examscore = $rowexam['SUM(`score`)']; 
						@$examitems = $rowexam['SUM(`items`)']; 
						}
						if($examscore=='' && $examitems=='')
						{
						 $scoreinexam ='0';
						}else
						{
							 
							echo $scoreinexam = $examscore / $examitems * 20;
						}
						?>
						  
						  </td>  
                          <td> 
						  <?php  
						   //$finalgrade= 0 + 0 + 0;
						   $finalgrade= $performancevalue + $scoreinquiz + $scoreinexam;
						  
						  //transmuted
															if($finalgrade == 100)
															{
																$transmuted = 100;
															}
															else if($finalgrade >= 98.40)
															{
																$transmuted = 99;
															}
															else if($finalgrade >= 96.80)
															{
																$transmuted = 98;
															}
															else if($finalgrade >= 95.20)
															{
																$transmuted = 97;
															}
															else if($finalgrade >= 93.69)
															{
																$transmuted = 96;
															}
															else if($finalgrade >=92.00)
															{
																$transmuted = 95;
															}
															else if($finalgrade >= 90.40)
															{
																$transmuted = 94;
															}
															else if($finalgrade >= 88.80)
															{
																$transmuted = 93;
															}
															else if($finalgrade >= 87.20)
															{
																$transmuted = 92;
															}
															else if($finalgrade >= 85.60)
															{
																$transmuted = 91;
															}
															else if($finalgrade >= 84.00)
															{
																$transmuted = 90;
															}
															else if($finalgrade >= 82.40)
															{
																$transmuted = 89;
															}
															else if($finalgrade >= 80.80)
															{
																$transmuted = 88;
															}
															else if($finalgrade >= 79.20)
															{
																$transmuted = 87;
															}
															else if($finalgrade >= 77.60)
															{
																$transmuted = 86;
															}
															else if($finalgrade >= 74.40 )
															{
																$transmuted = 84;
															}
															else if($finalgrade >= 72.80)
															{
																$transmuted = 83;
															}
															else if($finalgrade >= 71.20)
															{
																$transmuted = 82;
															}
															else if($finalgrade >= 69.60)
															{
																$transmuted = 81;
															}
															else if($finalgrade >= 68.00)
															{
																$transmuted = 80;
															}
															else if($finalgrade >= 66.40)
															{
																$transmuted = 79;
															}
															else if($finalgrade >= 64.80)
															{
																$transmuted = 78;
															}
															else if($finalgrade >= 63.20)
															{
																$transmuted = 77;
															}
															else if($finalgrade >= 61.60)
															{
																$transmuted = 76;
															}
															else if($finalgrade >= 60.00)
															{
																$transmuted = 75;
															}
															else if($finalgrade >= 56.00)
															{
																$transmuted = 74;
															}
															else if($finalgrade >= 52.00)
															{
																$transmuted = 73;
															}
															else if($finalgrade >= 48.00)
															{
																$transmuted = 72;
															}
															else if($finalgrade >= 44.00)
															{
																$transmuted = 71;
															}
															else if($finalgrade >= 40.00)
															{
																$transmuted = 70;
															}
															else if($finalgrade >= 36.00)
															{
																$transmuted = 68;
															}
															else if($finalgrade >= 32.00)
															{
																$transmuted = 67;
															}
															else if($finalgrade >= 28.00)
															{
																$transmuted = 67;
															}
															else if($finalgrade >= 24.00)
															{
																$transmuted = 66;
															}
															else if($finalgrade >= 20.00)
															{
																$transmuted = 65;
															}
															else if($finalgrade >= 16.00)
															{
																$transmuted = 64;
															}
															else if($finalgrade >= 12.00)
															{
																$transmuted = 63;
															}
															else if($finalgrade >= 8)
															{
																$transmuted = 62;
															}
															else if($finalgrade >= 4)
															{
																$transmuted = 61;
															}
															else
															{
																$transmuted = 60;
															}
														echo $finalgrade;
						  ?> 
						  </td>  
                         	<td><?php echo $transmuted; ?></td> 
                      <td>
						<?php
						if($totalaverage < 74.4)
						{
						    echo 'FAILED';
						}else if($totalaverage > 74.5)
						{
							echo 'PASSED'; 
						} 
						?>
						</td>
						
						</tr>
								<?php } ?>
                      </tbody>
                    </table> 
					<!---------==================by  quarter =========--------->
					<?php } ?>                 
				 </div> 

					 
              </div>
            </div>
              </div>
			  <br>
			  
<?php 
$querysastudent = mysqli_query($conn, "SELECT * FROM `usr_student` where section_id='$sectionid' AND st_entry='Active';") or die(mysqli_error());
while($havefun = mysqli_fetch_array($querysastudent))
{
$idsastudent = $havefun['st_id'];  
?>	 
<div class="modal fade" id="addwrittentask<?php echo $idsastudent;?>" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-sm">
<div class="modal-content"> 
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
</button>
<h4 class="modal-title" id="myModalLabel2">Add written task score</h4>
</div>
<div class="modal-body">  
<br>
<form class="form-horizontal form-label-left input_mask" action="function/add_addwrittenscore.php" method="POST"> 
<div class="col-md-12 col-sm-12 col-xs-12 form-group">
<input type="hidden" class="form-control" id="" name="idsastudent" value="<?php echo $idsastudent;?>" placeholder="ID" required>
<label>Score</label>
<input type="text" class="form-control" id="" name="writtengrade" value="" placeholder="Enter here" required>
<input type="hidden" class="form-control" id="" name="section_id" value="<?php echo $sectionid;?>" placeholder="section_id" required>
<input type="hidden" class="form-control" id="" name="quarter" value="<?php echo $_GET['quarter'];?>" placeholder="section_id" required>
</div> 
</div>
<div class="modal-footer">	
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<button type="submit" name="btnwritten" class="btn btn-primary">Submit</button>
</div>
</form> 
</div>
</div>
</div>
<!-- /modals -->
<?php } ?>	
		  
<?php 
$editquery = mysqli_query($conn, "SELECT * FROM `ct_written_task` WHERE 1;") or die(mysqli_error());
while($wana = mysqli_fetch_array($editquery))
{
$scores = $wana['score'];  
$written_id = $wana['written_id'];  
?>	 
<div class="modal fade" id="editwrittentask<?php echo $written_id;?>" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-sm">
<div class="modal-content"> 
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
</button>
<h4 class="modal-title" id="myModalLabel2">Update written task score</h4>
</div>
<div class="modal-body">  
<br>
<form class="form-horizontal form-label-left input_mask" action="function/add_addwrittenscore.php" method="POST"> 
<div class="col-md-12 col-sm-12 col-xs-12 form-group">
 <label>Score</label>
 <input type="hidden" class="form-control" id="" name="written_id" value="<?php echo $written_id;?>" placeholder="section_id" required>
 
<input type="text" class="form-control" id="" name="writtengrade" value="<?php echo $scores;?>" placeholder="Enter here" required>
<input type="hidden" class="form-control" id="" name="section_id" value="<?php echo $sectionid;?>" placeholder="section_id" required>
<input type="hidden" class="form-control" id="" name="quarter" value="<?php echo $_GET['quarter'];?>" placeholder="section_id" required>
</div> 
</div>
<div class="modal-footer">	
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<button type="submit" name="btnwrittenedit" class="btn btn-primary">Submit</button>
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