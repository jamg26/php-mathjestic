<?php
				include('../../../dbconnect/dbconn.php');
	
					if (isset($_POST['gipislit']))
				{
					$section_id=$_POST['section_id'];   
					$idsastudent=$_POST['idsastudent'];   
					$ngalansabadge=$_POST['hatagagbadge'];   
					
						$sql = "INSERT INTO badge (st_id, badge_name) VALUES 
		                            ('$idsastudent', '$ngalansabadge')";

									if (mysqli_query($conn, $sql))
								{
									echo "<script>alert('Successfully Added Badge!');document.location='../../tc_main/tc_student.php?section_id=".$section_id."'</script>";
								}
								else
								{
									echo "<script>alert('Failed To Add Badge');document.location='../../tc_main/tc_student.php?section_id=".$section_id."'</script>";
								}
			 							
				}
?>