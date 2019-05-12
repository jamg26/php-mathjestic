<?php
error_reporting(E_ALL);
	include('../../../../dbconnect/dbconn.php');
	if (isset($_POST['addquarter']))
{
	$name=$_POST['name'];  
	$quarter=$_POST['quarter'];     
	$datenow=date("Y-m-d");
 $sql1 ="UPDATE `clm_quarter` SET `quarter_status`='past quarter' WHERE quarter_status='Current Quarter';";
 

if (mysqli_query($conn, $sql1))
 { 	  
   $query = mysqli_query ($conn, "INSERT INTO `clm_quarter`(`quarter`, `quarter_status`, `date`) VALUES  ('$quarter','$name','$datenow');")or die(mysqli_error());


	echo "<script>alert('Successfully added');document.location='../admin_add_quarter.php'</script>"; 
}
 else 
{  
 echo "<script>alert('Failed to add');document.location='../admin_add_quarter.php'</script>";  		 
} 			 							
}
?>