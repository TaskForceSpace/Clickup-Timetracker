<?php
// Eine Klasse pro Datei und die Datei heißt genauso wie die Klasse
class Config {
	public static $password = "12345";
	public static $teamid = "12345";

	public static $array = [
		"password" => "qwer",
		"benutzer" => "blubbo",	
	];

	public $test = "yxz";
}
// auf static variablen zugreifen
Config::$teamid;

// nicht static variablen
$con = new Config();
$con->test;


