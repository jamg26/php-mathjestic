<?php
	include('dbconn.php');
	if (isset($_POST['signup']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$lastname=$_POST['lastname'];	
	$firstname=$_POST['firstname'];
	$middlename=$_POST['middlename'];
	
	$check = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `usr_teacher` WHERE `username` = '$username'"));
		if($check == 1)
			{
				echo "<script>alert('USERNAME ALREADY EXIST')</script>";	 
			}
			
			else
				{
					mysqli_query ($conn, "INSERT INTO usr_teacher (username, password, lastname, firstname, middlename, profile_img, tc_status)
					VALUES ('$username', '$password', '$lastname', '$firstname', '$middlename', 'user.png', 'Unregistered')") 
					or die(mysqli_error()); 
							echo "<script>alert('Successfully Register');document.location='../tc_fol/index.php#signin'</script>"; 
			 
				}								
}
?>