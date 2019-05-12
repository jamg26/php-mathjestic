<!-- header content -->
 <?php include ("include/st_header.php");
 ?>
 <!-- header content -->
  <body class="nav-md footer_fixed">
    <?php
	$id = (int) $_SESSION['st_id'];
    $query = mysqli_query ($conn, "SELECT * FROM usr_student WHERE st_id = '$id' ") or die (mysqli_error());
    $fetch = mysqli_fetch_array ($query);
    ?>
    <div class="container body">
      <div class="main_container">
	    <!-- sidebar content -->
        <?php include ("include/st_sidebar.php");
        ?>
		<!-- sidebar content -->
        <!-- top navigation -->
        <?php include ("include/st_navigation.php");
        ?>
        <!-- /top navigation -->
			
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>My Quizzes <small>Listing design</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Projects</h2>
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

                    <div class="col-xs-3">
                      <!-- required for floating -->
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs tabs-left">
                        <?php $count=0;
						$q_id=$_GET['exam_id'];
							$querys = mysqli_query($conn, "SELECT * FROM `ct_exam_questions`where exam_id='$q_id';") or die(mysqli_error());
							while($row = mysqli_fetch_array($querys))
							{
								$question_id=$row['question_id'];
								
							 $count++;
							 if($count=='1')
							 {
								 $aa='active';
							 }
							 else
							 {
								 $aa='';
							 }
							?>
						<li class="<?php echo $aa; ?>"><a href="#aa<?php echo $question_id; ?>" data-toggle="tab" aria-expanded="true"><?php echo $count;?></a></li>
						<?php } ?>
						<br/>
						<form action="function/st_fc_examination/st_submit_answer.php?exam_id=<?php echo $q_id; ?>" method="POST">
						<input type="hidden" name="studentid" value="<?php echo $_SESSION['st_id']; ?>"/>
						<button type="submit" name="btnsubmit" class="btn btn-primary">Submit</button>
                       </ul>
                    </div>

                    <div class="col-xs-9">
                      <!-- Tab panes -->
                      <div class="tab-content">
					   <?php $count=0;
						$q_id=$_GET['exam_id'];
							$querys = mysqli_query($conn, "SELECT * FROM `ct_exam_questions` where exam_id='$q_id';") or die(mysqli_error());
							while($row = mysqli_fetch_array($querys))
							{
								$question=$row['question'];
								$question_id=$row['question_id'];
								$correct_answer=$row['correct_answer'];
								$question_type=$row['question_type'];
								$a=$row['a'];
								$b=$row['b'];
								$c=$row['c'];
								$d=$row['d'];
								
							 $count++;
							 if($count=='1')
							 {
								 $aa='active';
							 }
							 else
							 {
								 $aa=' ';
							 }
							 
							 if($question_type=='1')
							 {
								?>
								
								<div class="tab-pane <?php echo $aa; ?>" id="aa<?php echo $question_id; ?>">
								  <p class="lead">Home tab</p>
								  <p>Q:<?php echo $question; ?></p><br>
								 <input name="<?php echo $question_id; ?>" value="A" type="radio" required>  <b>a:<?php echo $a; ?></b><br>
								 <input name="<?php echo $question_id; ?>" value="B" type="radio" required>  <b>b:<?php echo $b; ?></b><br>
								  <input name="<?php echo $question_id; ?>" value="C" type="radio" required> <b>b:<?php echo $c; ?></b><br>
								  <input name="<?php echo $question_id; ?>" value="D" type="radio" required> <b>d:<?php echo $d; ?></b><br>
								</div>
						
								<?php								
							 }
							 else
							 {
								 ?>
								 <div class="tab-pane <?php echo $aa; ?>" id="aa<?php echo $question_id; ?>">
								  <p class="lead">Home tab</p>
								  <p>Q:<?php echo $question; ?></p>  
								  <input name="<?php echo $question_id; ?>" value="A" type="radio" required> <b>True </b><br/>
								  <input name="<?php echo $question_id; ?>" value="B" type="radio" required> <b>False</b><br/> 
								   
 
								</div>
								 
								 <?php
								 
							 }
							?>
                        
							<?php } ?>
							</form>
							</div>
							
                    </div>

                    <div class="clearfix"></div>

                  </div>
				  

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
		
        <!-- /page content -->	
        <!-- footer content -->
        <?php include ("include/st_footer.php");
        ?>
        <!-- /footer content -->
      </div>
    </div>
    <!-- script content -->
    <?php include ("include/st_script.php"); ?>
    <!-- /script content -->
  </body>
</html>