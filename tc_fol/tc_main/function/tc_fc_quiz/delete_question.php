<?php
				include('../../../../dbconnect/dbconn.php');
	
					if (isset($_GET['deletani']))
				{
					$delete=$_GET['deletani'];   
					$quiz_id=$_GET['quizid'];   
 
					mysqli_query ($conn, "DELETE FROM `ct_quiz_questions` WHERE question_id='$delete';") 
					or die(mysqli_error());
					 
					echo "<script>document.location='../../tc_ct_quiz_view.php?quiz_id=".$quiz_id."'</script>"; 
			 
			 							
				}
?>