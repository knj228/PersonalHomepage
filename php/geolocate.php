<?php
  // get variables from JavaScript for coordinates
  $latitude = $_GET["lat"];
  $longitude = $_GET["lon"];

  // construct API request
  $api_url = 'http://api.openweathermap.org/data/2.5/weather';
  $api_city = '?lat=' . $latitude . '&lon=' . $longitude;
  $api_units = '&units=imperial';
  $api_key = '&APPID=f6c6c1f48d36459aead137761dfedc03'; // substitute YOUR_API_KEY with your APPID
  $api_request = $api_url . $api_city . $api_units . $api_key;

  // initialize cURL session
  $curl = curl_init();
  // set URL to load
  curl_setopt($curl, CURLOPT_URL, $api_request);
  // return value as a string (rather than printing)
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

  // retrieve and assign to varaiable as a string
  $response = curl_exec($curl);

  // if an error occurs . . .
  if (curl_error($curl)) {
    // send an error message
    echo 'error';
  } else { // if no errors . . .
    // print URL contents
    echo $response;
  }

  // close cURL session
  curl_close($curl);
?>
