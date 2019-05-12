<?php
				include('../../../../dbconnect/dbconn.php');
	
					if (isset($_GET['deletani']))
				{
					$delete=$_GET['deletani'];   
					$test_id=$_GET['testid'];   
 
					mysqli_query ($conn, "DELETE FROM `ct_test_questions` WHERE question_id='$delete';") 
					or die(mysqli_error());
					 
					echo "<script>document.location='../../tc_ct_test_view.php?test_id=".$test_id."'</script>"; 
			 
			 							
				}
?>