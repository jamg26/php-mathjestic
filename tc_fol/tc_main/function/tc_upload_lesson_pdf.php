<?php

 include('../../../dbconnect/dbconn.php');
	if (isset($_POST['btnupload'])) {
	$target = "../files/tc_dll/".basename($_FILES['file']['name']);
 	$dllfile = $_FILES['file']['name'];
    $yearnow = date("Y");
    $unit = $_POST['view_unit'];
    $chapter = $_POST['view_chapter'];
	
		$sql = "INSERT INTO `unit_lesson`(`lesson_content`, `unitid`, `chapterid`, `file_type`, `series_year`)
		VALUES ('$dllfile','$unit','$chapter','PDF','$yearnow')";
		mysqli_query($conn, $sql);

		if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
			
			echo '<script language="javascript">';
	echo 'alert("Success. New file added!");';
	echo 'window.location="../tc_pdf_lesson.php?view_chapter='.$chapter.'&view_unit='.$unit.'";';
	echo '</script>';
		}else{
	echo '<script language="javascript">';
	echo 'alert("Ooops!. Failed to upload!");';
	echo 'window.location="../tc_pdf_lesson.php?view_chapter='.$chapter.'&view_unit='.$unit.'";';
	echo '</script>';
		}
	}

?>
