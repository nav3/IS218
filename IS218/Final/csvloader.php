<?php 
/*
	Nikhil Virparia
	IS218
	Final Project
*/

ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);
$csv = new CSVLoader();
$data = $csv->openFile('finance.csv');
$csv->writeToDatabase($data);

class csvloader{
	
	public function openFile($f){
		$firstLine = true;
		$fields;
		$data;
		//Open the $f file and use r for read mode.
		if($handle = fopen($f,"r")){
			//Getting the csv data.
			while($line = fgetcsv($handle)){
				//Was it the first time?
				if($firstLine == true){
					$firstLine = false;
					$fields = $line;
				}
				else{
				//Adding the [] adds a new numerical index. 
				$data[] = array_combine($fields,$line);	
				}
			}
		fclose($handle);
		
		return $data;
		
		}
		else{
			//Could not open file!
			echo "Failed to open the file " . $f;
		}
	}
	
		public function writeToDatabase($records){
		$table = "finances";
		$user = "nav3";
		$pass = "YD9Aowq9";
		try{
		// If not then write localhost, and colleges
		$DBH = new PDO('mysql:host=sql1.njit.edu;dbname=nav3',$user,$pass);
		$DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		

		//Let's write to the database
		foreach($records as $record){
			$insert = null;
			foreach($record as $key => $value){
				$insert[] = $value;
			}
			
			print_r($insert);
			
			$STH = $DBH->prepare("insert into $table values(?,?,?)");
			$STH->execute($insert);	
		}
		
		
		$DBH = null;
		
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
			
	} // End of function
}


?>

