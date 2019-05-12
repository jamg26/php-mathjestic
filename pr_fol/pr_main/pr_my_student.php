<!-- header content -->
 <?php include ("include/pr_header.php");
 ?>
 <!-- header content -->
  <body class="nav-md footer_fixed">
    <?php
	$id = (int) $_SESSION['pr_id'];
    $query = mysqli_query ($conn, "SELECT * FROM usr_parent WHERE pr_id = '$id' ") or die (mysqli_error());
    $fetch = mysqli_fetch_array ($query);
    ?>
    <div class="container body">
      <div class="main_container">
	    <!-- sidebar content -->
        <?php include ("include/pr_sidebar.php");
        ?>
		<!-- sidebar content -->
        <!-- top navigation -->
        <?php include ("include/pr_navigation.php");
        ?>
        <!-- /top navigation -->
			
        <!-- page content -->
        <div class="right_col" role="main">
          
	  
		  <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    
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

                    <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">ID Number/LRN </th>
                            <th class="column-title">Student Name </th>
                            <th class="column-title">Profile </th>
                            <th class="column-title">Attendance </th>
                            <th class="column-title">Progress </th>
                            <th class="column-title">Ranks </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">1800001</td>
                            <td class=" ">rheysnjoybonea </td>
                            <td class=" last"><a href="#">View</a></td>
                            <td class=" last"><a href="#">View</a></td>
                            <td class=" last"><a href="progress.html">View</a></td>
                            <td class=" last"><a href="#">View</a></td>
                            <td class=" last"><a href="#">View</a>
                            </td>
                          </tr>              
                        </tbody>
                      </table>
                    </div>
							
					</div>
			  
                  </div>
                </div>
              </div>--------------------------------------------------------------------------------------------------------------------------------->
        </div>
		
        <!-- /page content -->	
        <!-- footer content -->
        <?php include ("include/pr_footer.php");
        ?>
        <!-- /footer content -->
      </div>
    </div>
    <!-- script content -->
    <?php include ("include/pr_script.php");
    ?>
    <!-- /script content -->
  </body>
</html>