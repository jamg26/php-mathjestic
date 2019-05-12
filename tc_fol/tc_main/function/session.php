<?php
session_start();
if(!ISSET($_SESSION['tc_id']))
	{
		echo "<script>window.location = 'index.php';</script>";
	}	
?>