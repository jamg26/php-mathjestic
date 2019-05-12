<?php
	include('../../../../dbconnect/dbconn.php');
	
	if (isset($_GET['idquiz']))
{
	$delete=$_GET['idquiz'];   
 
					mysqli_query ($conn, "DELETE FROM `ct_quiz` WHERE quiz_id='$delete';") 
					or die(mysqli_error());
					 
						echo "<script>document.location='../../tc_ct_quiz.php'</script>"; 
			 
			 							
}
?>