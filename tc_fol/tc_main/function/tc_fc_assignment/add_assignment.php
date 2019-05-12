 
<?php
	include('../../../../dbconnect/dbconn.php');
	session_start();
	if (isset($_POST['btnquiz']))
 {
	$qtitle=$_POST['qtitle'];  
	$desc=$_POST['desc'];  
	$totem=$_POST['totem'];  
    	$quarter=$_POST['quarter'];
	$query = mysqli_query ($conn, "select *from ct_assignment where name='".$_POST['qtitle']."';") or die(mysqli_error()); 
	if($fetch = mysqli_fetch_array($query))
	{
	 echo "<script>alert('Assignment name already exist!');document.location='../../tc_ct_assignment.php'</script>"; 

	} else {		 

		mysqli_query ($conn, "INSERT INTO ct_assignment (name,description,total_Item,quarter,id_for_teacher_as)
					VALUES ('$qtitle','$desc','$totem','$quarter','".$_SESSION['tc_id']."')") 
					or die(mysqli_error());
					 
						echo "<script>alert('Successfully added');document.location='../../tc_ct_assignment.php'</script>"; 
			   							
	}
 }
?>