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
              <div class="col-md-9">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Create Tasks <small> </small></h2>
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
             
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr> 
                          <th style="width: 10%">Generated code</th>
                          <th style="width: 10%">Date</th> 
                          <th style="width: 10%">Status</th> 
                          <th style="width: 10%">Quarter</th> 
                          <th style="width: 27%">#Action</th>
                        </tr>
                      </thead>


                      <tbody>
					  		<?php 
								$query = mysqli_query($conn, "SELECT * FROM `ct_generate_code` where section_id='".$ideseksyon."' and teacher_id='".$_SESSION['tc_id']."';") or die(mysqli_error());
								while($fetch = mysqli_fetch_array($query))
								{
										$idah = $fetch['generate_id'];
										$stat = $fetch['status'];  
										$name = $fetch['code_generated']; 
										$date = date("F d, Y",strtotime($fetch['date']));
										
										if($fetch['quarter']=='1')
										{
											$raquel= 'First Quarter';
										}
										if($fetch['quarter']=='2')
										{
											$raquel= 'Second Quarter';
										} 
										if($fetch['quarter']=='3')
										{
											$raquel= 'Third Quarter';
										}
										if($fetch['quarter']=='4')
										{
											$raquel= 'Fourth Quarter';
										}
							?>	
                        <tr>
						  <td> <h2><?php echo $name;?> </h2></td>    
						  <td> <?php echo $date;?></td>    
						  <td> <?php echo $stat;?></td>    
						  <td> <?php echo $raquel;?></td>    
                          <td>
						  <?php if($stat=='activate'){ ?>
						  Already activate
						  <?php } else { ?>
							  <a href="#addto<?php echo $idah;?>" class="btn btn-success btn-xs" data-toggle="modal"><i class="fa fa-plus"></i> Activate </a>
                            
							<?php } ?>
						 </td>
                        </tr>
								<?php } ?>
                      </tbody>
                    </table>
                  </div>
              </div>
            </div>
        <div class="col-md-3">
		<div class="x_panel">
                  <div class="x_title">
                    <h2>Generate <small>Code</small></h2>
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
 
                    <form class="form-horizontal form-label-left" action="function/tc_ct_generatecode.php" method="POST">

						<div class="form-group">
						<label class="col-sm-10 control-label">Click the button to generate code</label>
						<br/><br/><br/>   
						<input type="hidden" name="quarter" value="<?php echo $karun_na_quarter;?>">
						<input type="hidden" name="seksyon" value="<?php echo $ideseksyon;?>">
						<input type="hidden" name="teacherid" value="<?php echo $_SESSION['tc_id'];?>">
						<button type="submit" name="btnforgenerate" onclick="return confirm('Are you sure you want to generate code?');" class="btn btn-primary">Generate</button>
						</div>
						
                      <div class="divider-dashed"></div>
 
                    </form>
                  </div>
                </div>
            </div>
		  
   
    <!------===============addddttttttooooooooooooo==========--------->
		 
				     		<?php 
								$query = mysqli_query($conn, "SELECT * FROM `ct_generate_code`;") or die(mysqli_error());
								while($fetch = mysqli_fetch_array($query))
								{
										$idah = $fetch['generate_id'];
										$stat = $fetch['status'];  
										$name = $fetch['code_generated']; 
										$date = date("F d, Y",strtotime($fetch['date']));
										
									
								 
							?>		
				  	<div class="modal fade" id="addto<?php echo $idah;?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Activate:</h4>
                        </div>
                        <div class="modal-body">  
                    <br>
                    <form class="form-horizontal form-label-left input_mask" action="function/tc_fc_quiz/addto_quiz.php" method="POST">

                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback hidden">
                        <input type="text" class="form-control has-feedback-left" id="" name="codejud" value="<?php echo $name;?>" placeholder="Quiz Title" required>
                        <input type="text" class="form-control has-feedback-left" id="" name="codeid" value="<?php echo $idah;?>" placeholder="Quiz Title" required>
                        <input type="text" class="form-control has-feedback-left" id="" name="quarter" value="<?php echo $karun_na_quarter;?>" placeholder="Name" required>
                        <span class="fa fa-check form-control-feedback left" aria-hidden="true"></span>
                      </div>
					<div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
		 
					<?php 
					$selectifexist = mysqli_query($conn, "select *from add_to_ct_generate_code where id_sa_code='$idah';") or die(mysqli_error()); 
					while($fors = mysqli_fetch_array($selectifexist))
					{ 
					  echo 'This Code already give to section <b>'.$fors['section_name'].'</b><br/>';  
					}
					?>
                   
                      </div>
			      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
				  <h3>Select Section</h3> 
                       <select class="form-control" name="sectionid" required="required">
                            <option> </option>  
					<?php 
					$queryse = mysqli_query($conn, "SELECT * FROM `clm_section` where adviser='".$_SESSION['tc_id']."';") or die(mysqli_error()); 
					while($fetchs = mysqli_fetch_array($queryse))
					{ 
					  echo '<option value='.$fetchs['section_id'].'>'.$fetchs['section_name'].'</option>'; 
					}
					?>
                          </select>
                      </div>
					  
					   </div>
                        <div class="modal-footer">
						<br><br>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" name="btnactivate" class="btn btn-primary">Submit</button>
                        </div>
					</form> 
                      </div>
                    </div>
                  </div>
                  <!-- /modals -->  
						 	  	<?php } ?>	
								
				   		<?php 
								$query = mysqli_query($conn, "SELECT * FROM `ct_examination`;") or die(mysqli_error());
								while($fetch = mysqli_fetch_array($query))
								{
										$id = $fetch['exam_id'];
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
                          <h4 class="modal-title" id="myModalLabel2">Edit Examination</h4>
                        </div>
                        <div class="modal-body">  
                    <br>
                    <form class="form-horizontal form-label-left input_mask" action="function/tc_fc_examination/edit_examination.php" method="POST">

                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="hidden" class="form-control has-feedback-left" id="inputSuccess2" name="id" value="<?php echo $id;?>" placeholder="Examination Title" required>
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="qtitle" value="<?php echo $name;?>" placeholder="Name" required>
                        <span class="fa fa-check form-control-feedback left" aria-hidden="true"></span>
                      </div>
						
					  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="desc"  value="<?php echo $description;?>" placeholder="Description" required>
                        <span class="fa fa-check form-control-feedback left" aria-hidden="true"></span>
                      </div>
					  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="number" class="form-control has-feedback-left" id="inputSuccess2" name="totem" value="<?php echo $total_Items;?>" placeholder="Total Items" required>
                        <span class="fa fa-check form-control-feedback left" aria-hidden="true"></span>
                      </div>
					  
					   </div>
                        <div class="modal-footer">
						<br><br>
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