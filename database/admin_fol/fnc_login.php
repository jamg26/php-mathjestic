<?php
include('dbconn.php');
if (isset($_POST['login']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];

			$result=mysqli_query($conn, "SELECT * FROM usr_admin WHERE username='$username' AND password='$password'")
			or die ('cannot login' . mysql_error());
			$row=mysqli_fetch_array($result);
			$run_num_rows = mysqli_num_rows($result);
							
						if ($run_num_rows > 0 )
						{
							session_start ();
							$_SESSION['admin_id'] = $row['admin_id'];
							header ("location:admin_main/admin_dashboard.php");
						}
						
						else
						{
							echo "<script>alert('Invalid Username or Password')</script>";
							header("location:index.php");
						}
	}
?>