<?php

/*
 Nikhil Virparia
	IS218
	Challenge 1
*/
		class File_handling {
		
		public static function openFile($file){
			$file_csv = fopen($file, "r");
			return $file_csv ;
		}
		
		public static function closeFile($file_csv){
			fclose($file_csv);
		}
		
	}

	class readcsv extends File_handling{
		
		public static $file_csv;
		public static $colmn_headings;
		
		public function readfile_csv($file_csv, $colmn_headings){
			
			while(($row = fgetcsv($file_csv, ",")) !== FALSE){
					if($colmn_headings){
						$column_heading = $row;
						$colmn_headings = FALSE;
					}
					else{
						$record = array_combine($column_heading, $row);
						$records[] = $record;
					}
				}
				return $records;
		}
		
	}

// Print table from csv file
	class html_Link_table{
		
		public static function printTable($records,$url_var){
			if(isset($_GET[$url_var])){
				echo '<table border="1">';
				foreach($records[$_GET[$url_var]] as $key => $value){
					echo "<tr>";
					echo "<th> $key </th> <td> &nbsp;&nbsp;&nbsp;$value </td>";
					echo "</tr>";
				}
					echo '</table>';
			}
		}
		
		// Construct the table 
			public function __construct($records){

			$i = -1;
			if(empty($_GET)){
				foreach($records as $record){
					$i++;
					echo '<a href="?record=' .$i. '">' . $record['INSTNM'] . '</a>';
					echo'</p>';
				}
			}
			
			html_Link_table::printTable($records, 'record');
		}
	}
	
$csv = 'hd2013.csv';
$file = File_handling::openFile($csv);

$file_csv = new readcsv();
$records = $file_csv->readfile_csv($file, TRUE);

new html_Link_table($records);

?>