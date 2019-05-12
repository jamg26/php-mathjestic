<?php
	error_reporting(0);
	include('../../../dbconnect/dbconn.php');
	
	$date_attendance=date("Y-m-d");
	if (isset($_POST['presentbtn']))
	{ 
	$sectionid=$_POST['sectionidsastudent'];  
	$studentid=$_POST['idsastudent']; 
	$query = mysqli_query ($conn, "INSERT INTO `clm_attendance`(`date`, `student_id`, `section_id`, `status`) VALUES('$date_attendance','$studentid','$sectionid','Present');")or die(mysqli_error());
	echo "<script>document.location='../tc_mc_attendance.php?section_id=$sectionid'</script>"; 							
	}
	
	if (isset($_POST['absentbtn']))
	{ 
	$sectionid=$_POST['sectionidsastudent'];  
	$studentid=$_POST['idsastudent']; 
	$query = mysqli_query ($conn, "INSERT INTO `clm_attendance`(`date`, `student_id`, `section_id`, `status`) VALUES('$date_attendance','$studentid','$sectionid','Absent');")or die(mysqli_error());
	echo "<script>document.location='../tc_mc_attendance.php?section_id=$sectionid'</script>"; 							
	}

	if (isset($_POST['absentbtnupdate']))
	{ 
	$sectionid=$_POST['sectionidsastudent'];  
	$studentid=$_POST['idsastudent']; 
	$idsaattendance=$_POST['idsaattendance']; 
	$query = mysqli_query ($conn, "UPDATE `clm_attendance` SET `status` = 'Absent' WHERE `clm_attendance`.`attendance_id` = '$idsaattendance';")or die(mysqli_error());
	echo "<script>document.location='../tc_mc_attendance.php?section_id=$sectionid'</script>"; 							
	}
	
	if (isset($_POST['presentbtnupdate']))
	{ 
	$sectionid=$_POST['sectionidsastudent'];  
	$studentid=$_POST['idsastudent']; 
	$idsaattendance=$_POST['idsaattendance']; 
	$query = mysqli_query ($conn, "UPDATE `clm_attendance` SET `status` = 'Present' WHERE `clm_attendance`.`attendance_id` = '$idsaattendance';")or die(mysqli_error());
	echo "<script>document.location='../tc_mc_attendance.php?section_id=$sectionid'</script>"; 							
	}
	
?>