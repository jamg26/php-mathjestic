<?php
	include('../../../dbconnect/dbconn.php');
	if (isset($_POST['btnlesson']))
{
				$content=$_POST['content'];    
				$unitid=$_POST['unitid'];    
				$chapterid=$_POST['chapterid'];    
				$title=$_POST['title'];    
 
					mysqli_query ($conn, "INSERT INTO `unit_lesson`(`lesson_content`, `lesson_title`, `unitid`, `chapterid`) VALUES ('$content','$title','$unitid','$chapterid');") 
					or die(mysqli_error());
					 
						echo "<script>alert('Successfully Added');document.location='../tc_lesson_unit_open_chapter.php?view_chapter=".$chapterid."&view_unit=".$unitid."'</script>"; 
							
			 
			 							
}
?>