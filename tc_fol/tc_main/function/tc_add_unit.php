<?php
	include('../../../dbconnect/dbconn.php');
	if (isset($_POST['addunit']))
{
				$unit=$_POST['unit'];    
				$title=$_POST['title'];    
 
					mysqli_query ($conn, "INSERT INTO `unit`(`unit_number`, `unit_title`) VALUES ('Unit ".$unit."','$title');") 
					or die(mysqli_error());
					 
						echo "<script>alert('Successfully Added');document.location='../tc_add_unit.php'</script>"; 
							
			 
			 							
}
?>