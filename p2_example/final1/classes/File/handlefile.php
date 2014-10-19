<?php

	namespace classes\File;
	
	class handlefile {
		
		public function headings($handle, $hasColumnheadings){
			
			while(($row = fgetcsv($handle, ",")) !== FALSE){
					if($hasColumnheadings){
						$column_heading = $row;
						$hasColumnheadings = FALSE;
					}
					else{
						$record = array_combine($column_heading, $row);
						$records[] = $record;
					}
				}
				\classes\File\filemanger::closeFile($handle);
				return $records;
		}
	}
?>