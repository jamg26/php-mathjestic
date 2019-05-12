<?php 
    header("Access-Control-Allow-Origin: *");
    include '../../dbconnect/dbconn.php'; 
    if (isset($_POST['quarter1']))
	{
		$code=$_POST['username'];

        $result=mysqli_query($conn, "SELECT * FROM usr_student WHERE username='$code';")
        or die ('invalid code' . mysql_error());
        $row=mysqli_fetch_array($result);
        $run_num_rows = mysqli_num_rows($result);
        if ($run_num_rows > 0 )
        {
            echo $row['q_1'];
        }
        else
        {
            echo "false";
        }
    }
    
    if (isset($_GET['quarter2']))
	{
		$code=$_GET['username'];

        $result=mysqli_query($conn, "SELECT * FROM usr_student WHERE username='$code';")
        or die ('invalid code' . mysql_error());
        $row=mysqli_fetch_array($result);
        $run_num_rows = mysqli_num_rows($result);
        if ($run_num_rows > 0 )
        {
            echo $row['q_2'];
        }
        else
        {
            echo "false";
        }
    }
?>
