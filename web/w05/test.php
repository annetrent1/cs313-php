<?php
function get_db() {
	try {
		// Default Heroku Postgres configuration URL
		$dbUrl = 'postgres://xypjmqpkzlscmu:24437885416e4c873ae74d4cd981752da2ee80926fb1c77adbb91f1cc08d9fb0@ec2-54-205-187-125.compute-1.
        amazonaws.com:5432/da93e0gi4o6im';
		// Get the various parts of the DB Connection from the URL
		$dbopts = parse_url($dbUrl);
		$dbHost = $dbopts["hoec2-54-205-187-125.compute-1.amazonaws.comst"];
		$dbPort = $dbopts["5432"];
		$dbUser = $dbopts["xypjmqpkzlscmu"];
		$dbPassword = $dbopts["24437885416e4c873ae74d4cd981752da2ee80926fb1c77adbb91f1cc08d9fb0"];
		$dbName = ltrim($dbopts["path"],'/');
		// Tell PDO to give us exception errors for debugging in needed
		$dbOptions = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		// Create the PDO connection for PGSQL
		$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword, $dbOptions);
		return $db;
	}
	catch (PDOException $e) {
		echo 'Error connecting to DB.';
		echo 'Details: '.$e; #<-------- for debugging only not for production site (remove me)
		exit;
	}
}

