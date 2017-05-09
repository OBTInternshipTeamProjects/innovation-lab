<?php
	ini_set('display_errors', 'On');
	
	define('APP_ROOT', __DIR__);
	define('VIEW_ROOT', APP_ROOT.'/views');
	define('BASE_URL', 'http://localhost:8888/innovation-lab'); // Replace the directory with the website name
	
	$dbname = "innovation-lab";
	$username = "root";
	$password = "root";
	//$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
	
	try { 
			$db = new PDO('mysql:host=127.0.0.1; port=8889; dbname=innovation-lab',$username,$password);
		}
		catch(PDOException $ex){ 
			die(
				"Failed to connect to the database: " . $ex->getMessage()
			);
		}			
		
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		
			
		header('Content-Type: text/html; charset=utf-8');
	require 'functions.php';
?>