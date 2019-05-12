<?php
session_start();
if(!ISSET($_SESSION['pr_id']))
	{
		echo "<script>window.location = 'index.php';</script>";
	}	
?>