<?php	 
namespace files\csv\link_table;
	
	 // Make class for link and table
	  class html_link_table {
	  
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
?>