<?php 
	$connection = new mysqli('127.0.0.1', 'root','','dbcabilif1');
	
	if (!$connection){
		die (mysqli_error($mysqli));
	}
		
?>