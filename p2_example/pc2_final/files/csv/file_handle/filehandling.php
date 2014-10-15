<?php

/*
	Nikhil Virparia
	IS218
	Assignment 2
*/


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
	  

	  // get the links and table 
	public function print_table_links($records, $map) 
	{
	if (empty($_GET)){
			
			$i = -1;
			foreach($records as $record){
				$i++;
			// Link Statistic could be osl81, or web (both works)
			echo (html_link_table::link("http://web.njit.edu/~nav3/p2_example/pc2_final/index.php?record=" . $i , $record['INSTNM']));
			echo '</p>';
		}
	}

	  
	  // Print out the table record inside the link
	  $record = $records[$_GET['record']];
	  $record = array_combine($map, $record);
	  echo (html_link_table::table($record));

	
	// close of the function 
	}
}	
?>