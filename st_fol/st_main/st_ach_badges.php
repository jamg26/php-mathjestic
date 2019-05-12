<!-- header content -->
 <?php include ("include/st_header.php");
 ?>
 <!-- header content -->
  <body class="nav-md footer_fixed">
    <?php
	$id = (int) $_SESSION['st_id'];
    $query = mysqli_query ($conn, "SELECT * FROM usr_student WHERE st_id = '$id' ") or die (mysqli_error());
    $fetch = mysqli_fetch_array ($query);
    ?>
    <div class="container body">
      <div class="main_container">
	    <!-- sidebar content -->
        <?php include ("include/st_sidebar.php");
        ?>
		<!-- sidebar content -->
        <!-- top navigation -->
        <?php include ("include/st_navigation.php");
        ?>
        <!-- /top navigation -->
			
        <!-- page content -->	
        <div class="right_col" role="main">
		<!-------------------------------------------------------------------------------------------------------------------------------------------->

		
          <div class="x_panel">
                  <div class="x_title">
                    <h2>My Badges</h2>
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
                    <p> <code>     <?php 
		  	$query = mysqli_query($conn, "SELECT count(badge_id) FROM badge WHERE st_id='$id';") or die(mysqli_error()); 
			while($fetch = mysqli_fetch_array($query)){
			echo $number = $fetch['count(badge_id)'];
			 }
				?>/10</code></p>
					
              <?php 
		  	$query = mysqli_query($conn, "SELECT * FROM badge WHERE st_id='$id';") or die(mysqli_error()); 
			while($fetch = mysqli_fetch_array($query)){
			$ngalansabadge = $fetch['badge_name'];
 
				?>
                    <a class="btn btn-app btn-lg">
                     <img src="images/awards/<?php echo $ngalansabadge; ?>.png" width="30px" height="30px"><br>
					 <?php
					 if ($ngalansabadge=='A1')
					 {
                      echo "Perfect Quiz";
                     }
					 else if ($ngalansabadge=='A2') {
					 echo "Perfect Attendance";
                     }
					 else if ($ngalansabadge=='A5') {
					 echo "Best in Listening";
                     }
					 else if ($ngalansabadge=='A3') {
					 echo "Best in Math";
                     }
					 else if ($ngalansabadge=='A4') {
					 echo "Best in Oral";
                     }
					 ?>
                     <br/>
                    
                    </a>
                <?php } ?>
                  </div>
                </div>
		  
		  
		<!-------------------------------------------------------------------------------------------------------------------------------------------->
        </div>
		
        <!-- /page content -->	
        <!-- footer content -->
        <?php include ("include/st_footer.php");
        ?>
        <!-- /footer content -->
      </div>
    </div>
    <!-- script content -->
    <?php include ("include/st_script.php");
    ?>
    <!-- /script content -->
  </body>
</html>