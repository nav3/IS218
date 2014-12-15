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
   
  // questions #5
	 class question5 extends page {
      
// Template for printing questions
	function get(){
		$host = "sql.njit.edu";
		$dbname = "nav3";
		$user ="nav3";
		$pass = "YD9Aowq9";
		try{
		$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
		$DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
		$STH = $DBH->query("SELECT schools.Name, finances.N2011, enrolled.E2011, round(finances.N2011/enrolled.E2011,0) AS AssetPerS FROM schools INNER JOIN finances ON finances.UID = schools.UID INNER JOIN enrolled ON schools.UID = enrolled.UID ORDER BY AssetPerS DESC limit 10 ");
		
		$this->content .= "<h1>Colleges with the highest net assets per student in 2011</h1><br>"; 
		
		
		$this->content .= "<table border = 2>";
		$this->content .= "
			<tr>
				<th>College Name</th>
				<th>Total net assests per student</th>
			</tr>
		";
		
		while($rows = $STH->fetch()){
			$this->content .= "<tr>";
			$this->content .= "<td>" . $rows['Name'] . "</td>";
			$this->content .= "<td>" . $rows['AssetPerS'] . "</td>";
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
?>