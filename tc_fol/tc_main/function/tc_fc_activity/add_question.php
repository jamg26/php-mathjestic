<?php

	include('../../../../dbconnect/dbconn.php');
	error_reporting(0);
	if (isset($_POST['btnquestion']))
{
	$question=$_POST['descr'];  
	$activityid=$_POST['gettheactivityid'];  
	$question_type=$_POST['question_type'];  
	$answerone=$_POST['ans1'];  
	$answertwo=$_POST['ans2'];  
	$answerthree=$_POST['ans3'];  
	$answerfour=$_POST['ans4'];  
	$answer=$_POST['answer'];  
	$korekanswer=$_POST['correctt'];  
 
	if($question_type == '2'){
 mysqli_query ($conn, "INSERT INTO clm_question (question_title,activity_id,answer,question_type) VALUES ('$question','$activityid','$korekanswer','$question_type')") or die(mysqli_error());
	
	}else{
	mysqli_query ($conn, "INSERT INTO clm_question (question_title,activity_id,answer,question_type) VALUES ('$question','$activityid','$answer','$question_type')") or die(mysqli_error());
					
	$question_id= mysqli_insert_id($conn);	
	
	mysqli_query ($conn, "INSERT INTO clm_answer (activity_id,question_id,answer_text,choices) VALUES ('$activityid','$question_id','$answerone','A')") or die(mysqli_error());
	mysqli_query ($conn, "INSERT INTO clm_answer (activity_id,question_id,answer_text,choices) VALUES ('$activityid','$question_id','$answertwo','B')") or die(mysqli_error());
	mysqli_query ($conn, "INSERT INTO clm_answer (activity_id,question_id,answer_text,choices) VALUES ('$activityid','$question_id','$answerthree','C')") or die(mysqli_error());
	mysqli_query ($conn, "INSERT INTO clm_answer (activity_id,question_id,answer_text,choices) VALUES ('$activityid','$question_id','$answerfour','D')") or die(mysqli_error());
					 
	}
	echo "<script>alert('Successfully added!');document.location='../../tc_ct_activity_view.php?activity_id=".$activityid."&query=asdjfkjafh74jb35mjb'</script>"; 
			 
			 							
}
?>