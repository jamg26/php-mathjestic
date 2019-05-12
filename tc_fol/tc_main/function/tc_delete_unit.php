<?php
	include('../../../dbconnect/dbconn.php');
	
	if (isset($_GET['unit']))
{
	$delete=$_GET['unit'];   
 
					mysqli_query ($conn, "DELETE FROM `unit` WHERE unit_id='$delete';") 
					or die(mysqli_error());
					 
						echo "<script>document.location='../tc_add_unit.php'</script>"; 
			 
			 							
}
?>