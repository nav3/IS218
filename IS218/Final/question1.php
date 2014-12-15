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
   
   	// questions #1
   class question1 extends page {

  // public function __construct() {
    //  parent::__construct();
      //$this->content .= '
	  
//<!-- Question 1 page content goes here -->
///<p>Question 1 </p>';
// Template for printing questions
function get(){
		$host = "sql.njit.edu";
		$dbname = "nav3";
		$user ="nav3";
		$pass = "YD9Aowq9";
		try{
		$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
		$DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		//$host = "localhost";
		//$dbname = "schools";
		//$table = "schools";
		//$user = "nav3";
		//$pass = "YD9Aowq9";
		//try{
		// If not then write localhost, and colleges
		//$DBH = new PDO('mysql:host=sql2.njit.edu;dbname=nav3',$user,$pass);
		//$DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		//$STH = $DBH->query("SELECT schools.Name, EN2011 FROM enrollment INNER JOIN schools ON enrollment.UID = schools.UID ORDER BY enrollment.EN2011 DESC ");
		$STH = $DBH->query("SELECT schools.Name, E2011 FROM enrolled INNER JOIN schools ON enrolled.UID = schools.UID ORDER BY enrolled.E2011 DESC ");
		//$STH = $DBH->query("SELECT * from schools limit10");
		
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
			$this->content .= "<td>" . $rows['E2011'] . "</td>";
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

//  }


?>