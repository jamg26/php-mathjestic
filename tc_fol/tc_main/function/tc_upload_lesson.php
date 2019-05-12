<?php

 include('../../../dbconnect/dbconn.php');
	if (isset($_POST['btnupload'])) {
	$target = "../files/".basename($_FILES['file']['name']);
 	$thefile = $_FILES['file']['name'];
  
	
		$sql = "INSERT INTO clm_upload_lesson (the_file, file_name) VALUES 
		                            ('$thefile','$thefile')";
		mysqli_query($conn, $sql);

		if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
			
			echo '<script language="javascript">';
	echo 'alert("Success. New file added!");';
	echo 'window.location="../tc_lesson_resources.php";';
	echo '</script>';
		}else{
	echo '<script language="javascript">';
	echo 'alert("Ooops!. Failed to upload!");';
	echo 'window.location="../tc_lesson_resources.php";';
	echo '</script>';
		}
	}

?>
