<?php

/*
	Nikhil Virparia
	IS218
	Assignment 2
*/

include_once 'autoload.php';

use \files\csv as cp;
//new kp\controllers\test();	

	$newfile = cp\file_handle\filehandling::readfile_csv("hd2013.csv",TRUE);
	
		
	// read second file
	$newfile2 = cp\file_handle\filehandling::readfile_csv("hd2013_1.csv",TRUE);

	// passing the second file using static method
	$new_map = cp\map\map_new_file::create_map($newfile2);
	
	//$new = cp\link_table\html_link_table::print_table_links($newfile,$new_map);


			
	

?>