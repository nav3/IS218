<?php

namespace classs;
	class htmltools{
		//public static $Hometimeline_labels = ['Time and Date of Tweet','Tweet','Tweeted By','Screen name','Followers','Friends'];
		public static $post_labels = ['Posted On','Post','Screen Name'];
		public static $timelables = ['Time and Date of Tweet','Tweet','Tweeted By','Screen name','Followers','Friends'];	
		public static $fblabels = ['Name','Screen name'];
		
		//Printing Timeline
		public static function timeline($field, $string){
			$x = '<h1> <img src="' . $string[0]['user']['profile_image_url'] . '"> ' . $string[0]['user']['name'] . ' Tweets</td></tr> </h1>';

				echo '<table><tr>';
				
				$i = 0;
				foreach(self::$timelables as $label){					
					echo '<th>' . self::$timelables[$i] . '</th>';
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
		
		// follower
		public static function follower($string){
				echo '<table><tr>';
				$i = 0;
				foreach(self::$fblabels as $fblabels){					
					echo '<th>' . self::$fblabels[$i] . '</th>';
					$i++;
				}
					foreach($string[0] as $items){					
					$tbl .= '<tr>';
					$tbl .= '<td>' . $items['name'] .'</td>';
					$tbl .= '<td>' . $items['screen_name'] . '</td>';
					$tbl .= '</tr>';
				}			
					$tbl .= '</table>';
					echo $tbl; 
				
			}
		
		
	

		}


?>
