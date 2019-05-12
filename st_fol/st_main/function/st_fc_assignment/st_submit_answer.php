
<?php
	include('../../../../dbconnect/dbconn.php');
error_reporting(E_ALL);
	
$assignment_id = $_GET['assignment_id']; 
$studentid = $_POST['studentid']; 





									$noofquest = 0;
									$score = 0;
									
					$sql3 = "SELECT * FROM ct_assignment_questions WHERE assignment_id = '$assignment_id';";
					$result = mysqli_query($conn,$sql3);

					if(mysqli_num_rows($result) > 0)
					{		
						while($row = mysqli_fetch_array($result))
						{ 
									$question_id = $row["question_id"];
									$question = $row["question"];
									$a = $row["a"];
									$b = $row["b"];
									$c = $row["c"];
									$d = $row["d"];
									$correct_answer = $row["correct_answer"];
									

									${"question" . $row["question_id"]} = $_POST[$question_id];

									$qyourans = ${"question" . $question_id};
									$noofquest = $noofquest + 1;
									
									if (${"question" . $question_id} == $correct_answer)
									{
								
									$remark = 'Correct';
									$score = $score + 1;
									}
									else
									{
									
									$remark = 'Wrong';
									};
  
									}
									}
 
			
 $sql3 = "INSERT INTO `ct_assignment_records`(`student`, `score`, `items`, `assignment_id`) VALUES 
 ('$studentid','$score','$noofquest','$assignment_id')";
						
				if(mysqli_query($conn,$sql3))
				{
						echo "<script>document.location='../../st_at_assignment_result.php?assignment_id=".$assignment_id."'</script>"; 
							
			 	
				}
	 
	
	
?>
