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
		<!-------------------------------------------------------------------------------------------------------------------------------------------->
		
		
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Fixed Footer <small> Just add class <strong>footer_fixed</strong></small></h3>
              </div>
            </div>
          </div>
		  
		  
		<!-------------------------------------------------------------------------------------------------------------------------------------------->
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