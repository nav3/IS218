<?php
/*
	Nikhil Virparia
	IS218
	Final Project
*/ 
	use \pages\page as page;
   require_once'autoloader.php';

  // Home page content (index) 
   class index extends page {
   public function __construct() {
      parent::__construct();
      $this->content .= '
	  
<!-- Index page content goes here for testing-->
Home page
	  ';
	}
   }
 
 ?>
   
