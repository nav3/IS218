<?php

/* file handling class */
	namespace classes\File;
	
	class fileHandling {
		
		
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
				\classes\File\manageFile::closeFile($handle);
				return $records;
		}
	}
?>