<?php
	include('../../../dbconnect/dbconn.php');
	if (isset($_POST['addunit']))
{
				$unitid=$_POST['unitid'];    
				$chapter=$_POST['chapter'];    
				$title=$_POST['title'];    
 
 
 	$query = mysqli_query ($conn, "select *from unit_chapter where chapter_number='Chapter ".$_POST['chapter']."' AND unit_id='$unitid';") or die(mysqli_error()); 
	if($fetch = mysqli_fetch_array($query))
	{ 
	echo "<script>alert('Chapter name already exist!');document.location='../tc_lesson_unit.php?unit_number=".$unitid."'</script>";	 

	}else {
 
	mysqli_query ($conn, "INSERT INTO `unit_chapter`(`chapter_number`, `chapter_title`, `unit_id`) VALUES ('Chapter ".$chapter."','$title','$unitid');") 
	or die(mysqli_error());
	 
		echo "<script>alert('Successfully Added');document.location='../tc_lesson_unit.php?unit_number=".$unitid."'</script>"; 
			
	}		 
			 							
}
?>