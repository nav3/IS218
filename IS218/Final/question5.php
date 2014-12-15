<?php
/*
	Nikhil Virparia
	IS218
	Final Project
*/

	use \pages\page as page;
   require_once'autoloader.php';
   
  // questions #5
	 class question5 extends page {
      
	function get(){
		$host = "sql.njit.edu";
		$dbname = "nav3";
		$user ="nav3";
		$pass = "YD9Aowq9";
		try{
		$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
		$DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		$STH = $DBH->query("SELECT DISTINCT schools.Name,enrolled.E2010,enrolled.E2011,((enrolled.E2011-enrolled.E2010)*100/enrolled.E2010) AS PIncrease 
		FROM schools INNER JOIN enrolled ON enrolled.UID = schools.UID ORDER BY PIncrease DESC ");
		
		$this->content .= "<h1>Colleges with the largest percentage increase in enrolment between the years of 2011 and 2010</h1><br>"; 
		
		$this->content .= "<table border = 2>";
		$this->content .= "
			<tr>
				<th>College Name</th>
				<th>Number of students 2010</th>
				<th>Number of students 2011</th>
				<th>Percent Increase</th>
			</tr>
		";
		
		while($rows = $STH->fetch()){
			$this->content .= "<tr>";
			$this->content .= "<td>" . $rows['Name'] . "</td>";
			$this->content .= "<td>" . $rows['E2010'] . "</td>";
			$this->content .= "<td>" . $rows['E2011'] . "</td>";
			$this->content .= "<td>" . $rows['PIncrease'] . "</td>";
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