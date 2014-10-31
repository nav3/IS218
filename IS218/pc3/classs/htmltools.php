<?php

namespace classs;
	class htmltools{
		public static $homelabels = ['Time and Date of Tweet','Tweet','Tweeted By','Screen name','Followers','Friends'];
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
					foreach($string as $list1){					
					$tbl .= '<tr>';
					$tbl .= '<td>' . $list1['created_at'] . '</td>';
					$tbl .= '<td>' . $list1['text'] . '</td>';
					$tbl .= '<td>' . $list1['user']['name'] . '</td>';
					$tbl .= '<td>' . $list1['user']['screen_name'] . '</td>';
					$tbl .= '<td>' . $list1['user']['followers_count'] . '</td>';
					$tbl .= '<td>' . $list1['user']['friends_count'] . '</td>';
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
					foreach($string[0] as $list1){					
					$tbl .= '<tr>';
					$tbl .= '<td>' . $list1['name'] .'</td>';
					$tbl .= '<td>' . $list1['screen_name'] . '</td>';
					$tbl .= '</tr>';
				}			
					$tbl .= '</table>';
					echo $tbl; 
				
			}
			//Hometimeline
				public static function home($getfield, $string){

				echo '<table><tr>';
				$i = 0;
				foreach(self::$homelabels as $label){					
					echo '<th>' . self::$homelabels[$i] . '</th>';
					$i++;
				}
					foreach($string as $list1){					
					$tbl .= '<tr>';
					$tbl .= '<td>' . $list1['created_at'] . '</td>';
					$tbl .= '<td>' . $list1['text'] . '</td>';
					$tbl .= '<td>' . $list1['user']['name'] . '</td>';
					$tbl .= '<td>' . $list1['user']['screen_name'] . '</td>';
					$tbl .= '<td>' . $list1['user']['followers_count'] . '</td>';
					$tbl .= '<td>' . $list1['user']['friends_count'] . '</td>';
					$tbl .= '</tr>';
				}			
					$tbl .= '</table>';
					echo $tbl; 
	
		}
		
	

		}


?>
