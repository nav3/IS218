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
		
	foreach($records as $record) 
	{
    	foreach($record as $key => $value) 
    	{
      		echo $key . ': ' . $value .  "</br> \n";
    	}
    	echo '<hr>';
  	}
	
	}
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