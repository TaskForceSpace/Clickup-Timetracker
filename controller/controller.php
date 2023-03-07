<?php

require_once "./Config.php";

/**
 * Requires libcurl
 */
header('Access-Control-Allow-Origin: *');

$teamId = Config::$teamid;
$apiKey = Config::$apiKey;
$phpUrl = Config::$phpUrl;

$query = array(
	"start_date" => $_GET['startDate'],
	"end_date" => $_GET['endDate'],
	"assignee" => $_GET['userID']
);

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_HTTPHEADER => [
		"Authorization: $apiKey",
		"Content-Type: application/json"
	],
	CURLOPT_URL => $phpUrl . $teamId . "/time_entries?" . http_build_query($query),
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_CUSTOMREQUEST => "GET",
]);

$response = curl_exec($curl);
$error = curl_error($curl);

curl_close($curl);

if ($error) {
	echo "cURL Error #:" . $error;
} else {
	echo $response;
}
