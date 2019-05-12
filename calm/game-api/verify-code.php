<?php 
    header("Access-Control-Allow-Origin: *");
    include '../../dbconnect/dbconn.php'; 
    if (isset($_POST['code']))
	{
		$code=$_POST['code'];

        $result=mysqli_query($conn, "SELECT * FROM add_to_ct_generate_code WHERE code='$code';")
        or die ('invalid code' . mysql_error());
        $row=mysqli_fetch_array($result);
        $run_num_rows = mysqli_num_rows($result);
            
        if ($run_num_rows > 0 )
        {
            echo "true";
        }
        
        else
        {
            echo "false";
        }
	}
?>
