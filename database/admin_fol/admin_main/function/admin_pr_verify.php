<?php
	include('../../../../dbconnect/dbconn.php');
	if (isset($_GET['yes']))
{
				$pr_id=$_GET['yes'];  
 
					mysqli_query ($conn, "UPDATE `usr_parent` SET `pr_stat` = 'Registered' WHERE `usr_parent`.`pr_id` = '$pr_id';") 
					or die(mysqli_error());
					 
						echo "<script>document.location='../admin_tab_pr.php'</script>"; 
			 
			 							
}
?>