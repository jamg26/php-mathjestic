<?php
	include('../../../dbconnect/dbconn.php');
	
	if (isset($_GET['chapter']))
{
	$delete=$_GET['chapter'];   
	$urlbar=$_GET['url'];   
 
					mysqli_query ($conn, "DELETE FROM `unit_chapter` WHERE chapter_id='$delete';") 
					or die(mysqli_error());
					 
						echo "<script>document.location='../tc_lesson_unit.php?unit_number=".$urlbar."'</script>"; 
			 
			 							
}
?>