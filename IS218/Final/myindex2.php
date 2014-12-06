<?php
  
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

     public function __construct() {
        $this->pageheader();
        $this->pagemenu();
     }
     private function pagemenu() {
                $this->content .= '
		         <ul>
						<li><a href="myindex2.php">Index</a></li> 
			            <li><a href="myindex2.php?page=tweet">Tweet</a></li>
				        <li><a href="myindex2.php?page=timeline">Timeline</a></li> 
			</ul>
			<br/>';

     }
     private function pagefooter() {

       $this->content .= '<h4>Page footer</h4></body></html>';
     }
     private function pageheader() {
        $this->content .= '<!doctype html>
	<html class="no-js" lang="">
	    <head>
		 <meta charset="utf-8">
		 <meta http-equiv="X-UA-Compatible" content="IE=edge">
		 
		<title>Hello</title>
		 <meta name="description" content="">
		 <meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		 <!-- Place favicon.ico in the root directory -->
		 <link rel="stylesheet" href="css/normalize.css"> <link rel="stylesheet" href="css/main.css">
				 <script src="js/vendor/modernizr-2.8.3.min.js"></script>
	     </head>
             <body>';

     }

     public function __destruct() {
       $this->pagefooter();
	echo $this->content;
     }

     public function get() {
       $this->content .=  '
	   <br/>
       <form method="POST" action="myindex2.php?page=timeline">
       First name: <input type="text" name="firstname"><br>
       Last name: <input type="text" name="lastname">
      <input type="submit">
      </form>
       ';
     }

     public function post() {
       print_r($_POST);
     }

   }
  
   class index extends page {
   public function __construct() {
      parent::__construct();
      $this->content .= '<p>DJI</p>
	  <iframe width="560" height="315" src="//www.youtube.com/embed/_tnZYUEu-No" frameborder="0" allowfullscreen></iframe>
	  <br/>
	  <br/>
	  <br/>
	  
	 <!-- <iframe width="853" height="480" src="http://www.thevideo.me/embed-2fzy7uxrrshg-853x480.html" frameborder="0" allowfullscreen></iframe>;-->
	  
	  
	  ';
   }
   }

   class tweet extends page {

   public function __construct() {
      parent::__construct();
      $this->content .= '<p>Tweeting I will go</p>';
   }

   }

   class timeline extends page {
   
      public function __construct() {
      parent::__construct();
      $this->content .= '<p>Timeline I will go</p>';
   }

   }

