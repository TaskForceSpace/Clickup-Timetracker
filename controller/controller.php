<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
require_once ("./Config.php");

/**
 * Requires libcurl
 */
header('Access-Control-Allow-Origin: *');

$teamId = Config::$teamid;
$apiKey = Config::$apiKey;
$phpUrl = Config::$phpUrl;

//echo $_GET['start_date'];

$query = array(
	"space_id" => 54413910,
	"start_date" => (isset($_GET['start_date'])) ? $_GET['start_date'] : 0,
	"end_date" => (isset($_GET['end_date'])) ? $_GET['end_date'] : 0,
	//"assignee" => (isset($_GET['userID'])) ? $_GET['userID'] : 0,
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

//echo $phpUrl . $teamId . "/time_entries?" . http_build_query($query);
//print_r($query);

$response = curl_exec($curl);
$error = curl_error($curl);

curl_close($curl);

if ($error) {
	echo "cURL Error #:" . $error;
} else {
	echo $response;
}