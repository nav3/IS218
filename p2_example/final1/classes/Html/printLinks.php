<?php
	
	namespace classes\Html;
	
	// Prints Links 
	class printLinks {
		// Construct to make link 
		public function __construct($records, $headings){
			$i = -1;
			if(empty($_GET)){
				foreach($records as $record){
					$i++;
					\classes\Html\htmlFunctions::makeLink('record',$i, $record['INSTNM']);
				}
			}
		}
	}
?>