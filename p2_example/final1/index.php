<?php
	//Gives access to functions in other files. 
	require 'Autoloader.php';
	
	//Fixes issues with csv files
	ini_set('auto_detect_line_endings', TRUE);

	// Change it in one place 
	use \classes\File as kp;
	
	//Stores the csv file in a variable
	$csv = 'csv/hd2013.csv';
	$csv2 = 'csv/hd2013_1.csv';

	// uploading csv file
	$file = kp\filemanger::uploadFile($csv);
	$file2 = kp\filemanger::uploadFile($csv2);

	//FileHandling object that passes the file stores into array
	$handle = new kp\handlefile();
	$handle2 = new kp\handlefile();

	$records = $handle->headings($file, TRUE);
	$headings = $handle->headings($file2, TRUE);

	$collegeName = '';
	if(isset($_GET['record'])){
		$collegeName = $records[$_GET['record']]['INSTNM'];
	}
	/* Print links in table vertically */
	new \classes\Html\printLinks($records, $headings);
	\classes\Html\htmlFunctions::printTable($records, $headings);
	
?>