<?php
/* Nikhil Virparia 
	Challenge 3
*/

	require 'autoloader.php';

	/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
	$settings = array(
		'oauth_access_token' => "244220520-5Zqsbyg0H16PhutEcPsIJclYPTkvLYwCI4E1dsst",
		'oauth_access_token_secret' => "Y9KTxUjYQcvIdLitIARHcNEdT5EBPNefuCUZpgg8Hbm11",
		'consumer_key' => "26ByypCHIDoaNnAxkljOkDcNw",
		'consumer_secret' => "nkYu1ogLV3tSwAfxTjGvuX7vfmytWJceFMoXAps4A0RfVPwVxA"
	);

	$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
	$requestMethod = 'GET';

	$getField = '?screen_name=NikhilVirparia';
	
	$twitter = new classs\api($settings);

	$string = json_decode($twitter->setGetField($getField)->buildOauth($url, $requestMethod)->performRequest(), $assoc = TRUE);

	// userTweets
	$userTweets = classs\htmltools::prints($string);
	
	// Post tweet
	//$printFriends = classs\htmltools::printFriends($string);
	if($string["errors"][0]["message"] != "") {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();}

	echo $userTweets; 
	//echo $printFriends; 

?>

<?php
echo "<br/>";

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
	$settings = array(
		'oauth_access_token' => "244220520-5Zqsbyg0H16PhutEcPsIJclYPTkvLYwCI4E1dsst",
		'oauth_access_token_secret' => "Y9KTxUjYQcvIdLitIARHcNEdT5EBPNefuCUZpgg8Hbm11",
		'consumer_key' => "26ByypCHIDoaNnAxkljOkDcNw",
		'consumer_secret' => "nkYu1ogLV3tSwAfxTjGvuX7vfmytWJceFMoXAps4A0RfVPwVxA"
	);
	
	$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
		$requestMethod = 'GET';

	$getField = '?screen_name=NikhilVirparia';
	
	$twitter = new classs\api($settings);

	$string = json_decode($twitter->setGetField($getField)->buildOauth($url, $requestMethod)->performRequest(), $assoc = TRUE);

	// userTweets
	$prints1 = classs\htmltools::prints1($string);
	
	// Post tweet
	//$printFriends = classs\htmltools::printFriends($string);
	if($string["errors"][0]["message"] != "") {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();}



	echo $prints1;
	

?>







