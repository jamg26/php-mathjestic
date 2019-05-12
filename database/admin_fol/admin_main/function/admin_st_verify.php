<?php
	include('../../../../dbconnect/dbconn.php');
	if (isset($_GET['yes']))
{
				$st_id=$_GET['yes'];  
 
					mysqli_query ($conn, "UPDATE `usr_student` SET `st_stat` = 'Registered' WHERE `usr_student`.`st_id` = '$st_id';") 
					or die(mysqli_error());
					 
						echo "<script>document.location='../admin_tab_st.php'</script>"; 
			 
			 							
}
?>