<?php
	include('../../../../dbconnect/dbconn.php');
	if (isset($_GET['yes']))
{
				$tc_id=$_GET['yes'];  
 
					mysqli_query ($conn, "UPDATE `usr_teacher` SET `tc_status` = 'Registered' WHERE `usr_teacher`.`tc_id` = '$tc_id';") 
					or die(mysqli_error());
					 
						echo "<script>document.location='../admin_tab_tc.php'</script>"; 
			 
			 							
}
?>