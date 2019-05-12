<?php
	include('../../../dbconnect/dbconn.php');
	if (isset($_POST['btnquiz']))
{
	$qtitle=$_POST['qtitle'];  
	$desc=$_POST['desc'];  
	$totem=$_POST['totem'];  
 
					mysqli_query ($conn, "INSERT INTO clm_quizzes (name,description,total_Item)
					VALUES ('$qtitle','$desc','$totem')") 
					or die(mysqli_error());
					 
						echo "<script>alert('Successfully added');document.location='../tc_ct_quiz.php'</script>"; 
			 
			 							
}
?>