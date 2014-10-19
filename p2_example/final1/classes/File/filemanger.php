<?php
/*
	Nikhil Virparia
	IS218
	Assignment 2
*/
	namespace classes\File;

	// Filemanger class
	class filemanger {
		
		// Uploading a file for reading.	
		public static function uploadFile($file){
			$handle = fopen($file, "r");
			return $handle;
		}
		
		//Closing the file
		public static function closeFile($handle){
			fclose($handle);
		}
	}
?>