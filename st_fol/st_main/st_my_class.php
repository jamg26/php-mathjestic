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
		
		
          		<!-------------------------------------------------------------------------------------------------------------------------------------------->
        <!-- page content -->
		
       <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Class Lists<small> </small></h2>
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
                          <th>ID Number/LRN</th>
                          <th>Profile</th>
                          <th>Student Name</th> 
						  <th>Attendance</th>
						  <th>Progress</th>
						  <th>Rank</th>
						  <th>Info</th>
                        </tr>
                      </thead>


                      <tbody>
					  		<?php 
								$query = mysqli_query($conn, "SELECT * FROM `usr_student` where class_id='".$_GET['section_name']."' AND st_stat='Active ';") or die(mysqli_error());
								while($fetch = mysqli_fetch_array($query))
								{
										$id = $fetch['st_id'];
										$lrn = $fetch['LRNnumber'];
										$photo = $fetch['profile_img'];
										$lname = $fetch['lastname'];
										$fname = $fetch['firstname'];
										$fullname= $fname.' '.$lname;
							?>	
                        <tr>
                          <td><?php echo $lrn;?></td> 
                          <td>  
						<a>
                        <span class="image">
                          <img src="images/<?php echo $photo;?>" alt="img" width="100px" height="100px">
                        </span> 
						</a>
						</td> 
                          <td><?php echo $fullname;?></td> 
						  <td><?php echo $fullname;?></td> 
						  <td><?php echo $fullname;?></td> 
						  <td><?php echo $fullname;?></td> 
						  <td><?php echo $fullname;?></td> 
                        </tr>
								<?php } ?>
                      </tbody>
                    </table>
                  </div>
              </div>
            </div>
			
			<div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Student Progress <small></small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Line graph<small>Sessions</small></h2>
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
                    <canvas id="lineChart"></canvas>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Bar graph <small>Sessions</small></h2>
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
                    <canvas id="mybarChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              

              
            </div>
            <div class="clearfix"></div>
            <div class="row">
              

            </div>
          </div>
		  
		  
		  
		  
		  <div class="col-md-12 col-sm-12 col-xs-12">
		  
		  <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
					  <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">January</a>
                        </li>
						<li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">February</a>
                        </li>
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">March</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">April</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">May</a>
                        </li>
						<li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">June</a>
                        </li>
						<li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">July</a>
                        </li>
						<li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">August</a>
                        </li>
						<li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">September</a>
                        </li>
						<li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">October</a>
                        </li>
						<li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">November</a>
                        </li>
						<li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Dec</a>
                        </li>
						
						
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                          <p></p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                          <p></p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                          <p> </p>
                        </div>
                      </div>
                    </div>
					
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Attendance</small></h2>
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
                    <p class="text-muted font-13 m-b-30">
                      DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
                    </p>
                    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                      <thead>
                        <tr>
                          
                          <th>Name         </th>
                          <th>1</th>
                          <th>2</th>
						
                          <th>4</th>
                          <th>5</th>
                          <th>6</th>
						  <th>7</th>
                          <th>8</th>
						 
                          <th>12</th>
                          <th>13</th>
                          <th>14</th>
						  <th>15</th>
						  <th>16</th>
						  <th>19</th>
                          <th>20</th>
                          <th>21</th>
                          <th>22</th>
                          <th>23</th>
						  <th>26</th>
                          <th>27</th>
                         
                          <th>29</th>
                          
						  
						  
						  <th>Total</th>
                        </tr>
                      </thead>


                      <tbody>
					    <tr>
						<td></td>
						<td>TH</td>  
						<td>F</td>  
						<td>M</td>  
						<td>T</td>  
						<td>W</td>
						<td>TH</td>  
						<td>F</td>  
						<td>M</td>  
						<td>T</td>  
						<td>W</td>  
						<td>TH</td>  
						<td>F</td>  
						<td>M</td>  	
						<td>T</td>
						<td>W</td>  
						<td>TH</td>  
						<td>F</td>  
						<td>M</td>  
						<td>T</td>  
						<td>W</td>  
					 
						 
						<td>Absent</td>  	
                        </tr>
						
                        <tr>
						<td>rheysnjoybornea</td>
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  		 
						<td>0</td>  	
                        </tr>
						<tr>
						<td>usersample01</td>
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  		 
						<td>0</td>  	
                        </tr>
						<tr>
						<td>usersample02</td>
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  		 
						<td>0</td>  	
                        </tr>
						<tr>
						<td>usersample03</td>
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  		 
						<td>0</td>  	
                        </tr>
						<tr>
						<td>usersample04</td>
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  
						<td><input type="checkbox" id="check-all" class="flat"></td>  		 
						<td>0</td>  	
                        </tr>
                      </tbody>
						
						<td><h2> Total absent for this month:</h2></td>
						<td></td>  
						<td></td>  
						<td></td>  
						<td></td>  
						<td></td>
						<td></td>  
						<td></td>  
						<td></td>  
						<td></td>  
						<td></td>  
						<td></td>  
						<td></td>  
						<td></td>  
						<td></td>
						<td></td>  
						<td></td>  
						<td></td>  
						<td></td>  
						<td></td>  
						<td></td> 
                        <br>						
						<td><h1>0</h1></td>  	
                        </tr>
						
                      </tbody>
					  
                    </table>
                  </div>
                </div>
              </div>
			  
			  
			  
			  
		  
     
		
        <!-- /page content -->
		<!-------------------------------------------------------------------------------------------------------------------------------------------->
		   </div>
		
		
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