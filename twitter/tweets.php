<?php
ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "",
    'oauth_access_token_secret' => "", 
	'consumer_key' => "pwnqZOZinuWJz4UwKMDtZOtDe",
'consumer_secret' => "G6cwvLeTaJZXkjwB22OfCvmgy9ifM1QsaQ1MH9pBOFj3iP5AKR"
);

$url = 'https://api.twitter.com/1.1/search/tweets.json';
$requestMethod = 'GET';
$getfield = '?geocode='.$_GET['lat'].','.$_GET['lng'].',1mi&count=20';
$twitter = new TwitterAPIExchange($settings);

echo $twitter->setGetfield($getfield)
	->buildOauth($url, $requestMethod)
	->performRequest(); die();

