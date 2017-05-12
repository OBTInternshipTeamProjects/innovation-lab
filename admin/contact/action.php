<?php
	$dbname = "innovation-lab";
	$servername = "localhost";
	$username = "root";
	$password = "root";

try {
		ini_set('display_errors', 'On');
		$conn = new PDO("mysql:host=$servername;port=8889;dbname=$dbname", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connected successfully";
    }
catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }
	
	
	$conn = null; 
?>