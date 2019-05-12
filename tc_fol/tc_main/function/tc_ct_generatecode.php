<?php
				include('../../../dbconnect/dbconn.php');
	
					if (isset($_POST['btnforgenerate']))
				{
					$quarter=$_POST['quarter'];   
					$section_id=$_POST['seksyon'];   
					$idsatech=$_POST['teacherid'];      
					$datenow= date("Y-m-d");
					$codehere = rand(10000000, 999999);
						$sql = "INSERT INTO `ct_generate_code`(`code_generated`, `date`, `section_id`, `teacher_id`, `quarter`) VALUES  
		                            ('MQ-$codehere', '$datenow','$section_id','$idsatech','$quarter')";

									if (mysqli_query($conn, $sql))
								{
									echo "<script>document.location='../../tc_main/tc_ct_generate.php'</script>";
								}
								else
								{
									echo "<script>document.location='../../tc_main/tc_ct_generate.php'</script>";
								}
			 							
				}
?>