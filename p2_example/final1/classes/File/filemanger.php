<?php
	
	/* uploading a file for reading */
	namespace classes\File;

	class filemanger {
		
		public static function uploadFile($file){
			$handle = fopen($file, "r");
			return $handle;
		}
	
		public static function closeFile($handle){
			fclose($handle);
		}
	}
?>