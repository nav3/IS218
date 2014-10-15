<?php

/*
	Nikhil Virparia
	IS218
	Assignment 1
*/

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
	public function print_table_links($records) 
	{
	if (empty($_GET)){
			
			$i = -1;
			foreach($records as $record){
				$i++;
			// Link Statistic could be osl81, or web (both works)
			echo (html_link_table::link("http://web.njit.edu/~nav3/IS218/pc1/index.php?record=" . $i , $record['INSTNM']));
			echo '</p>';
		}
	}

	  
	  // Print out the table record inside the link
	  $record = $records[$_GET['record']];
	  
	  echo (html_link_table::table($record));

	
	// close of the function 
	}
}	
	  // Make class for link and table
	  class html_link_table {
	  
		// Function for Link
		public static function link($href, $a) {
			// Creating link
			$html = '<a href="' . $href . '">' . $a . '</a>';
		
		return $html;
		
		}
		
		// Function for Table
		public static function table($record) {
	
			// Make the table
			$html = "<table border=1>";
			foreach($record as $key => $value) 
			{
			$html .= "<tr>";
				
			$html .= "<th> $key  </th> <td> &nbsp;&nbsp;&nbsp;$value </td>";
			$html .= "</tr>";
		}
		
			
		// close table
		$html .= "</table>";
		
		return $html;
		}
	  
	  }
	  
	$newfile = filehandling::readfile_csv("hd2013.csv",TRUE);
	filehandling::print_table_links($newfile);
	
	// read second file
	$newfile2 = filehandling::readfile_csv("hd2013_1.csv",TRUE);

	// passing the second file using static method
	$new_map = map_new_file::create_map($newfile2);

		//Array combine in map
					foreach($new_map as $file_handler) {
					$new_file[$i] = array_combine($new_map, $file_handler[$i]);	
				}
				echo $new_file[$i];
				
	// create map
	class map_new_file{
		
		public static function create_map($file_handler) 
		{
			
			foreach($file_handler as $array23) 
		{
			$key = $array23['varname'];
			$value = $array23['varTitle'];
			$map[$key] = $value;		
		}
		return $map;
		
		}
		
	}
	

?>