<?php

	$file= 'files/tc_dll/'.$_GET['view_file']; 
	$filename = $_GET['view_file'];
	header('Content-type: application/pdf');
	header('Content-Disposition: inline; filename="' . $filename . '"');
	header('Content-Transfer-Encoding: binary');
	header('Accept-Ranges: bytes');
	@readfile($file);
?>