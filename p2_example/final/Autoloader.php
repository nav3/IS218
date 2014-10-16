<?php

	class Autoloader{
		public static function loader($className){
			$className = ltrim($className, '\\');
			$fileName = '';
			$namespace = '';
			if($lastNsPos = strrpos($className, '\\')){
				$namespace = substr($className, 0, $lastNsPos);
				$className = substr($className, $lastNsPos + 1);
				$fileName .= str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
			}
			//Leave commented to allow underscores in filenames.cd 
			//$fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

			$fileName .= $className . '.php';
			require $fileName;
		}
	}

	/* 
		Directory Structure:
		
		CSV_Files
		|
		|_ hd2013_varlist.csv
		|_ hd2013.csv
		|_ hd2013.xls

		Classes
		|
		|_ File
			|
			|_ manageFile.php
			|_ fileHandling.php
		|__ Html
			|
			|_ Html_functions.php
			|_ printLinks.php
		|
		|_ Interfaces
			|
			|_ manageFile.php
			|_ fileHandling.php
			|_ htmlFunctions.php

	*/

?>