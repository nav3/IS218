<?php
/*
	Nikhil Virparia
	IS218
	Assignment 2
*/
	//access to class files
	require 'Autoloader.php';
	
	//csv file needs auto detect line endings
	ini_set('auto_detect_line_endings', TRUE);

	// Change it in one place 
	use \classes\File as kp;
	
	//Stores the csv file in a variable
	$csv1 = 'csv/hd2013.csv';
	$csv2 = 'csv/hd2013_1.csv';

	// uploading csv file
	$file = kp\filemanger::uploadFile($csv1);
	$file2 = kp\filemanger::uploadFile($csv2);

	//Objects stores into array
	$handle = new kp\handlefile();
	$handle2 = new kp\handlefile();

		
	$records = $handle->headings($file, TRUE);
	$headings = $handle->headings($file2, TRUE);

	//Map 
	$collegeName = '';
	if(isset($_GET['record'])){
		$collegeName = $records[$_GET['record']]['INSTNM'];
	}
	/* Print tables and link */
	new \classes\Html\Link($records, $headings);
	\classes\Html\html::printTable($records, $headings);
	
?>