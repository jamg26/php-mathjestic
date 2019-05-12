<?php
	include('dbconn.php');
	if (isset($_POST['signup']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$lastname=$_POST['lastname'];	
	$firstname=$_POST['firstname'];
	$middlename=$_POST['middlename'];
	$class_id=$_POST['class_id'];
	$LRNnumber=$_POST['LRNnumber'];
	$gender=$_POST['gender'];
	
	$check = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `usr_student` WHERE `username` = '$username'"));
		if($check == 1)
			{
				echo "<script>alert('USERNAME ALREADY EXIST')</script>";	 
			}
			
			else
				{
					mysqli_query ($conn, "INSERT INTO usr_student (LRNnumber, username, password, lastname, firstname, middlename, section_id, profile_img, st_entry, st_stat, sex)
					VALUES ('$LRNnumber','$username', '$password', '$lastname', '$firstname', '$middlename', '$class_id', 'user.png', 'Active', 'Unregistered', '$gender')") 
					or die(mysqli_error());	 
						echo "<script>alert('Successfully Register');document.location='../st_fol/index.php#signin'</script>"; 
			 
				}								
}
?>