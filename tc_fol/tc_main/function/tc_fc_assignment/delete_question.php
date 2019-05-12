<?php
				include('../../../../dbconnect/dbconn.php');
	
					if (isset($_GET['deletani']))
				{
					$delete=$_GET['deletani'];   
					$assignment_id=$_GET['assignmentid'];   
 
					mysqli_query ($conn, "DELETE FROM `ct_assignment` WHERE question_id='$delete';") 
					or die(mysqli_error());
					 
					echo "<script>document.location='../../tc_ct_assignment_view.php?assignment_id=".$assignment_id."'</script>"; 
			 
			 							
				}
?>