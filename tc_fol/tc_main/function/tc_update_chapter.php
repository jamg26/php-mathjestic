<?php
	include('../../../dbconnect/dbconn.php');
	if (isset($_POST['btnchapter']))
{
	$chapter=$_POST['chapter'];  
	$title=$_POST['title'];  
	$id=$_POST['id'];  
	$unitid=$_POST['unitid'];  
 
					mysqli_query ($conn, "UPDATE `unit_chapter` SET `chapter_number`='$chapter',`chapter_title`='$title' where chapter_id='$id';") 
					or die(mysqli_error());
					 
						echo "<script>alert('Success');document.location='../tc_lesson_unit.php?unit_number=".$unitid."'</script>"; 
			 
			 							
}
?>