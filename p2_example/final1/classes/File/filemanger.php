<?php
	
	namespace classes\File;

	class filemanger {
		
		//Function for uploading a file for reading.	
		public static function uploadFile($file){
			$handle = fopen($file, "r");
			return $handle;
		}
		
		//Function for closing the file once it is done being used. 
		public static function closeFile($handle){
			fclose($handle);
		}
	}
?>