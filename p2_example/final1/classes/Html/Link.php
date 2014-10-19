<?php
	
	namespace classes\Html;
	
	// Prints Links 
	class Link {
		// Construct to make link 
		public function __construct($records, $headings){
			$i = -1;
			if(empty($_GET)){
				foreach($records as $record){
					$i++;
					\classes\Html\html::makeLink('record',$i, $record['INSTNM']);
				}
			}
		}
	}
?>