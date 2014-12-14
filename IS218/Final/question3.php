<?php
/*
	Nikhil Virparia
	IS218
	Final Project
*/

 	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	use \pages\page as page;
   require_once'autoloader.php';
   
 // questions #3
    class question3 extends page {
   
      public function __construct() {
		  parent::__construct();
		  $this->content .= '
		  
		<!-- Question 3 page content goes here -->
		<p>Question 3 </p>';
		// Template for printing questions
		function get(){
				
				$host = "localhost";
				$dbname = "colleges";
				$user = "root";
				$pass = "cadcszxcadc12";
				try{
				$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
				$DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
				$STH = $DBH->query("SELECT college.Name, EN2011 FROM enrollment INNER JOIN college ON enrollment.UID = college.UID ORDER BY enrollment.EN2011 DESC ");
				
				$this->content .= "<h1>Highest College Enrollment in 2011</h1><br>";
				
				$this->content .= "<table border = 2>";
				$this->content .= "
					<tr>
						<th>College Name</th>
						<th>Enrollment</th>
					</tr>
				";
				
				while($rows = $STH->fetch()){
					$this->content .= "<tr>";
					$this->content .= "<td>" . $rows['Name'] . "</td>";
					$this->content .= "<td>" . $rows['EN2011'] . "</td>";
					$this->content .= "</tr>";
				}
				
				$this->content .= "</table>";
				
				$DBH = null;
				}
				catch(PDOException $e){
					echo $e->getMessage();
				}
				
			}

			
   }

   }
   


?>