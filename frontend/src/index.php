<?php

echo 'frontend<br><br>'.PHP_EOL;

$ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, "http://back-dev-nginx:80/index.php");

//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// $output contains the output string
$output = curl_exec($ch);

var_dump(json_decode($output));

// close curl resource to free up system resources
curl_close($ch);