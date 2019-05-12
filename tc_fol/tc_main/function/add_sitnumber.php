<?php
				include('../../../dbconnect/dbconn.php');
	
					if (isset($_POST['btnsitnumber']))
				{
					$idsastudent=$_POST['idsastudent'];   
					$sitnumber=$_POST['sitnumber'];   
					$section_id=$_POST['section_id'];   
					 
					$query = mysqli_query($conn, "Select * from usr_student WHERE section_id='$section_id' AND `usr_student`.`seat_num` ='$sitnumber';") or die(mysqli_error());
					if($fetch = mysqli_fetch_array($query))
					{
						echo "<script>alert('Error this seat number is already taken.');document.location='../../tc_main/tc_student.php?section_name=".$section_id."'</script>"; 
			 
					}else
						{
					mysqli_query ($conn, "UPDATE `usr_student` SET `seat_num` = '$sitnumber' WHERE `usr_student`.`st_id` ='$idsastudent';") or die(mysqli_error());
					 
					echo "<script>document.location='../../tc_main/tc_student.php?section_id=".$section_id."'</script>"; 
					}
			 							
				}
?>