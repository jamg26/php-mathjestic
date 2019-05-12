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
                    <h2>Add<small>QUESTION</small></h2>
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
                   
   
		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#bs-example-modal-lg">ADD QUESTION</button>
					  
                      <br/>
                      <br/>
 
                    </div>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr> 
                          <th>Question Text</th> 
                          <th>Question Type</th> 
                          <th>Answer</th>   
                          <th>Action</th> 
                        </tr>
                      </thead>


                      <tbody>
					  		<?php 
								$query = mysqli_query($conn, "SELECT * FROM `clm_question` where question_id='".$_GET['question_id_is']."' AND quiz_id='".$_GET['quiz_id_is']."';") or die(mysqli_error());
								while($fetch = mysqli_fetch_array($query))
								{
										$id = $fetch['question_id'];
										$text = $fetch['question_title'];
										$type = $fetch['question_type'];
										$tama = $fetch['answer']; 
							?>	
                        <tr>
                          <td><?php echo $text;?></td>
							<?php if ($type == '1'){?>						  
                          <td>Multiple Choice</td>
							<?php }else{ ?>	
							<td>True or False</td>
							<?php } ?>	
							
                          <td><?php echo $tama;?></td>    
                          <td>
						  
						    <a href="#viewquestion<?php echo $id;?>" class="btn btn-primary btn-xs" data-toggle="modal"  class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                             
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