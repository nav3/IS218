<?php
require 'autoloader.php';


/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "244220520-5Zqsbyg0H16PhutEcPsIJclYPTkvLYwCI4E1dsst",
    'oauth_access_token_secret' => "Y9KTxUjYQcvIdLitIARHcNEdT5EBPNefuCUZpgg8Hbm11",
    'consumer_key' => "26ByypCHIDoaNnAxkljOkDcNw",
    'consumer_secret' => "nkYu1ogLV3tSwAfxTjGvuX7vfmytWJceFMoXAps4A0RfVPwVxA"
);

// Json List followers
$url = "https://api.twitter.com/1.1/followers/list.json";
$requestMethod = "GET";
	if (isset($_GET['user']))  {
		$user = $_GET['user'];
	}

$field = "?screen_name=NikhilVirparia";
$twitter = new classs\api($settings);
$string = json_decode($twitter->setGetfield($field)->buildOauth($url, $requestMethod)->performRequest(),$assoc = TRUE);


// User Timeline 
$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
$requestMethod = "GET";
	if (isset($_GET['user']))  {
		$user = $_GET['user'];
	}
$field = "?screen_name=NikhilVirparia";
$twitter = new classs\api($settings);
$string = json_decode($twitter->setGetfield($field)->buildOauth($url, $requestMethod)->performRequest(),$assoc = TRUE);
	
	echo "<h1>Timeline</h1>";
	$timeline = classs\htmltools::timeline($field, $string);
	echo "<h1>Followers</h1>";
	$follower = classs\htmltools::follower($string);
	
echo "<h1>Home Timeline</h1>";
	//home timeline
$url = "https://api.twitter.com/1.1/statuses/home_timeline.json";
$requestMethod = "GET";
	if (isset($_GET['user']))  {
		$user = $_GET['user'];
	}
	else if (isset($_GET['count'])) {
			$user = $_GET['count'];
	}else {$count = 20;
			}
$getfield = "?screen_name=$user";
$twitter = new classs\api($settings);
$string = json_decode($twitter->setGetfield($getfield)->buildOauth($url, $requestMethod)->performRequest(),$assoc = TRUE);
	
	$home = classs\htmltools::home($getfield, $string);
		

echo $timeline;
echo $follower; 
echo $home; 
										  
?>										  