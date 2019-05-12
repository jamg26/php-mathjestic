<?php
session_start();
if(!ISSET($_SESSION['st_id']))
	{
		echo "<script>window.location = 'index.php';</script>";
	}	
?>