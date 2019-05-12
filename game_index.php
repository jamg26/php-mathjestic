<?php 
include '../../dbconnect/dbconn.php';


if(isset($_POST["score"])) { 
	$content = $_POST["score"];
	 
  mysqli_query ($conn, "UPDATE `players` SET `score`='$content' WHERE username='tungs';") or die(mysqli_error());
 
 
	
}

if(isset($_POST["username"])) { 

	$username = $_POST["username"];  
	$checkusername= mysqli_query ($conn, "Select *from players where username='$username';") or die(mysqli_error());
	if($checkusername==true)
	{
		
	} 
	else
	{
	$checkusername= mysqli_query ($conn, "INSERT INTO `players`(`username`, `score`) VALUES('$username','0')") or die(mysqli_error());
		
	}
 
}
?> 