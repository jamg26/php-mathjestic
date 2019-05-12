<?php

 include('../../../dbconnect/dbconn.php');
	if (isset($_POST['btnupload'])) {
	$target = "../files/tc_dll/".basename($_FILES['file']['name']);
 	$dllfile = $_FILES['file']['name'];
    $yearnow = date("Y");
	
		$sql = "INSERT INTO clm_upload_dll (dll_file, dll_file_name, date_series) VALUES 
		                            ('$dllfile','$dllfile','$yearnow')";
		mysqli_query($conn, $sql);

		if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
			
			echo '<script language="javascript">';
	echo 'alert("Success. New file added!");';
	echo 'window.location="../tc_dll_viewer.php";';
	echo '</script>';
		}else{
	echo '<script language="javascript">';
	echo 'alert("Ooops!. Failed to upload!");';
	echo 'window.location="../tc_dll_viewer.php";';
	echo '</script>';
		}
	}

?>
