
<?php
	include('../../../../dbconnect/dbconn.php');
error_reporting(E_ALL);
	
$quiz_id = $_GET['quiz_id']; 
$studentid = $_POST['studentid']; 

$querys = mysqli_query($conn, "SELECT `quarter` FROM `ct_quiz` WHERE `quiz_id`='$quiz_id';") or die(mysqli_error());
while($row = mysqli_fetch_array($querys))
{
$quarter=$row['quarter'];
}



									$noofquest = 0;
									$score = 0;
									
					$sql3 = "SELECT * FROM ct_quiz_questions WHERE quiz_id = '$quiz_id';";
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
 
			
 $sql3 = "INSERT INTO `ct_quiz_records`(`student`, `score`, `items`, `quiz_id`, `quarter`) VALUES 
 ('$studentid','$score','$noofquest','$quiz_id','$quarter')";
						
				if(mysqli_query($conn,$sql3))
				{
						echo "<script>document.location='../../st_at_quiz_result.php?quiz_id=".$quiz_id."'</script>"; 
							
			 	
				}
	 
	
	
?>
