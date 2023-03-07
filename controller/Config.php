<?php
// Eine Klasse pro Datei und die Datei heißt genauso wie die Klasse
final class Config {
	public static $password = "12345";
	public static $teamid = "30364712";
	public static $apiKey = "pk_48468128_J15MMUVX7Z1IU34VRZANI79W7ZUA5PP8";
	public static $phpUrl = "https://dummy.jakubwachowiak.de/controller.php";

	public static $array = [
		"password" => "qwer",
		"benutzer" => "blubbo",	
	];

	public $test = "yxz";
}
// auf static variablen zugreifen
Config::$teamid;
Config::$apiKey;
Config::$phpUrl;

// nicht static variablen
$con = new Config();
$con->test;