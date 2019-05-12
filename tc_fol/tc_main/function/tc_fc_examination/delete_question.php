<?php
				include('../../../../dbconnect/dbconn.php');
	
					if (isset($_GET['deletani']))
				{
					$delete=$_GET['deletani'];   
					$exam_id=$_GET['examid'];   
 
					mysqli_query ($conn, "DELETE FROM `ct_exam` WHERE question_id='$delete';") 
					or die(mysqli_error());
					 
					echo "<script>document.location='../../tc_ct_examination_view.php?exam_id=".$exam_id."'</script>"; 
			 
			 							
				}
?>