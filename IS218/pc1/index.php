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
	
	public function readfile_csv($file_csv, $column_headings)
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
			
			
				 echo '<a href=' . '"http://web.njit.edu/~nav3/IS218/pc1/index.php?record=' . $college_num . '"' . '>College ' . $i . ' </a>';
				echo '</p>';
					
			}
		}	
	  
	  $record = $records[$_GET['record']];
	  	echo "<table border='1'>";
			
      	foreach($record as $key => $value) 
    	{
			echo "<tr>";
			echo "<td> $key:  $value</td>";
			echo "</tr>";

			//echo '<td> $key . ': ' . $value .  </td>';
			
		}
			
			
		echo "</table>";
		
		

/*
  public function displayTable($rows, $cols)
  {
   for($c = 0; $c < $cols; $c++)
   {
    echo '<tr>';
    for($r = 0; $r < $rows; $r++)
    {
	 echo '<td>' 

	 '</td>';
	// echo "<td> <input type='text' name='tbl_cells[]' /> </td>";
    } //ends rows loop
    echo '</tr>';
   } //ends columns loop
  } //ends function display
	
				// Call the foobar() function with 2 arguments
//call_user_func_array("display", array(record));
$obj = new Display();
//$obj -> display(3,3);
	
	/*
	public function output() {
	
				
		$output = '<table border="1" cellspacing="1" cellpadding="3">';

            // Table head.
            $output .= '<thead><tr><th>&nbsp;</th>';
            foreach ($this->_rows as $row) {
                foreach ($row as $key => $col) {
                    $output .= '<th>' . $key .  '</th>';
                }
                break;
            }
            $output .= '</tr></thead>';

            // Table body.
            $output .= '<tbody>';
            foreach ($this->_rows as $i => $row) {
                $output .= '<tr>';
                $output .= '<th>' . $i . '</th>';
                foreach ($row as $col) {
                     $output .= '<td>' . $col .  '</td>';
                }
                $output .= '</tr>';
            }
            $output .= '</tbody>';

            // Close table.
            $output .= '</table>';
	
	}
*/
	//foreach($car_order as $key => $value) {
		//echo $key . ': ' . $value . "<br>\n";
		//print_r($car_orders);
		//print_r($_GET);
	//}
	
	  /* loop to print out the records
		
	foreach($records as $record) 
	{
    	foreach($record as $key => $value) 
    	{
      		echo $key . ': ' . $value .  "</br> \n";
    	}
    	echo '<hr>';
  	}
	*/
	
	// close of the function 
	}
	
// close of class
}

	$newfile = new filehandling();
  
	$newfile->readfile_csv("hd2013.csv",TRUE);
	/*
		if(empty($_GET)) {

			  foreach($car_orders as $car_order) {
			  $i++;
			  $college_order_num = $i - 1;
				foreach($car_order as $key => $value) {
					echo $key . ': ' . $value . "<br>";
					print_r($car_orders);
			  }
			  //echo '<a href=' . '"http://web.njit.edu/~nav3/IS218/cars.php?car_order=' . $college_order_num . '"' . '>Car Order ' . $i . ' </a>';
			 /// echo '</p>';
  
  }
  
  }
*/
?>