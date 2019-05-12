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
		
		<!-------------------------------------------------------------------------------------------------------------------------------------------->
          <!-- page content -->
        <div class="right_col" role="main">
				  <?php 
			$query = mysqli_query ($conn, "SELECT * FROM unit WHERE unit_number = '".$_GET['unit_number']."' ") or die (mysqli_error());
			$fetch = mysqli_fetch_array ($query);
			?>
			<div class="title_left">
                <h3><?php echo $fetch['unit_number'];?> || <?php echo $fetch['unit_title'];?></h3>
              </div>
			  <div class="clearfix"></div>
 <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Chapter list </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li> 
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content"> 
                    <div class="table-responsive">
                       <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                          <tr class="headings">
                          
                            <th class="column-title">Chapter Number </th> 
                            <th class="column-title">Title </th>  
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th> 
                          </tr>
                        </thead>

                             <tbody>
							 <?php 
								$query = mysqli_query($conn, "SELECT * FROM `unit_chapter` where unit_id='".$_GET['unit_number']."';") or die(mysqli_error());
								while($fetch = mysqli_fetch_array($query))
								{
										$id = $fetch['chapter_id'];
										$chapter = $fetch['chapter_number'];
										$title = $fetch['chapter_title'];
								
							?> 
                            <td class=" "><?php echo $chapter;?></td>  
                            <td class=" "><?php echo $title;?></td>  
                            <td class=" last">	
							<a href="tc_lesson_unit_open_chapter.php?view_chapter=<?php echo $chapter;?>&view_unit=<?php echo $_GET['unit_number'];?>" class="btn btn-success btn-xs" data-toggle="modal"><i class="fa fa-eye"></i> View </a>
							
							<a href="#edita<?php echo $id;?>" class="btn btn-primary btn-xs" data-toggle="modal"><i class="fa fa-pencil"></i> Edit </a>
                          
                            <a href="function/tc_delete_chapter.php?chapter=<?php echo $id;?>&url=<?php echo $_GET['unit_number'];?>" onclick="return confirm('Do you want to delete?');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          
							</td>
                          </tr>
								<?php }?>
                        </tbody>
                      </table>
                    </div>
					
                  </div>
				   
				   
                </div>
				
              </div>
			   <div class="col-md-3 col-sm-3 col-xs-12"> 
				<div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Add <small>Chapter</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li> 
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                    <div class="x_content">
					<form action="function/tc_add_chapter.php" method="POST"> 
						<div class="col-md-12 col-sm-12 col-xs-12 form-group">
						<label>Chapter number</label>
                         <div class="input-group">
                            <span class="input-group-btn">
                                              <button type="button" class="btn btn-default">Chapter</button>
                                          </span> 
                        <input type="hidden" class="form-control" value="<?php echo $_GET['unit_number'];?>" name="unitid" id="inputSuccess2" placeholder="0" required="required">
				<?php
				$count = mysqli_query($conn,"SELECT * FROM `unit_chapter` where unit_id='".$_GET['unit_number']."';");
				$chapternumber = mysqli_num_rows($count);  
				?>		
			<input type="number" value="<?php echo $chapternumber + 1;?>" class="form-control" name="chapter" id="inputSuccess2" placeholder="0" required="required">
                          </div>
                      </div>
					  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
						<label>Chapter Title</label>
                        <input type="text" class="form-control" name="title" id="inputSuccess2" placeholder="Title" required="required"> 
                      </div>
						<div class="col-md-12 col-sm-2 col-xs-12" style="text-align:center;">
						<br/>
						<button type="submit" name="addunit" class="btn btn-default">Submit</button>
						 </div>
					</form>
                  </div>
                </div>
                </div> 
			</div>
			<!-- page content -->
			
							<?php 
								$querys = mysqli_query($conn, "SELECT * FROM `unit_chapter` where unit_id='".$_GET['unit_number']."';") or die(mysqli_error());
								while($fetch = mysqli_fetch_array($querys))
								{
										$ids = $fetch['chapter_id'];
										$chapters = $fetch['chapter_number'];
										$titles = $fetch['chapter_title']; 
								 
							?>		
				  	<div class="modal fade" id="edita<?php echo $ids;?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Edit Chapter</h4>
                        </div>
                        <div class="modal-body">  
                    <br>
                    <form class="form-horizontal form-label-left input_mask" action="function/tc_update_chapter.php" method="POST">

                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="hidden" class="form-control has-feedback-left" id="inputSuccess2" name="unitid" value="<?php echo $_GET['unit_number'];?>" placeholder="Unit" required>
                        <input type="hidden" class="form-control has-feedback-left" id="inputSuccess2" name="id" value="<?php echo $ids;?>" placeholder="Unit" required>
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="chapter" value="<?php echo $chapters;?>" placeholder="Chapter" required>
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>
						<div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="title" value="<?php echo $titles;?>" placeholder="Title" required>
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div> 
					  
					   </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" name="btnchapter" class="btn btn-primary">Submit</button>
                        </div>
					</form> 
                      </div>
                    </div>
                  </div>
                  <!-- /modals -->  
								<?php } ?>
		<!-------------------------------------------------------------------------------------------------------------------------------------------->
		
		
		
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