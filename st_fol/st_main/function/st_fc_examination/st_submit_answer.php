
<?php
	include('../../../../dbconnect/dbconn.php');
error_reporting(E_ALL);
	
$exam_id = $_GET['exam_id']; 
$studentid = $_POST['studentid']; 





									$noofquest = 0;
									$score = 0;
									
					$sql3 = "SELECT * FROM ct_exam_questions WHERE exam_id = '$exam_id';";
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
 
			
 $sql3 = "INSERT INTO `ct_exam_records`(`student`, `score`, `items`, `exam_id`) VALUES 
 ('$studentid','$score','$noofquest','$exam_id')";
						
				if(mysqli_query($conn,$sql3))
				{
						echo "<script>document.location='../../st_at_examination_result.php?exam_id=".$exam_id."'</script>"; 
							
			 	
				}
	 
	
	
?>
