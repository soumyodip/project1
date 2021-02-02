<?php
// $curl=curl_init();

// curl_setopt($curl,CURLOPT_URL,'http://www.google.com/');

// curl_exec($curl);

// curl_close($curl);

$curl=curl_init();

// https://imgd.aeplcdn.com/227x128/n/cw/ec/32597/tata-altroz-right-front-three-quarter20.jpeg?q=85
// https://imgd.aeplcdn.com/227x128/n/cw/ec/32958/tata-harrier-right-front-three-quarter58.jpeg?q=85
// https://www.carwale.com/tata-cars/
// https://grofers.com/s/?q=tea&suggestion_type=0&t=1

$string_name="biryani";
$url="https://www.zomato.com/kolkata/jadavpur-restaurants/biryani?category=1";

curl_setopt($curl,CURLOPT_URL,$url);

curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

curl_exec($curl);

?>