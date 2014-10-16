<?php
	
	namespace classes\Html;

	// Html functions print table
	class htmlFunctions {
		
		//Function for printing a table by passing in an array, and passing in one url variable. 
		public static function printtable($records,$headings){
			if(isset($_GET['record'])){
				$table = '<div id="Table"><table border="1">';
				$i = 0;
				foreach($records[$_GET['record']] as $key => $value){
					$table .= '<tr><th>' . $headings[$i]['varTitle'] . '</th>';
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

		public static function printTitle($collegeName){
			if(empty($_GET)){
				echo '<h1 id="title">List of Colleges</h1>';
			}
			else{
				echo '<h1 id="title">'. $collegeName . ' Info'. '</h1>';
			}
		}

	}
?>