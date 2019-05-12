<!-- header content -->
 <?php include ("include/admin_header.php");
 ?>
 <!-- header content -->
  <body class="nav-md">
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
			
		<!-------------------------------------------------------------------------------------------------------------------------------------------->
        <!-- page content -->
		
       <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Teacher Account Table <small> </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li> 
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                     <div class="x_content">
                <div class="buttons">
                      <!-- Standard button -->
        	  
                      <br/>
                      <br/>
 
                    </div>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr> 
                          <th>Image</th> 
                          <th>Name</th> 
                          <th>Start date</th> 
                          <th>Username</th>  
                          <th>Status</th>  
                          <th>Action</th> 
                        </tr>
                      </thead>


                      <tbody>
					  		<?php 
								$query = mysqli_query($conn, "SELECT * FROM `usr_teacher` order by tc_status DESC;") or die(mysqli_error());
								while($fetch = mysqli_fetch_array($query))
								{
										$id = $fetch['tc_id'];
										$pangalan = $fetch['firstname'];
										$surname = $fetch['lastname'];
										$mid = $fetch['middlename'];
										$image = $fetch['profile_img']; 
										$date = $fetch['tc_entry_date']; 
										$status = $fetch['tc_status']; 
										$user = $fetch['username']; 
										$fullname = $pangalan.' '.$mid.' '.$surname;
							?>	
                        <tr>
						
						<?php if ($image==null){?>
						<td>						
						<a>
                        <div class="profile_pic">
                          <img src="images/user.png" alt="img" class="img-circle profile_img">
                        </div> 
						</a>
						</td>
						<?php }else{?>	
						<td>						
						<a>
                        <div class="profile_pic">
                          <img src="images/<?php echo $image;?>" alt="img" class="img-circle profile_img">
                        </div> 
						</a>
						</td>						
						   <?php } ?>	
                          <td><?php echo $fullname;?></td>  
                          <td><?php echo $date;?></td>    
                          <td><?php echo $user;?></td>    
                          <td><?php echo $status;?></td>     
                          <td> 
                            <a href="function/admin_tc_verify.php?yes=<?php echo $id;?>" onclick="return confirm('Do you want to verify this user?');" class="btn btn-success btn-xs"> Verify </a>
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
         <!-- /page content -->

        <!-- footer content -->
        <?php include ("include/admin_footer.php");
        ?>
        <!-- /footer content -->
      </div>
    </div>
    <!-- script content -->
    <?php include ("include/admin_script.php");
    ?>
    <!-- /script content -->	
  </body>
</html>