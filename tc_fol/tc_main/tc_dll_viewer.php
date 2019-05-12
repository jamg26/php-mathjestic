<!-- header content -->
 <?php include ("include/tc_header.php");
 ?>
 <Style>
.inputDnD .form-control-file {

  position: relative;
  width: 100%;   
  min-height: 10em;
  outline: none;
  visibility: hidden;
  cursor: pointer;
  background-color: #c61c23;
  box-shadow: 0 0 5px solid currentColor;
}
.inputDnD .form-control-file:before {
  content: attr(data-title);
  position: absolute;
  top: 0.5em; 
  width: 100%; 
  min-height: 6em;
  line-height: 2em;
  padding-top: 1.5em;
  opacity: 1;
  visibility: visible;
  text-align: center;
  border: 0.25em dashed currentColor;
  transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
  overflow: hidden;
}
.inputDnD .form-control-file:hover:before {
  border-style: solid;
  box-shadow: inset 0px 0px 0px 0.25em currentColor;
} 

 </Style>
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
		
		<!-------------------------------------------------------------------------------------------------------------------------------------------->
        <!-- page content -->
		
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Daily Lesson Log </h3>
              </div> 
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Drag file here or click to upload.</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li> 
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content"> 
                 	<div class="col col-xs-12">
					<form action="function/tc_upload_dll.php" method="POST" enctype="multipart/form-data">
				<div class="container p-y-1"> 
	<div class="row">
    <div class="col-sm-12 offset-sm-12"> 
	<div class="form-group inputDnD">
        <label class="sr-only" for="inputFile">File Upload</label>
        <input type="file" name="file" class="form-control-file text-default font-weight-bold" id="inputFile" 
		accept="files/*" onchange="readUrl(this)" data-title="Drag and drop a file">
      </div>
    </div>
  </div>
<button type="submit" name="btnupload" class="btn btn-success btn-lg pull-right">Upload file</button>  
</div>
</form>
				
				</div> 
                    <br />
                    <br />
                    <br />
                    <br />
                  </div>
                </div>
              </div>
            </div>
          </div>
		        <div class="x_panel">
                  <div class="x_title">
                    <h2>DLL Lists </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li> 
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div> 
		   <div class="x_content">

                    <!-- start accordion -->
                    <div class="accordion" id="accordion1" role="tablist" aria-multiselectable="true"> 
						<?php 
						$query = mysqli_query($conn, "SELECT * FROM `clm_upload_dll` Group by date_series ORDER BY `clm_upload_dll`.`date_series` DESC;") or die(mysqli_error());
						while($fetch = mysqli_fetch_array($query))
						{ 
							$dates = $fetch['date_series'];  
						?>   
                      <div class="panel">
                        <a class="panel-heading collapsed" role="tab" id="headingTwo<?php echo $dates;?>" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo<?php echo $dates;?>" aria-expanded="false" aria-controls="collapseTwo">
                          <h4 class="panel-title"><?php echo $dates;?></h4>
                        </a>
                        <div id="collapseTwo<?php echo $dates;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo<?php echo $dates;?>" aria-expanded="false" style="height: 0px;">
                          <div class="panel-body">
                        <div class="table-responsive">
                       <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                          <tr class="headings">  
                            <th class="column-title">File</th> 				 
                            </th> 
                          </tr>
                        </thead>

                             <tbody>
							<?php 
							$querydate = mysqli_query($conn, "SELECT * FROM `clm_upload_dll` where date_series='$dates';") or die(mysqli_error());
							while($fetchdate = mysqli_fetch_array($querydate))
							{   
							?> 
                            <td>
							 <a href="tc_dll_pdf.php?view_file=<?php echo $fetchdate['dll_file'];?>" class="btn btn-success btn-xs" target="popup" onclick="window.open('tc_dll_pdf.php?view_file=<?php echo $fetchdate['dll_file'];?>','name','width=900,height=700')"><i class="fa fa-eye"></i> View</a>
                          &nbsp;<?php echo $fetchdate['dll_file'];?>
						  </td> 
                          </tr>
							 <?php }?>
                        </tbody>
                      </table>
					  <br> <br> <br> <br>
						</div>
						</div>
                        </div>
                      </div>
					 <?php } ?>
                    </div>
                    <!-- end of accordion -->
 
                    </div>
                    </div>
					
        </div> 
				  <br>
					  <br> 
        <!-- /page content -->
		<!-------------------------------------------------------------------------------------------------------------------------------------------->
		
		
		
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