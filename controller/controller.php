<?php
require_once "./Config.php";

/**
 * Requires libcurl
 */
header('Access-Control-Allow-Origin: *');

const teamId = Config::$teamid;

$query = array(
	"start_date" => $_GET['startDate'],
	"end_date" => $_GET['endDtate'],
	"assignee" => $_GET['userID']
);

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_HTTPHEADER => [
		"Authorization: <API_KEY>",
		"Content-Type: application/json"
	],
	CURLOPT_URL => "https://api.clickup.com/api/v2/team/" . teamId . "/time_entries?" . http_build_query($query),
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
