<?php 
include 'dbconnect/dbconn.php';

if(isset($_GET['getuserlogged'])) {
	if($_GET['getuserlogged'] == "admin") {
		echo 1;
	}
	
}

if(isset($_POST["score"])) { 
	$content = $_POST["score"];
	 
  mysqli_query ($conn, "UPDATE `players` SET `score`='$content' WHERE username='tungs';") or die(mysqli_error());
 
 
	
}

if(isset($_POST["missed"])) { 
	$content = $_POST["missed"];
	 
  mysqli_query ($conn, "UPDATE `players` SET `missed`='$content' WHERE username='tungs';") or die(mysqli_error());
 
 
	
}

if(isset($_POST["Quarter1"])) { 
	$content = $_POST["Quarter1"];
	 
  mysqli_query ($conn, "UPDATE `players` SET `quarter`='$content' WHERE username='tungs';") or die(mysqli_error());
 
 
	
}

if(isset($_POST["Level1"])) { 
	$content = $_POST["Level1"];
	 
  mysqli_query ($conn, "UPDATE `players` SET `level`='$content' WHERE username='tungs';") or die(mysqli_error());
 
 
	
}

if(isset($_POST["Chapter1"])) { 
	$content = $_POST["Chapter1"];
	 
  mysqli_query ($conn, "UPDATE `players` SET `chapter`='$content' WHERE username='tungs';") or die(mysqli_error());
 
 
	
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