<?php
	include('../../../../dbconnect/dbconn.php');
	if (isset($_POST['btnquiz']))
{
	$id=$_POST['id'];  
	$qtitle=$_POST['qtitle'];  
	$desc=$_POST['desc'];  
	$totem=$_POST['totem'];  
 
					mysqli_query ($conn, "UPDATE `ct_examination` SET `name`='$qtitle',`description`='$desc',`total_Item`='$totem' where exam_id='$id';") 
					or die(mysqli_error());
					 
						echo "<script>alert('Success');document.location='../../tc_ct_examination.php'</script>"; 
			 
			 							
}
?>