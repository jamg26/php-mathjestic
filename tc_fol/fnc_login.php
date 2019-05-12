<?php
include('dbconn.php');
if (isset($_POST['login']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];

			$result=mysqli_query($conn, "SELECT * FROM usr_teacher WHERE username='$username' AND password='$password' AND tc_status='Registered';")
			or die ('cannot login' . mysql_error());
			$row=mysqli_fetch_array($result);
			$run_num_rows = mysqli_num_rows($result);
							
						if ($run_num_rows > 0 )
						{
							session_start ();
							$_SESSION['tc_id'] = $row['tc_id'];
							header ("location:tc_main/index.php");
						}
						
						else
						{
							echo "<script>alert('Invalid Username or Password');document.location='index.php';</script>";
							 
						}
	}
?>