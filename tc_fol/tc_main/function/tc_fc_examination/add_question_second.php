<?php

	include('../../../../dbconnect/dbconn.php');
	error_reporting(0);
	if (isset($_POST['btnquestion']))
	{	
	$question=$_POST['descr'];  
	$examid=$_POST['getthequizid'];  
	$question_type=$_POST['question_type'];  
	$answerone=$_POST['ans1'];  
	$answertwo=$_POST['ans2'];  
	$answerthree=$_POST['ans3'];  
	$answerfour=$_POST['ans4'];  
	$answer=$_POST['answer'];    
  
 mysqli_query ($conn, "INSERT INTO `ct_exam_questions`(`exam_id`, `question`, `question_type`, `correct_answer`, `a`, `b`, `c`, `d`) 
 VALUES ('$examid','$question','$question_type','$answer','$answerone','$answertwo','$answerthree','$answerfour')") or die(mysqli_error());
	
 
	echo "<script>alert('Successfully added!');document.location='../../tc_ct_examination_view.php?exam_id=".$examid."&query=asdjfkjafh74jb35mjb'</script>"; 
			 
			 							
	}
?>