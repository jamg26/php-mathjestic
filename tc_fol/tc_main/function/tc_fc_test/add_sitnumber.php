<?php
				include('../../../../dbconnect/dbconn.php');
	
					if (isset($_GET['btnsitnumber']))
				{
					$idsastudent=$_GET['idsastudent'];   
					$sitnumber=$_GET['sitnumber'];   
					$section_id=$_GET['section_id'];   
 
					mysqli_query ($conn, "UPDATE `usr_student` SET `seat_num` = '$sitnumber' WHERE `usr_student`.`st_id` ='$idsastudent';") 
					or die(mysqli_error());
					 
					echo "<script>document.location='../../tc_main/tc_student.php?section_name=".$section_id."'</script>"; 
			 
			 							
				}
?>