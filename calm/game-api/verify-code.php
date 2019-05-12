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
            $sql = "UPDATE usr_student SET ".$_POST['quarter']."='true' WHERE username='".$_POST['user']."'";
            if (mysqli_query($conn, $sql)) {
                //echo "Record updated successfully";
            } else {
                //echo "Error updating record: " . mysqli_error($conn);
            }
            //mysqli_close($conn);
            echo "true";
        }
        else
        {
            echo "false";
        }
	}
?>
