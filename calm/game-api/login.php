<?php 
    header("Access-Control-Allow-Origin: *");
    include '../../dbconnect/dbconn.php'; 
        if (isset($_POST['username']))
        {
		$username=$_POST['username'];
		$password=$_POST['password'];

        $result=mysqli_query($conn, "SELECT * FROM usr_student WHERE username='$username' AND password='$password' AND st_stat='Registered';")
        or die ('cannot login' . mysql_error());
        $row=mysqli_fetch_array($result);
        $run_num_rows = mysqli_num_rows($result);
            
        if ($run_num_rows > 0 )
        {
            echo "Success!";
        }
        
        else
        {
            echo "Wrong username/password!";
        }
	}
?>
