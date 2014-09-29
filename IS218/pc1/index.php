<?php
/*
	Nikhil Virparia
	IS218
	Assignment 1
*/

class filehandling 
{
	// defining variables
	public $file_csv;
	public $column_headings;
	public $college_name;
	
	// Reading csv file
	public function readfile_csv($file_csv, $column_headings)
	{

	  ini_set('auto_detect_line_endings',TRUE);
	  //	variable $file_csv is holding spot for filehandling to be opened
		if (($handle = fopen($file_csv, "r")) !== FALSE) 
		{
    		while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
     			if($column_headings == TRUE) {
       				$column_heading = $row;
       				$column_headings = FALSE;
     			} else {
       				$record = array_combine($column_heading, $row);
       				$records[] = $record;
     				   }

    		}

    		fclose($handle);
	  }
	  
	  if(empty($_GET)) {
	  	foreach($records as $record) {
				  $i++;
				$college_num = $i - 1;			
			
			// Making links to the file
				 echo '<a href=' . '"http://web.njit.edu/~nav3/IS218/pc1/index.php?record=' . $college_num . '"' . '>College ' . $i . ' </a>';
				echo '</p>';
					
			}
		}	
	  
	  $record = $records[$_GET['record']];
	  // Make the table
	  	echo "<table>";
      	foreach($record as $key => $value) {
		echo "<tr>";
			
			echo "<th> $key </th> <td> &nbsp;&nbsp;&nbsp;&nbsp;$value </td>";
			echo "</tr>";


			//echo '<td> $key . ': ' . $value .  </td>';
			
		}
			
		// close table
		echo "</table>";
	
	// close of the function 
	}

}
// Creating new obj, and reading the file
	$newfile = new filehandling();
	$newfile->readfile_csv("hd2013.csv",TRUE);

?>