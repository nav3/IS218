<?php
	namespace classs;

	class htmltools
	{
		public static function prints(Array $record) {
			$x = '<img src="' . $record[0]['user']['profile_image_url'] . '">';
			$x .= '<h3>' . $record[0]['user']['followers_count'] . ' Followers</h3>';
			$x .= '<h3>' . $record[0]['user']['friends_count'] . ' Friends</h3>';
			$x .= '<h3>' . $record[0]['user']['listed_count'] . ' Listed</h3>';
			$x .= '<h1>' . $record[0]['user']['name'] . ' Tweets</h1>';
		
			foreach($record as $records) {
				$x .= '<div>' . $records['text'] . '</div>';
			}

			return $x;
		} //end function
		
		public static function Profile(Array $record) {
			echo '<table border=1>';
			$y;
			$index = -1;
			foreach($record as $records) {
				$index++;
				if($index === 0) {
					foreach($records['user'] as $key => $value) {
						$y .=  ucfirst($key) . $value ; 
					}
				}
			}
			echo '</table>';
			$y;

			return $y;
		} //end function


	}
?>