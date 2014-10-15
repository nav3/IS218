<?php

/*
	Nikhil Virparia
	IS218
	Assignment 2
*/
// defines where my application is stored ../ means up one folder, if you put ./ then it's real path
define('APPLICATION_PATH', realpath('../'));

$paths = array(
	APPLICATION_PATH,
	APPLICATION_PATH . '/files',
	get_include_path()
);

set_include_path(implode(PATH_SEPARATOR, $paths));

// autoload class
function __autoload($className){
	$filename = str_replace('\\', '/', $className) . '.php';
	require_once $filename;
	//return;

}
// instead of doing this, I could do save the long name in variable, and use it.
// called the base path
use \files\csv as f1;

new f1\file_handle\filehandling();
//echo $user->getName();

new f1\link_table\html_link_table();

	  
	//$newfile = filehandling::readfile_csv("hd2013.csv",TRUE);
	//filehandling::print_table_links($newfile);
	
	// read second file
	//$newfile2 = filehandling::readfile_csv("hd2013_1.csv",TRUE);


	

?>