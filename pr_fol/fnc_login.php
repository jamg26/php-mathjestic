<?php
include('dbconn.php');
if (isset($_POST['login']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];

			$result=mysqli_query($conn, "SELECT * FROM usr_parent WHERE username='$username' AND password='$password' AND pr_stat='Registered';")
			or die ('cannot login' . mysql_error());
			$row=mysqli_fetch_array($result);
			$run_num_rows = mysqli_num_rows($result);
							
						if ($run_num_rows > 0 )
						{
							session_start ();
							$_SESSION['pr_id'] = $row['pr_id'];
							header ("location:pr_main/pr_dashboard.php");
						}
						
						else
						{
							echo "<script>alert('Invalid Username or Password');document.location='index.php';</script>";
							 
						}
	}
?>