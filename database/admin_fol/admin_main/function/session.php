<?php
session_start();
if(!ISSET($_SESSION['admin_id']))
	{
		echo "<script>window.location = 'index.php';</script>";
	}	
?>