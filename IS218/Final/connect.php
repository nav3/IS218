<?php
/*
	Nikhil Virparia
	IS218
	Final Project
*/

	try {
		$dbh = new PDO('mysql:host=sql.njit.edu; dbname=nav3;charset=utf8', 'nav3', 'YD9Aowq9');
	}catch(Exception $e) {
		print "Error: " . $e->getMessage() . "<br>";
		die();
	}
	
?>