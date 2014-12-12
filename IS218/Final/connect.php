<?php
/*
	Nikhil Virparia
	IS218
	Final Project
*/
	try {
		$dbh = new PDO('mysql:host=localhost; dbname=college_data; charset=utf8', 'root', 'cadcszxcadc12');
	}catch(Exception $e) {
		print "Error: " . $e->getMessage() . "<br>";
		die();
	}	
?>