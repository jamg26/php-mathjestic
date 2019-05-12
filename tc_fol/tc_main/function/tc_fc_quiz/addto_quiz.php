<?php
	include('../../../../dbconnect/dbconn.php');
	session_start();
	if (isset($_POST['btnaddto']))
 {
    $secid=$_POST['sectionid'];  
	$qid=$_POST['quizid'];  
	$quarter=$_POST['quarter'];     
	$datenow = date("Y-m-d"); 

	$query = mysqli_query ($conn, "select *from ct_addto where sectionID='$secid' and quizID='$qid';") or die(mysqli_error()); 
	if($fetch = mysqli_fetch_array($query))
	{
	 echo "<script>alert('Quiz already exist in this section!');document.location='../../tc_ct_quiz.php'</script>"; 

	} else {		 
	
	$selectifexist = mysqli_query($conn, "select *from clm_section where section_id='$secid';") or die(mysqli_error()); 
	while($fors = mysqli_fetch_array($selectifexist))
	{ 
	 $secname= $fors['section_name']; 
	}
	mysqli_query ($conn, "INSERT INTO ct_addto (sectionID,sectionname,quizID,quarter,date)
	VALUES ('$secid','$secname','$qid','$quarter','$datenow')") 
	or die(mysqli_error());
	 
		echo "<script>alert('Successfully added');document.location='../../tc_ct_quiz.php'</script>"; 

			 							
	}
 }
 	if (isset($_POST['btnaact']))
 {
    $secid=$_POST['sectionid'];  
	$qid=$_POST['quizid'];  
	$quarter=$_POST['quarter'];     
	$datenow = date("Y-m-d"); 

	$query = mysqli_query ($conn, "select *from ct_addto where sectionID='$secid' and actid='$qid';") or die(mysqli_error()); 
	if($fetch = mysqli_fetch_array($query))
	{
	 echo "<script>alert('Activity already exist in this section!');document.location='../../tc_ct_activity.php'</script>"; 

	} else {		 
	
	$selectifexist = mysqli_query($conn, "select *from clm_section where section_id='$secid';") or die(mysqli_error()); 
	while($fors = mysqli_fetch_array($selectifexist))
	{ 
	 $secname= $fors['section_name']; 
	}
	mysqli_query ($conn, "INSERT INTO ct_addto (sectionID,sectionname,actid,quarter,date)
	VALUES ('$secid','$secname','$qid','$quarter','$datenow')") 
	or die(mysqli_error());
	 
		echo "<script>alert('Successfully added');document.location='../../tc_ct_activity.php'</script>"; 

			 							
	}
 } 

 if (isset($_POST['btntest']))
 {
    $secid=$_POST['sectionid'];  
	$qid=$_POST['quizid'];  
	$quarter=$_POST['quarter'];     
	$datenow = date("Y-m-d"); 

	$query = mysqli_query ($conn, "select *from ct_addto where sectionID='$secid' and testid='$qid';") or die(mysqli_error()); 
	if($fetch = mysqli_fetch_array($query))
	{
	 echo "<script>alert('Test already exist in this section!');document.location='../../tc_ct_test.php'</script>"; 

	} else {		 
	
	$selectifexist = mysqli_query($conn, "select *from clm_section where section_id='$secid';") or die(mysqli_error()); 
	while($fors = mysqli_fetch_array($selectifexist))
	{ 
	 $secname= $fors['section_name']; 
	}
	mysqli_query ($conn, "INSERT INTO ct_addto (sectionID,sectionname,testid,quarter,date)
	VALUES ('$secid','$secname','$qid','$quarter','$datenow')") 
	or die(mysqli_error());
	 
		echo "<script>alert('Successfully added');document.location='../../tc_ct_test.php'</script>"; 

			 							
	}
 }
 if (isset($_POST['btnexam']))
 {
    $secid=$_POST['sectionid'];  
	$qid=$_POST['quizid'];  
	$quarter=$_POST['quarter'];     
	$datenow = date("Y-m-d"); 

	$query = mysqli_query ($conn, "select *from ct_addto where sectionID='$secid' and examid='$qid';") or die(mysqli_error()); 
	if($fetch = mysqli_fetch_array($query))
	{
	 echo "<script>alert('Activity already exist in this section!');document.location='../../tc_ct_examination.php'</script>"; 

	} else {		 
	
	$selectifexist = mysqli_query($conn, "select *from clm_section where section_id='$secid';") or die(mysqli_error()); 
	while($fors = mysqli_fetch_array($selectifexist))
	{ 
	 $secname= $fors['section_name']; 
	}
	mysqli_query ($conn, "INSERT INTO ct_addto (sectionID,sectionname,examid,quarter,date)
	VALUES ('$secid','$secname','$qid','$quarter','$datenow')") 
	or die(mysqli_error());
	 
		echo "<script>alert('Successfully added');document.location='../../tc_ct_examination.php'</script>"; 

			 							
	}
 }
 if (isset($_POST['btnass']))
 {
    $secid=$_POST['sectionid'];  
	$qid=$_POST['quizid'];  
	$quarter=$_POST['quarter'];     
	$datenow = date("Y-m-d"); 

	$query = mysqli_query ($conn, "select *from ct_addto where sectionID='$secid' and assid='$qid';") or die(mysqli_error()); 
	if($fetch = mysqli_fetch_array($query))
	{
	 echo "<script>alert('Activity already exist in this section!');document.location='../../tc_ct_assignment.php'</script>"; 

	} else {		 
	
	$selectifexist = mysqli_query($conn, "select *from clm_section where section_id='$secid';") or die(mysqli_error()); 
	while($fors = mysqli_fetch_array($selectifexist))
	{ 
	 $secname= $fors['section_name']; 
	}
	mysqli_query ($conn, "INSERT INTO ct_addto (sectionID,sectionname,assid,quarter,date)
	VALUES ('$secid','$secname','$qid','$quarter','$datenow')") 
	or die(mysqli_error());
	 
		echo "<script>alert('Successfully added');document.location='../../tc_ct_assignment.php'</script>"; 

			 							
	}
 }
 if (isset($_POST['btnactivate']))
 {
    $secid=$_POST['sectionid'];  
	$codejud=$_POST['codejud'];  
	$codeid=$_POST['codeid'];  
	$quarter=$_POST['quarter'];     
	$datenow = date("Y-m-d"); 
 	 
	
	$selectifexist = mysqli_query($conn, "select *from clm_section where section_id='$secid';") or die(mysqli_error()); 
	while($fors = mysqli_fetch_array($selectifexist))
	{ 
	 $secname= $fors['section_name']; 
	}
	$truejuduy=mysqli_query ($conn, "INSERT INTO `add_to_ct_generate_code`(`section_id`, `section_name`, `id_sa_code`, `code`, `quarter`, `date`)
	VALUES ('$secid','$secname','$codeid','$codejud','$quarter','$datenow')") 
	or die(mysqli_error());
	
		if($truejuduy==true)
	{
	mysqli_query ($conn, "UPDATE `ct_generate_code` SET `status`='activate' WHERE generate_id='$codeid';") or die(mysqli_error());
	
	echo "<script>alert('Successfully Activate!');document.location='../../tc_ct_generate.php'</script>"; 
 
	} 
	
 }
?>