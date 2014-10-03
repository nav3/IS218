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
					  // foreach 

    		}

    		fclose($handle);
	  }
	  
	if (empty($_GET)){
			
			$i = -1;

			foreach($records as $record){
				$i++;
				//$University_name= $i -1;
			// Link Statistic 
			echo (html_link_table::link("http://web.njit.edu/~nav3/IS218/pc1/index3.php?record=" . $i , $record['INSTNM']));
				
				echo '</p>';
				}
		}
	  
	  // Print out the record inside the link
	  $record = $records[$_GET['record']];
	  
	  echo (html_link_table::table($record));

	
	// close of the function 
	}
	
}

	
	  // Make links to the records
	  class html_link_table {
	  
		public static function link($href, $a) {
		
		$html = '<a href="' . $href . '">' . $a . '</a>';
		
		
		return $html;
		
		}
		
		public static function table($record) {
			  // Make the table
	  	$html = "<table border=1>";
      	foreach($record as $key => $value) {
		$html .= "<tr>";
			
		$html .= "<th> $key  </th> <td> &nbsp;&nbsp;&nbsp;$value </td>";
			$html .= "</tr>";


			//echo "<td> $key:</td><td>&nbsp;&nbsp;&nbsp;$value </td>";
		//	echo "</tr>";
		}
		
			//echo '<td> $key . ': ' . $value .  </td>';
			

			
		// close table
		$html .= "</table>";
		
		return $html;
		}
	  
	  }
	  
	  
// Creating new obj, and reading the file
	$newfile = new filehandling();
	$newfile2 = new filehandling();
	
	$newfile->readfile_csv("hd2013.csv",TRUE);
	$newfile2->readfile_csv("hd2013_1.csv",TRUE);

?>