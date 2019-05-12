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
                <h3>My Examination <small>List </small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Examination</h2>
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

                        <p>Click the action button named "Take Examination" as the teacher give the exam.</p>

                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr> 
                          <th style="width: 20%">Examination Name</th> 
                          <th style="width: 20%">Description</th> 
                          <th style="width: 20%">Total Items</th> 
                          <th style="width: 20%">Action</th> 
                        </tr>
                      </thead>
                      <tbody>
								<?php
								$query = mysqli_query ($conn, "SELECT * FROM usr_student WHERE st_id = '".$_SESSION['st_id']."' ") or die (mysqli_error());
								$fetch = mysqli_fetch_array ($query);
								
								$queryes = mysqli_query($conn, "SELECT * FROM `ct_addto` where sectionID='".$fetch['section_id']."';") or die(mysqli_error());
								while($rows = mysqli_fetch_array($queryes))
								{								
								$querys = mysqli_query($conn, "SELECT * FROM `ct_examination` where exam_id='".$rows['examid']."';") or die(mysqli_error());
								while($row = mysqli_fetch_array($querys))
								{
								  $examid=$row['exam_id'];
								?>
								<tr>
								
								<td><?php echo $row['name'];?></td>
								<td><?php echo $row['description'];?></td>
								<td><?php echo $row['total_Item'];?></td>
											<?php
								$queryselect = mysqli_query($conn, "SELECT * FROM ct_exam_records where student='".$_SESSION['st_id']."' and exam_id='$examid';") or die(mysqli_error());
								if($rower = mysqli_fetch_array($queryselect))
								{ ?>
							<td> <a class="btn btn-warning btn-xs"> You Already Take the quiz </a></td>
								 <?php }else{?>
								<td> <a href="../st_main/st_at_examination_take.php?exam_id=<?php echo $row['exam_id'];?>" class="btn btn-primary btn-xs"> Take Examination </a></td>
								   <?php } ?>
								</tr> 
							    <?php } } ?>
                        
                        
                      </tbody>
                    </table>
                    <!-- end project list -->
					
					

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