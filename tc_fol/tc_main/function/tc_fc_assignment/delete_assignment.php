<?php
	include('../../../../dbconnect/dbconn.php');
	
	if (isset($_GET['idassignment']))
{
	$delete=$_GET['idassignment'];   
 
					mysqli_query ($conn, "DELETE FROM `ct_assignment` WHERE assignment_id='$delete';") 
					or die(mysqli_error());
					 
						echo "<script>document.location='../../tc_ct_assignment.php'</script>"; 
			 
			 							
}
?>