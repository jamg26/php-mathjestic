<?php
error_reporting(E_ALL);
	include('../../../../dbconnect/dbconn.php');
	if (isset($_POST['addsection']))
{
	$name=$_POST['name'];  
	$adviser=$_POST['adviser'];     
 
 $sql1 ="INSERT INTO clm_section (section_name,adviser) VALUES ('$name','$adviser');";
 
if (mysqli_query($conn, $sql1))
 { 	 
	$query = mysqli_query ($conn, "SELECT * FROM clm_section where adviser='$adviser';") or die (mysqli_error());
 $fetch = mysqli_fetch_array ($query);
 $section_id = $fetch['section_id'];
 
 $query = mysqli_query ($conn, "UPDATE `usr_teacher` SET `section_id` = '$section_id' WHERE `usr_teacher`.`tc_id` = '$adviser';")or die(mysqli_error());
 echo "<script>alert('Successfully added');document.location='../admin_section.php'</script>"; 
}
 else 
{  
 echo "<script>alert('Failed to add');document.location='../admin_section.php'</script>";  		 
} 			 							
}
?>