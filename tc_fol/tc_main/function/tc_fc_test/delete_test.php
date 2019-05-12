<?php
	include('../../../../dbconnect/dbconn.php');
	
	if (isset($_GET['idtest']))
{
	$delete=$_GET['idtest'];   
 
					mysqli_query ($conn, "DELETE FROM `ct_test` WHERE test_id='$delete';") 
					or die(mysqli_error());
					 
						echo "<script>document.location='../../tc_ct_test.php'</script>"; 
			 
			 							
}
?>