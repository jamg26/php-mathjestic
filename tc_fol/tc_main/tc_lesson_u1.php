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
                    <h2>Section <small> </small></h2>
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
                <div class="buttons">
                      <!-- Standard button -->
                   
   
		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#bs-example-modal-sm">Create Quiz</button>
					  
                      <br/>
                      <br/>
 
                    </div>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr> 
                          <th>Name</th> 
                          <th>Description</th> 
                          <th>Total Item</th>  
                          <th>Action</th> 
                        </tr>
                      </thead>


                      <tbody>
					  		<?php 
								$query = mysqli_query($conn, "SELECT * FROM `clm_quizzes`;") or die(mysqli_error());
								while($fetch = mysqli_fetch_array($query))
								{
										$id = $fetch['quiz_id'];
										$name = $fetch['name'];
										$description = $fetch['description'];
										$total_Items = $fetch['total_Item'];
										$status = $fetch['status']; 
							?>	
                        <tr>
                          <td><?php echo $name;?></td>  
                          <td><?php echo $description;?></td>  
                          <td><?php echo $total_Items;?></td>    
                          <td>
						  
						    <a href="tc_ct_view_quiz.php?quiz_id=<?php echo $id;?>&ahekdnsakmak8dasjkn34df" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                             
                            <a href="#edita<?php echo $id;?>" class="btn btn-primary btn-xs" data-toggle="modal"><i class="fa fa-pencil"></i> Edit </a>
                          
                            <a href="function/deletequiz.php?idquiz=<?php echo $id;?>" onclick="return confirm('Do you want to delete?');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
								<?php } ?>
                      </tbody>
                    </table>
                  </div>
              </div>
            </div>
		  
  
                 <div class="modal fade" id="bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Add Quiz</h4>
                        </div>
                        <div class="modal-body">  
                    <br>
                    <form class="form-horizontal form-label-left input_mask" action="function/addquiz.php" method="POST">

                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="qtitle" placeholder="Quiz Title" required>
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>
						<div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="number" class="form-control has-feedback-left" id="inputSuccess2" name="totem" placeholder="Total Item" required>
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>
					  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="desc" placeholder="Description" required>
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>  
					   </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" name="btnquiz" class="btn btn-primary">Submit</button>
                        </div>
					</form> 
                      </div>
                    </div>
                  </div>
				   		<?php 
								$query = mysqli_query($conn, "SELECT * FROM `clm_quizzes`;") or die(mysqli_error());
								while($fetch = mysqli_fetch_array($query))
								{
										$id = $fetch['quiz_id'];
										$name = $fetch['name'];
										$description = $fetch['description'];
										$total_Items = $fetch['total_Item'];
										$status = $fetch['status']; 
								 
							?>		
				  	<div class="modal fade" id="edita<?php echo $id;?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Edit Quiz</h4>
                        </div>
                        <div class="modal-body">  
                    <br>
                    <form class="form-horizontal form-label-left input_mask" action="function/editquiz.php" method="POST">

                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="qtitle" value="<?php echo $name;?>" placeholder="Quiz Title" required>
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>
						<div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="number" class="form-control has-feedback-left" id="inputSuccess2" name="totem" value="<?php echo $total_Items;?>" placeholder="Total Item" required>
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>
					  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="desc"  value="<?php echo $description;?>" placeholder="Description" required>
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>
					  
					   </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" name="btnquiz" class="btn btn-primary">Submit</button>
                        </div>
					</form> 
                      </div>
                    </div>
                  </div>
                  <!-- /modals -->  
								<?php } ?>
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