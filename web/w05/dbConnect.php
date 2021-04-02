<?php
    $db = NULL
	try
	{
		$dbUrl = getenv('postgres://xypjmqpkzlscmu:24437885416e4c873ae74d4cd981752da2ee80926fb1c77adbb91f1cc08d9fb0@ec2-54-205-187-125.compute-1.
        amazonaws.com:5432/da93e0gi4o6im');
		$dbOpts = parse_url($dbUrl);
	
		$dbHost = $dbOpts["host"];
		$dbPort = $dbOpts["port"];
		$dbUser = $dbOpts["user"];
		$dbPassword = $dbOpts["password"];
		$dbName = ltrim($dbOpts["path"],'/');
		$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $exc)
	{
		echo 'Error!: ' . $exc->getMessage();
		die();
	}
	

?>
<form method="get">
<input type="text" name="book"/>
<input type="submit" value="Submit"/>
</form>
<?php
		
?>