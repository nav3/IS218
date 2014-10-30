<?php

namespace classs;
	class htmltools{

		public static $timeline_labels = ['Time and Date of Tweet','Tweet','Tweeted By','Screen name','Followers','Friends'];	
		
		//Printing Timeline
		public static function prTimeline($getfield, $string){
			$x = '<h1> <img src="' . $string[0]['user']['profile_image_url'] . '"> ' . $string[0]['user']['name'] . ' Tweets</td></tr> </h1>';

				echo '<table><tr>';
				
				$i = 0;
				foreach(self::$timeline_labels as $label){					
					echo '<th>' . self::$timeline_labels[$i] . '</th>';
					$i++;
				}
					foreach($string as $items){					
					$tbl .= '<tr>';
					$tbl .= '<td>' . $items['created_at'] . '</td>';
					$tbl .= '<td>' . $items['text'] . '</td>';
					$tbl .= '<td>' . $items['user']['name'] . '</td>';
					$tbl .= '<td>' . $items['user']['screen_name'] . '</td>';
					$tbl .= '<td>' . $items['user']['followers_count'] . '</td>';
					$tbl .= '<td>' . $items['user']['friends_count'] . '</td>';
					$tbl .= '</tr>';
				}			
					$tbl .= '</table>';
					echo $tbl;
							
	
		}
	

		}


?>
