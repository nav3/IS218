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
	 
	}
	// Creating new obj, and reading the file
	$newfile = new filehandling();


	//$newfile2 = new filehandling();
	
	$newfile->readfile_csv("hd2013.csv",TRUE);
	//$newfile2->readfile_csv("hd2013_1.csv",TRUE);
}

/*
 class MyOtherClass extends filehandling{
	  // Make links to the records
	    public function newMethod() {
     if (empty($_GET)){
			
			$i = -1;

			foreach($records as $record){
				$i++;
				//$University_name= $i -1;

			
				echo '<a href = '.' "http://web.njit.edu/~nav3/IS218/pc1/index.php?record=' . $i . '"'. '>'.$record['INSTNM']. '</a>';
				
				echo '</p>';
				}
		}
   // Print out the record inside the link
	  $record = $records[$_GET['record']];
	  // Make the table
	  	echo "<table border=1>";
      	foreach($record as $key => $value) {
		echo "<tr>";
			
		echo "<th> $key </th> <td> &nbsp;&nbsp;&nbsp;$value </td>";
			echo "</tr>";


			//echo "<td> $key:</td><td>&nbsp;&nbsp;&nbsp;$value </td>";
		//	echo "</tr>";
		}
		
			//echo '<td> $key . ': ' . $value .  </td>';
			

			
		// close table
		echo "</table>";
	
	// close of the function 
  
  
  }
  
  	//$newfile2 = new filehandling();
	
	$newfile->readfile_csv("hd2013.csv",TRUE);
	//$newfile2->readfile_csv("hd2013_1.csv",TRUE);
	
  	// Create a new object
$newobj = new MyOtherClass;
	
	// Output the object as a string
echo $newobj->newMethod();
  	
	
 }
 */

?>