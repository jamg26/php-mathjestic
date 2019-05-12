<?php
				include('../../../dbconnect/dbconn.php');
	
					if (isset($_GET['deletani']))
				{
					$delete=$_GET['deletani'];   
 
					mysqli_query ($conn, "DELETE FROM `clm_question` WHERE question_id='$delete';") 
					or die(mysqli_error());
					 
					echo "<script>document.location='../tc_ct_view_quiz.php?deletani=".."'</script>"; 
			 
			 							
				}
?>