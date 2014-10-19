<?php
	
	namespace classes\Html;

	// Html functions print table
	class html {
		
		//Printing table by passing table and array
		public static function printtable($records,$headings){
			if(isset($_GET['record'])){
				$table = '<div id="Table"><table>';
				$i = 0;
				foreach($records[$_GET['record']] as $key => $value){
					$table .= '<tr><th align="left">' . $headings[$i]['varTitle'] . '</th>';
					$table .= '<td>' . $value . '</td></tr>';
					$i++;
				}
				$table .= '</table></div>';
				echo $table;
			}
		}

		// Make links
		public static function makeLink($urlVar, $increment,$title){
			echo '<a href="?'.$urlVar.'=' .$increment. '">' . $title . '</a>';
			echo'</p>';
		}
		// Print college titles
		public static function printTitle($collegeName){
			if(empty($_GET)){
				echo '<h1>'. $collegeName . ' Info'. '</h1>';
			}
		}

	}
?>