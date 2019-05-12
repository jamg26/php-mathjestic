<?php
	include('../../../../dbconnect/dbconn.php');
	
	if (isset($_GET['idexam']))
{
	$delete=$_GET['idexam'];   
 
					mysqli_query ($conn, "DELETE FROM `ct_examination` WHERE exam_id='$delete';") 
					or die(mysqli_error());
					 
						echo "<script>document.location='../../tc_ct_examination.php'</script>"; 
			 
			 							
}
?>