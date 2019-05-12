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
		
		<!-------------------------------------------------------------------------------------------------------------------------------------------->
        <!-- page content -->
		
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
           		  <?php 
			$query = mysqli_query ($conn, "SELECT * FROM `unit` WHERE `unit_number`='".$_GET['view_unit']."';") or die (mysqli_error());
			$fetch = mysqli_fetch_array ($query);
			?>
			<div class="title_left">
                <h1><?php echo $fetch['unit_number'];?> || <?php echo $fetch['unit_title'];?> </h1>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                 
                   
                   <a href="st_pdf_lesson.php?view_chapter=<?php echo $_GET['view_chapter'];?>&view_unit=<?php echo $_GET['view_unit'];?>"  class="btn btn-success btn-lg"></i><i class="fa fa-folder-open-o"></i> View PDF Lessons </a>
				
               
                </div>
              </div> 
            </div>
			 <br/>
			 <br/>
			 <br/>
			 <br/>
			 <br/>
			 
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
			 
                <div class="x_panel"> 
                  <div class="x_content">
			<?php 
			$query = mysqli_query ($conn, "SELECT * FROM unit_chapter WHERE chapter_id = '".$_GET['view_chapter']."' AND unit_id='".$_GET['view_unit']."';") or die (mysqli_error());
			$fetch = mysqli_fetch_array ($query);
			?>
					<h1><?php echo $fetch['chapter_number'];?> <span style="font-size:25px;"> <?php echo $fetch['chapter_title'];?></span> </h1>  
                    <!-- Tabs -->
                    <div id="wizard_verticle" class="form_wizard wizard_verticle">
					 
                      <ul class="list-unstyled wizard_steps">
					    <br/>
							 <?php 
								$count=1;
								$querys = mysqli_query($conn, "SELECT * FROM `unit_lesson` WHERE `unitid`='".$_GET['view_unit']."' AND `chapterid`='".$_GET['view_chapter']."';") or die(mysqli_error());
								while($fetchs = mysqli_fetch_array($querys))
								{
										$lesud = $fetchs['lesson_id'];
										$lesson = $fetchs['lesson_content']; 
										$chapterayde = $fetchs['chapterid']; 
							 
								if(preg_match_all('/\d+/', $chapterayde, $numbers))
								$lastnum = end($numbers[0]);
								 
							?> 
                        <li>
						
                          <a href="#step-<?php echo $lesud;?>">
                            <span class="step_no"><?php echo $lastnum;?>.<?php echo $count++;?></span>
                          </a>
                        </li> 
                        <li> 
							<?php } ?>
                      </ul>
					  
						<?php 
							 
								$querys = mysqli_query($conn, "SELECT * FROM `unit_lesson` WHERE `unitid`='".$_GET['view_unit']."' AND `chapterid`='".$_GET['view_chapter']."';") or die(mysqli_error());
								while($fetchs = mysqli_fetch_array($querys))
								{
										$lesud = $fetchs['lesson_id'];
										$lessontitle = $fetchs['lesson_title']; 
										$lessoncontent = $fetchs['lesson_content']; 
										$types = $fetchs['file_type']; 
								
							?> 
                      <div id="step-<?php echo $lesud;?>">
					    <br/>
                        <h2 class="StepTitle"><?php echo $lessontitle;?></h2>
                        <p> 
						
						<?php echo $lessoncontent;?>
						<?php if ($types=='PDF'){?>
						 <a href="tc_dll_pdf.php?view_file=<?php echo $lessoncontent;?>" class="btn btn-success btn-xs" target="popup" onclick="window.open('tc_dll_pdf.php?view_file=<?php echo $lessoncontent;?>','name','width=900,height=700')"><i class="fa fa-eye"></i> View</a>
						<?php }else{ ?>
						<?php } ?>
						</p> 
                      </div> 
								<?php } ?>
                    </div>
                    <!-- End SmartWizard Content -->

                  </div>
                </div>
              </div>
	 
                </div>
              </div>
			  
			  
            </div>
          </div>	  
        </div>
		
        <!-- /page content -->
		
                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Add lesson</h4>
                        </div>
                       <div class="modal-body">  
                    <br>
					
  <form class="form-horizontal form-label-left input_mask" action="function/tc_add_lesson.php" method="POST"> 		
 <div class="col-md-4 col-sm-4 col-xs-12">   
 <div class="form-group">
<label class="control-label" for="inputEmail">Lesson Title:</label>
<div class="controls">	
 <input type="text" class="form-control" name="title" placeholder="Enter here" required>
</div>
</div>
</div>
                  
                    <div class="x_panel">  
                <div class="x_content">
                  <div id="alerts"></div>
              
                   
                  <textarea name="content" placeholder="Place the content here" class="form-control" row="100" id="descr" style="margin: 0px; width: 823px; height: 324px;" required></textarea>
                 
					<?php 
			$query = mysqli_query ($conn, "SELECT * FROM unit_chapter WHERE chapter_number = '".$_GET['view_chapter']."' AND unit_id='".$_GET['view_unit']."';") or die (mysqli_error());
			$fetch = mysqli_fetch_array ($query);
			?>
					   
                  
				  <input type="hidden" class="form-control" value="<?php echo $fetch['chapter_number'];?>" name="chapterid" size="60" required>
				  <input type="hidden" class="form-control" value="<?php echo $fetch['unit_id'];?>" name="unitid" size="60" required>
                  	

					</div>  
					   </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" name="btnlesson" class="btn btn-primary">Submit</button>
                        </div>
					</form> 
                      </div>

                      </div>
                    </div>
                  </div>
		<!-------------------------------------------------------------------------------------------------------------------------------------------->
		
		
		
        <!-- footer content -->
        <?php include ("include/st_footer.php");
        ?>
        <!-- /footer content -->
      </div>
    </div>
    <!-- script content -->
    <?php include ("include/st_script.php");
    ?>
    <!-- /script content -->
  </body>
</html>