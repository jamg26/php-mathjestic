<?php
				include('../../../../dbconnect/dbconn.php');
	
					if (isset($_GET['deletani']))
				{
					$delete=$_GET['deletani'];   
					$activity_id=$_GET['activityid'];   
 
					mysqli_query ($conn, "DELETE FROM `ct_quiz_questions` WHERE question_id='$delete';") 
					or die(mysqli_error());
					 
					echo "<script>document.location='../../tc_ct_activity_view.php?activity_id=".$activity_id."'</script>"; 
			 
			 							
				}
?>