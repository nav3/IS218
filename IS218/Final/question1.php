<?php
/*
	Nikhil Virparia
	IS218
	Final Project
*/

   require_once'autoloader.php';
   	use \pages\page as page;
   
   	// questions #1
   class question1 extends page {
	function get(){
			$host = "sql.njit.edu";
			$dbname = "nav3";
			$user ="nav3";
			$pass = "YD9Aowq9";
			try{
			$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
			$DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			$STH = $DBH->query("SELECT DISTINCT schools.Name, E2011 
			FROM enrolled INNER JOIN schools ON enrolled.UID = schools.UID ORDER BY enrolled.E2011 DESC ");
				
			$this->content .= "<h1>Highest College Enrolment</h1><br>";
			
			$this->content .= "<table border = 2>";
			$this->content .= "
				<tr>
					<th>College Name</th>
					<th>Enrolment</th>
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

?>