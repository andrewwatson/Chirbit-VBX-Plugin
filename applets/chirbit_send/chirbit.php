<?php

	function chirbit_post($username,$API_KEY,$URL,$title = "Message From My Phone", $lat = 33.791736, $long = -84.338117 ) {

$data = array(
    'username' => $username,
    'api_key' => $API_KEY,
    'tags' => 'tag, post from phone, message,FTW!',
    'filename' => $URL,
    'filesource' => 'twilio',
    'title' => $title,
    'latitude' => $lat,
    'longitude' => $long
);

$c = curl_init();
curl_setopt($c, CURLOPT_URL, "http://api.chirbit.com/chirbit/postChirbit.xml");
curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($c, CURLOPT_POST, true);
curl_setopt($c, CURLOPT_POSTFIELDS, $data);
$output = curl_exec($c);

$info = curl_getinfo($c);

curl_close($c);


	}
?>
