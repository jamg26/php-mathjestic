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
                            <th class="column-title">Quarter </th>
                            <th class="column-title">Status </th>
                            <th class="column-title">Date</th>
                            <th class="column-title">Action</th>
                          
                          </tr>
                        </thead>

                             <tbody>
							<?php
							include('../../../dbconnect/dbconn.php');
							$query = mysqli_query($conn, "SELECT * FROM clm_quarter;") or die(mysqli_error());
							while($fetch = mysqli_fetch_array($query))
							 { 
								if($fetch['quarter']=='1')
								{
									$quarter='First Quarter';
								}
								if($fetch['quarter']=='2')
								{
									$quarter='Second Quarter';
								}
								if($fetch['quarter']=='3')
								{
									$quarter='Third Quarter';
								}
								if($fetch['quarter']=='4')
								{
									$quarter='Fourth Quarter';
								}						
							?>
                          <tr class="even pointer">
                            
                            <td> <?php echo $quarter;?> </td> 
                            <td> <?php echo $fetch['quarter_status'];?> </td> 
                            <td> <?php echo $fetch['date'];?> </td> 
                            <td> Delete </td> 
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
                    <h2><i class="fa fa-bars"></i> Add <small>quarter</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li> 
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
					<form action="function/admin_quarter.php" method="POST">
						<div class="col-md-12 col-sm-2 col-xs-12">
						<label>Add Quarter	</label>
						<select class="form-control" name="quarter" required>
						<option value="">Choose </option> 
						<option value="1">First Quarter</option> 
						<option value="2">Second Quarter</option> 
						<option value="3">Third Quarter</option> 
						<option value="4">Fourth Quarter</option>  
                          </select>
						  </div>
						<div class="col-md-12 col-sm-2 col-xs-12"> 
                          <input type="hidden" value="Current Quarter" name="name" required="required">
                        </div>
						<div class="col-md-12 col-sm-2 col-xs-12" style="text-align:center;">
						<br/>
						<button type="submit" name="addquarter" class="btn btn-default">Submit</button>
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
