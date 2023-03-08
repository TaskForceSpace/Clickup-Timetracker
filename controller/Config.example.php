<?php
// Eine Klasse pro Datei und die Datei heißt genauso wie die Klasse
final class Config {
	public static $teamid = "";
	public static $apiKey = "";
	public static $phpUrl = "";

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