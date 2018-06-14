<?php
ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);
// echo "Hello world";

function getTheHandle ($url) {
  return curl_init($url);
}

function getTheWordsFromTheRequiredWebsiteBecauseWhyNotAndIReallyEnjoyAnnoyingYouWithThisLongFunctionName($url, $word) {
  $handle = getTheHandle($url);
  curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
  $html = curl_exec($handle);


  $words = explode(' ', $html);
  // var_dump($words);
  // echo $words;

  $finalWords =  array_slice($words, 0, 10000);

  return $finalWords;
}

$words = getTheWordsFromTheRequiredWebsiteBecauseWhyNotAndIReallyEnjoyAnnoyingYouWithThisLongFunctionName('https://www.meetup.com/PHP-Dublin/events/251371429/', 'Hello');

$hellos = [];
$worlds = [];

foreach($words as $word){
  if ($word == "World") {
    $worlds[] = $word;
  }

  if ($word == "Hello") {
    $hellos[]=$word;
  }


}

function getRandomNumber($maxNumber) {
    $result = rand(0, $maxNumber);
    return $result;
}
$index = getRandomNumber(count($hellos));
$theChosenHello = $hellos[$index];
$anotherIndex = getRandomNumber(count($worlds));
$theChosenWorld = $worlds[$anotherIndex];

echo $theChosenHello;
echo " ";
$lowered = strtolower($theChosenWorld);
echo $lowered;


// var_dump($hellos);
// var_dump($worlds);
