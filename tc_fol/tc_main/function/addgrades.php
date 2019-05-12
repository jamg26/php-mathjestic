<?php
				include('../../../dbconnect/dbconn.php');
	
					if (isset($_GET['isset']))
				{
					$photo=$_GET['photo'];   
					$fullname=$_GET['fullname'];   
					$studentid=$_GET['studentid'];   
					$totalaverage=$_GET['totalaverage'];    
					$sectionid=$_GET['section'];      
					 $datenow = date("Y-m-d");
					$query = mysqli_query($conn, "Select * from clm_sholastic_record WHERE student_id='$studentid';") or die(mysqli_error());
					if($fetch = mysqli_fetch_array($query))
					{
						mysqli_query ($conn, "UPDATE `clm_sholastic_record` SET `final_grades`='$totalaverage' WHERE student_id='$studentid' and section='$sectionid';") or die(mysqli_error());
					
						echo "<script>document.location='../../tc_main/tc_ranking.php?section_id=".$sectionid."'</script>"; 
			 
					}else
						{
					mysqli_query ($conn, "INSERT INTO `clm_sholastic_record`(`student_id`, `final_grades`, `section`, `fullname`,`photo`, `date`) VALUES ('$studentid','$totalaverage','$sectionid','$fullname','$photo','$datenow');") or die(mysqli_error());
					 
						echo "<script>document.location='../../tc_main/tc_ranking.php?section_id=".$sectionid."'</script>"; 
					}
			 							
				}
?>