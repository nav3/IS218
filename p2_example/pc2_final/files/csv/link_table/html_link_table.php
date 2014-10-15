<?php	 

/*
	Nikhil Virparia
	IS218
	Assignment 2
*/


namespace files\csv\link_table;
	
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
				
			$html .= "<th> $key </th> <td> $value </td>";
			$html .= "</tr>";
		}
		
			
		// close table
		$html .= "</table>";
		
		return $html;
		}
	  
	  }
?>