<?php  

/*
	Nikhil Virparia
	IS218
	Assignment 2
*/


namespace files\csv\map;

  // create map
	class map_new_file{
		
		public static function create_map($file_handler) 
		{
			foreach($file_handler as $array23) 
		{
			$key = $array23['varname'];
			$value = $array23['varTitle'];
			$map[$key] = $value;		
		}
		return $map;
		
		}
		
	}
?>