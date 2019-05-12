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
								$query = mysqli_query($conn, "SELECT * FROM `ct_activity_questions` where activity_id='".$_GET['activity_id']."';") or die(mysqli_error());
								while($fetch = mysqli_fetch_array($query))
								{
										$id = $fetch['question_id'];
										$text = $fetch['question'];
										$type = $fetch['question_type'];
										$tama = $fetch['correct_answer']; 
							?>	
                        <tr>
                          <td><?php echo $text;?></td>
							<?php if ($type == '1'){?>						  
                          <td>Multiple Choice</td>
								<?php }else if($type == '2'){ ?>	
							<td>True or False</td> 
							<?php }else { ?>	
							<td>Fill in the blank</td>
							<?php } ?>	
							
                          <td><?php echo $tama;?></td>    
                          <td>
						 
                            <!--<a href="#edita<?php echo $id;?>" class="btn btn-primary btn-xs" data-toggle="modal"><i class="fa fa-pencil"></i> Edit </a>
                          -->
                            <a href="function/tc_fc_activity/delete_question.php?deletani=<?php echo $id?>&activityid=<?php echo $_GET['activity_id'];?>" onclick="return confirm('Do you want to delete?');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
								<?php } ?>
                      </tbody>
                    </table>
                  </div>
              </div>
            </div>
		  
  
                 <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Add Question</h4>
                        </div>
                        <div class="modal-body">  
                    <br>
                    <form class="form-horizontal form-label-left input_mask" action="function/tc_fc_activity/add_question_second.php" method="POST">

                    <div class="x_panel">  
                <div class="x_content">
                  <div id="alerts"></div>
      

                   
                  <textarea name="descr" class="form-control" row="100" id="descr" style="margin: 0px; width: 823px; height: 324px;;"></textarea>
                   <input type="hidden" class="form-control" value="<?php echo $_GET['activity_id'];?>" name="getthequizid" size="60">
                 
                  <br>

                  <div class="ln_solid"></div>
				  
				
 <div class="col-md-4 col-sm-4 col-xs-12">   
 <div class="form-group">
<label class="control-label" for="inputEmail">Question Type:</label>
<div class="controls">	
<select id="qtype" name="question_type" class="select2_single form-control" tabindex="-1" required>
<option value=""></option>
<option value="1">Multiple Choice</option>
<option value="2">True of False</option>  
<option value="3">Fill in the blank</option>  
</select>
</div>
</div>
</div>
<div class="col-md-9 col-sm-9 col-xs-12">          
<div class="form-group">
<label class="control-label" for="inputEmail"></label>
<div class="controls">	
<div id="opt11">
<p class="font-gray-dark">Tick the radio button below to mark the correct answer.
 </p> 
				<div class="form-inline"> 
                  <div class="form-group">
                    <label for="ex4">  A: </label>
                 <input type="text" class="form-control" name="ans1" size="60">
                </div>
                  <div class="checkbox">
                    <label>
					
                      Check here &nbsp;<input name="answer" value="A" type="radio"> 
					  
                    </label>
                  </div> 
                </div>
				
				<div class="form-inline"> 
                  <div class="form-group">
                    <label for="ex4"> B: </label>
            <input type="text" class="form-control" name="ans2" size="60">
                  </div>
                  <div class="checkbox">
                    <label>
					
                      Check here &nbsp;<input name="answer" value="B" type="radio"> 
					  
                    </label>
                  </div> 
                </div>
				 
				<div class="form-inline"> 
                  <div class="form-group">
                    <label for="ex4">  C: </label>
                 <input type="text" class="form-control" name="ans3" size="60">
                  </div>
                  <div class="checkbox">
                    <label>
					
                      Check here &nbsp;<input name="answer" value="C" type="radio"> 
					  
                    </label>
                  </div> 
                </div>	
				<div class="form-inline"> 
                  <div class="form-group">
                    <label for="ex4">  D: </label>
                 <input type="text" class="form-control" name="ans4" size="60">
                  </div>
                  <div class="checkbox">
                    <label>
					
                      Check here &nbsp;<input name="answer" value="D" type="radio"> 
					  
                    </label>
                  </div> 
                </div>
				  
</div>
<div id="opt12">
<input name="answer" value="A" type="radio">True<br/><br/>
<input name="answer" value="B" type="radio">False<br/><br/>
</div>
<div class="col-md-6">  
<div id="opt13">
<label> Answer:</label>
 <input type="text" class="form-control" name="answer" placeholder="Enter here"/>
</div>
</div>
</div>
 </div>
 </div>
              </div>  
					   </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" name="btnquestion" class="btn btn-primary">Submit</button>
                        </div>
					</form> 
                      </div>
                    </div>
                  </div>
				  <!-----------------------eddddddiiiiitttt--------->
				   		<?php 
								$query = mysqli_query($conn, "SELECT * FROM `ct_activity`;") or die(mysqli_error());
								while($fetch = mysqli_fetch_array($query))
								{
										$id = $fetch['activity_id'];
										$name = $fetch['name'];
										$description = $fetch['description'];
										$total_Items = $fetch['total_Item'];
										
								 
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