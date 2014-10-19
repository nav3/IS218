<?php

/*
	Nikhil Virparia
	IS218
	Assignment 2
*/
	namespace classes\Html;
	
	// Prints Links 
	class Link {
		// Construct to make link 
		public function __construct($records, $headings){
			$i = -1;
			if(empty($_GET)){
				foreach($records as $record){
					$i++;
					// call the html class
					\classes\Html\html::makeLink('record',$i, $record['INSTNM']);
				}
			}
		}
	}
?>