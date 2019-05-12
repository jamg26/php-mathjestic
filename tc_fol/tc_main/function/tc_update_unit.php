<?php
	include('../../../dbconnect/dbconn.php');
	if (isset($_POST['btnquiz']))
{
	$unit=$_POST['unit'];  
	$title=$_POST['title'];  
	$id=$_POST['id'];  
 
					mysqli_query ($conn, "UPDATE `unit` SET `unit_number`='$unit',`unit_title`='$title' where unit_id='$id';") 
					or die(mysqli_error());
					 
						echo "<script>alert('Success');document.location='../tc_add_unit.php'</script>"; 
			 
			 							
}
?>