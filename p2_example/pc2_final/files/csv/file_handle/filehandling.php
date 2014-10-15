<?php

namespace files\csv\file_handle;

class filehandling 
{
	// defining variables
	public static $file_csv;
	public static $column_headings;
	
	// Reading csv file
	public static function readfile_csv($file_csv, $column_headings)
	{

	  ini_set('auto_detect_line_endings',TRUE);
	  //	variable $file_csv is holding spot for filehandling to be opened
		if (($handle = fopen($file_csv, "r")) !== FALSE) 
		{
    		while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) 
			{
     			if($column_headings == TRUE) 
				{
       				$column_heading = $row;
       				$column_headings = FALSE; 
     			} 
				else 
				{
       				$record = array_combine($column_heading, $row);
       				$records[] = $record;
				}

    		}

    		fclose($handle);
	  }
	  return $records; 
	}
	
	
	  
}

	$newfile = filehandling::readfile_csv("hd2013.csv",TRUE);
	//filehandling::print_table_links($newfile);
	
	// read second file
	$newfile2 = filehandling::readfile_csv("hd2013_1.csv",TRUE);	

?>