<?php  
/*
	Nikhil Virparia
	IS218
	Final Project
*/

 namespace pages;
  $obj = new program;
 
class program {

  public function __construct() {
   $page_type = 'index';

   if(!empty($_GET)) {
      $page_type = $_GET['page'];
   }
   
   $obj = new $page_type;
   
   if($_SERVER['REQUEST_METHOD'] == 'GET') {
     $obj->get();
   }  else {
     $obj->post();
   }
  }
}

   abstract class page {

     
     public $content;

	// Construct page header, and links
     public function __construct() {
        $this->pageheader();
        $this->pagemenu();
     }
	 // Page menu links
     private function pagemenu() {
                $this->content .= '
				
<ul>
<li><a href="index.php">Index</a></li> 
<li><a href="index.php?page=question1">Colleges highest enrolment</a></li>
<li><a href="index.php?page=question2">Colleges largest amount of total liabilities.</a></li> 
<li><a href="index.php?page=question3">Colleges largest amount of net assets.</a></li> 
<li><a href="index.php?page=question4">Colleges largest amount of net assets per student.</a></li> 
<li><a href="index.php?page=question5">Colleges largest percentage increase in enrolment between the years of 2011 and 2010.</a></li> 
</ul>

<br/>';

     }

		// Make page header
     private function pageheader() {
        $this->content .= '<!doctype html>
		
<html class="no-js" lang="">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
		 
<title>College Data Project</title>

<meta name="description" content="">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="apple-touch-icon" href="apple-touch-icon.png">
 
 <!-- Place favicon.ico in the root directory -->
<link rel="stylesheet" href="css/normalize.css"> <link rel="stylesheet" href="css/main.css">
 <script src="js/vendor/modernizr-2.8.3.min.js"></script>
 
</head>

<body>

<h1> College Data Project </h1>';

     }

		// every single page (content)
     public function get() {
       $this->content .=  '
	   
<!-- Hello 
<h2>hello</h2>-->
       ';
     }
	 
	 // Page footer
	private function pagefooter() {
   $this->content .= '
<!-- Page footer
<h4>Page footer</h4>-->
	 
</body>
</html>';
     }
	 
	 // destruct pagefooter, and content to the page
	public function __destruct() {
    $this->pagefooter();
	echo $this->content;
   }
	 

     public function post() {
       print_r($_POST);
     }

   }
   
  ?>