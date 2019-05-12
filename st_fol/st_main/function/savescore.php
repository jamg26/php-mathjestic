<?php 
include '../../../dbconnect/dbconn.php';
 	
session_start();	

if(isset($_POST["score"])) { 

$querys = mysqli_query ($conn, "SELECT * FROM clm_quarter WHERE `quarter_status`='Current Quarter';") or die (mysqli_error());
$fetchs = mysqli_fetch_array ($querys);
$karun_na_quarter = $fetchs['quarter'];


$score = $_POST["score"];

mysqli_query ($conn, "UPDATE players SET `score`='$score' WHERE username='".$_SESSION['st_id']."' and quarter='$karun_na_quarter';") or die(mysqli_error());

}

if(isset($_POST["missed"])) { 

$querys = mysqli_query ($conn, "SELECT * FROM clm_quarter WHERE `quarter_status`='Current Quarter';") or die (mysqli_error());
$fetchs = mysqli_fetch_array ($querys);
$karun_na_quarter = $fetchs['quarter'];


$missed = $_POST["missed"];

mysqli_query ($conn, "UPDATE players SET `missed`='$missed' WHERE username='".$_SESSION['st_id']."' and quarter='$karun_na_quarter';") or die(mysqli_error());

}

if(isset($_POST["Chapter1"])) { 

$querys = mysqli_query ($conn, "SELECT * FROM clm_quarter WHERE `quarter_status`='Current Quarter';") or die (mysqli_error());
$fetchs = mysqli_fetch_array ($querys);
$karun_na_quarter = $fetchs['quarter'];


$chapter = $_POST["Chapter1"];

mysqli_query ($conn, "UPDATE players SET `chapter`='$chapter' WHERE username='".$_SESSION['st_id']."' and quarter='$karun_na_quarter';") or die(mysqli_error());

}

if(isset($_POST["level1"])) { 

$querys = mysqli_query ($conn, "SELECT * FROM clm_quarter WHERE `quarter_status`='Current Quarter';") or die (mysqli_error());
$fetchs = mysqli_fetch_array ($querys);
$karun_na_quarter = $fetchs['quarter'];


$level = $_POST["level1"];

mysqli_query ($conn, "UPDATE players SET `level`='$level' WHERE username='".$_SESSION['st_id']."' and quarter='$karun_na_quarter';") or die(mysqli_error());

}

if(isset($_GET["username"])) { 
if($_GET["username"]=='username') { 

$querys = mysqli_query ($conn, "SELECT * FROM clm_quarter WHERE `quarter_status`='Current Quarter';") or die (mysqli_error());
$fetchs = mysqli_fetch_array ($querys);
$karun_na_quarter = $fetchs['quarter'];

$checkusername= mysqli_query ($conn, "Select *from players where username='".$_SESSION['st_id']."' and quarter='$karun_na_quarter';") or die(mysqli_error());
if($fetch = mysqli_fetch_array($checkusername))
{
 echo "<script>document.location='../../../mathjestic_quest/'</script>";

} 
else
{
 mysqli_query ($conn, "INSERT INTO `players`(`username`, `score`, `quarter`) VALUES('".$_SESSION['st_id']."','0','$karun_na_quarter')") or die(mysqli_error());
 
 echo "<script>document.location='../../../mathjestic_quest/'</script>";
}
}
}
?>