<!-- header content -->
 <?php include ("include/admin_header.php");
 ?>
 <!-- header content -->
  <body class="nav-md footer_fixed">
    <?php
	$id = (int) $_SESSION['admin_id'];
    $query = mysqli_query ($conn, "SELECT * FROM usr_admin WHERE admin_id = '$id' ") or die (mysqli_error());
    $fetch = mysqli_fetch_array ($query);
    ?>
    <div class="container body">
      <div class="main_container">
        <div class="container body">
      <div class="main_container">
	    <!-- sidebar content -->
        <?php include ("include/admin_sidebar.php");
        ?>
		<!-- sidebar content -->
        <!-- top navigation -->
        <?php include ("include/admin_navigation.php");
        ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
 
 <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List of section </h2>
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
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" id="check-all" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                            </th>
                            <th class="column-title">Section ID </th>
                            <th class="column-title">Section name </th> 
                            <th class="column-title">Adviser </th> 
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th> 
                          </tr>
                        </thead>

                             <tbody>
							 <?php
							 include('../../../dbconnect/dbconn.php');
								$query = mysqli_query($conn, "SELECT * FROM `clm_section` inner join usr_teacher on usr_teacher.tc_id=clm_section.adviser order by section_name ASC") or die(mysqli_error());
								while($fetch = mysqli_fetch_array($query))
								{
										$secid = $fetch['section_id'];
										$sname = $fetch['section_name'];
										 $lname = $fetch['lastname'];
										$fname = $fetch['firstname'];
										$fullname= $fname.' '.$lname; ;
								
							?>
                          <tr class="even pointer">
                            <td class="a-center ">
                              <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" name="table_records" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                            </td>
                            <td class=" "><?php echo date('y').'-'.$secid.'000';?></td>
                            <td class=" "><?php echo $sname;?></td>  
                            <td class=" "><?php echo $fullname;?></td>  
                            <td class=" last"><a href="#">Edit</a> </td>
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
                    <h2><i class="fa fa-bars"></i> Add <small>section</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li> 
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
					<form action="function/admin_addsection.php" method="POST">
						<div class="col-md-12 col-sm-2 col-xs-12">
						<label>Add adviser	</label>
						<select class="form-control" name="adviser" required>
						<option>Choose Teacher</option>
								<?php 
								$query = mysqli_query($conn, "SELECT * FROM `usr_teacher` where tc_status='Registered';") or die(mysqli_error());
								while($fetch = mysqli_fetch_array($query))
								{ 
								$techid=$fetch['tc_id'];
								$fname=$fetch['firstname'];
								$lname=$fetch['lastname'];
								$fullname= $fname.' '.$lname;
							
								 echo'<option value="'.$techid.'">'.$fullname.'</option>';
								}
								?> 
                        
						
                          </select>
						  </div>
						<div class="col-md-12 col-sm-2 col-xs-12">
						<label>Section name	</label>
                          <input type="text" id="name" name="name" placeholder="Section name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
						<div class="col-md-12 col-sm-2 col-xs-12" style="text-align:center;">
						<br/>
						<button type="submit" name="addsection" class="btn btn-default">Submit</button>
						 </div>
					</form>
                  </div>
                </div>
                </div> 
			</div>
			<!-- page content -->
<br/>

        <!-- footer content -->
        <?php include ("include/admin_footer.php");
        ?>
        <!-- /footer content -->
      </div>
    </div>
    <!-- script content -->
    <?php include ("include/admin_script.php"); ?>
    <!-- /script content -->	
  </body>
</html>
