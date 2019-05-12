
<?php
				include('../../../dbconnect/dbconn.php');
	
					if (isset($_POST['btnwritten']))
				{
					$idsastudent=$_POST['idsastudent'];   
					$writtengrade=$_POST['writtengrade'];   
					$section_id=$_POST['section_id'];   
					$quarter=$_POST['quarter'];   
					$datenow=date("Y-m-d");
				 
					mysqli_query ($conn, "INSERT INTO `ct_written_task`(`student_ID`,`score`, `section`, `quarter`, `date`) VALUES ('$idsastudent','$writtengrade','$section_id','$quarter','$datenow');") or die(mysqli_error());
					 
					echo "<script>alert('Successfully Added');document.location='../../tc_main/tc_grades.php?section_id=".$section_id."&quarter=".$quarter."'</script>"; 
				 
			 							
				}	

				if (isset($_POST['btnwrittenedit']))
				{ 
					$written_id=$_POST['written_id'];					
					$writtengrade=$_POST['writtengrade'];   
					$section_id=$_POST['section_id'];   
					$quarter=$_POST['quarter'];  
				 
							mysqli_query ($conn, "UPDATE `ct_written_task` SET `score`='$writtengrade' WHERE `written_id`='$written_id';") or die(mysqli_error());
					
					echo "<script>alert('Successfully Update');document.location='../../tc_main/tc_grades.php?section_id=".$section_id."&quarter=".$quarter."'</script>"; 
					  
			 							
				}
?>