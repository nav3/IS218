<?php
/*
	Nikhil Virparia
	IS218
	Assignment 2
*/
	namespace classes\File;
	
	class handlefile {
			// reading through the file, and combining headings and row
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