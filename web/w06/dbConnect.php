<?php
function get_db() {
	try {
		// Default Heroku Postgres configuration URL
		$dbUrl = getenv('DATABASE_URL');
		// Get the various parts of the DB Connection from the URL
		$dbopts = parse_url($dbUrl);
		$dbHost = $dbopts["host"];
		$dbPort = $dbopts["port"];
		$dbUser = $dbopts["user"];
		$dbPassword = $dbopts["pass"];
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

