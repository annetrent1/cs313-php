<?php
function get_db() {
    $db = NULL
	try
	{
		$dbUrl = getenv('postgres://xypjmqpkzlscmu:24437885416e4c873ae74d4cd981752da2ee80926fb1c77adbb91f1cc08d9fb0@ec2-54-205-187-125.compute-1.
        amazonaws.com:5432/da93e0gi4o6im');
		$dbOpts = parse_url($dbUrl);
	
		$dbHost = $dbOpts["ec2-54-205-187-125.compute-1.amazonaws.com"];
		$dbPort = $dbOpts["5432"];
		$dbUser = $dbOpts["xypjmqpkzlscmu"];
		$dbPassword = $dbOpts["24437885416e4c873ae74d4cd981752da2ee80926fb1c77adbb91f1cc08d9fb0"];
        $dbName = ltrim($dbopts["path"],'/');
        
        $dbOptions = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

		$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword, $dbOptions);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $exc)
	{
		echo 'Error!: ' . $exc->getMessage();
		exit;
    }
    return $db;
}
	

?>
