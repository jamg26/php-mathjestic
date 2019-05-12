
<?php
	include('../../../../dbconnect/dbconn.php');
	session_start();
	if (isset($_POST['btnquiz']))
 {
	$qtitle=$_POST['qtitle'];  
	$desc=$_POST['desc'];  
	$totem=$_POST['totem'];  
   	$quarter=$_POST['quarter'];
	$query = mysqli_query ($conn, "select *from ct_examination where name='".$_POST['qtitle']."';") or die(mysqli_error()); 
	if($fetch = mysqli_fetch_array($query))
	{
	 echo "<script>alert('Examination name already exist!');document.location='../../tc_ct_examination.php'</script>"; 

	} else {		 

		mysqli_query ($conn, "INSERT INTO ct_examination (name,description,total_Item,quarter,id_for_teacher_exam)
					VALUES ('$qtitle','$desc','$totem','$quarter','".$_SESSION['tc_id']."')") 
					or die(mysqli_error());
					 
						echo "<script>alert('Successfully added');document.location='../../tc_ct_examination.php'</script>"; 
			   							
	}
 }
?>