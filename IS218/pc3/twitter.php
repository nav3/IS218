<?php
require 'autoloader.php';


/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "244220520-5Zqsbyg0H16PhutEcPsIJclYPTkvLYwCI4E1dsst",
    'oauth_access_token_secret' => "Y9KTxUjYQcvIdLitIARHcNEdT5EBPNefuCUZpgg8Hbm11",
    'consumer_key' => "26ByypCHIDoaNnAxkljOkDcNw",
    'consumer_secret' => "nkYu1ogLV3tSwAfxTjGvuX7vfmytWJceFMoXAps4A0RfVPwVxA"
);

$url = "https://api.twitter.com/1.1/followers/list.json";
$requestMethod = "GET";
	if (isset($_GET['user']))  {
		$user = $_GET['user'];
	}else {$user  = "NikhilVirparia";
		}
	if (isset($_GET['count'])) {
			$user = $_GET['count'];
	}else {$count = 20;
			}
$getfield = "?screen_name=username";
$twitter = new classs\api($settings);
$string = json_decode($twitter->setGetfield($getfield)->buildOauth($url, $requestMethod)->performRequest(),$assoc = TRUE);



//status timeline
$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
$requestMethod = "GET";
	if (isset($_GET['user']))  {
		$user = $_GET['user'];
	}else {$user  = "NikhilVirparia";
		}
	if (isset($_GET['count'])) {
			$user = $_GET['count'];
	}else {$count = 20;
			}
$getfield = "?screen_name=NikhilVirparia";
$twitter = new classs\api($settings);
$string = json_decode($twitter->setGetfield($getfield)->buildOauth($url, $requestMethod)->performRequest(),$assoc = TRUE);
	

$timeline = classs\htmltools::prTimeline($getfield, $string);
	// userTweets
	$userTweets = classs\htmltools::prints($string);
$followlist = classs\htmltools::prFollowerlist($string);
echo $followlist;
echo $timeline;
echo $userTweets; 
										  
?>										  