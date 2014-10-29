<?php
require_once('TwitterAPIExchange.php');
//Twitter API
echo "<h2>Simple Twitter API Test</h2>";


 
/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "244220520-5Zqsbyg0H16PhutEcPsIJclYPTkvLYwCI4E1dsst",
    'oauth_access_token_secret' => "Y9KTxUjYQcvIdLitIARHcNEdT5EBPNefuCUZpgg8Hbm11",
    'consumer_key' => "26ByypCHIDoaNnAxkljOkDcNw",
    'consumer_secret' => "nkYu1ogLV3tSwAfxTjGvuX7vfmytWJceFMoXAps4A0RfVPwVxA"
);

$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
$requestMethod = "GET";
$getfield = '?screen_name=NikhilVirparia&count=20';
$twitter = new TwitterAPIExchange($settings);
$string = json_decode($twitter->setGetfield($getfield)
->buildOauth($url, $requestMethod)
->performRequest(),$assoc = TRUE);
if($string["errors"][0]["message"] != "") {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();}
echo "<pre>";
//print_r($string);
echo "</pre>";

foreach($string as $items)
    {
        echo "Time and Date of Tweet: ".$items['created_at']."<br />";
        echo "Tweet: ". $items['text']."<br />";
        echo "Tweeted by: ". $items['user']['name']."<br />";
        echo "Screen name: ". $items['user']['screen_name']."<br />";
        echo "Followers: ". $items['user']['followers_count']."<br />";
        echo "Friends: ". $items['user']['friends_count']."<br />";
        echo "Listed: ". $items['user']['listed_count']."<br /><hr />";
    }
	


?>