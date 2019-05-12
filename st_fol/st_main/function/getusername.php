<?php 

include '../../../dbconnect/dbconn.php'; 
session_start();

$getusername= mysqli_query ($conn, "Select *from usr_student where st_id='".$_SESSION['st_id']."';") or die(mysqli_error());
if($fetch = mysqli_fetch_array($getusername))
{
 echo $fetch['username'];

} 

?>