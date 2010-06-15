<?php

	function chirbit_post($username,$API_KEY,$URL,$title = "Message From My Phone", $lat = 33.791736, $long = -84.338117 ) {

$data = array(
    'username' => $username,
    'pass' => $API_KEY,
    'filename' => $URL,
    'filesource' => 'twilio',
    'title' => $title,
    'latitude' => $lat,
    'longitude' => $long
);

$c = curl_init();
curl_setopt($c, CURLOPT_URL, "https://api.chirbit.com/chirbit/postChirbit");
curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($c, CURLOPT_POST, true);
curl_setopt($c, CURLOPT_POSTFIELDS, $data);
curl_setopt($c, CURLOPT_SSL_VERIFYPEER,false);

$output = curl_exec($c);

$info = curl_getinfo($c);

curl_close($c);


	}
?>
